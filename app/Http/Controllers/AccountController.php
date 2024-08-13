<?php

namespace App\Http\Controllers;

use App\Models\Test;
use App\Models\TestCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function index()
    {
        $currentUser = \Illuminate\Support\Facades\Auth::user();
        if($currentUser !== NULL && $currentUser->email) {
            return view('account_index_index', compact('currentUser'));
        }
        return Redirect::to('/');
    }
    public function edit(Request $request, $id)
    {
        $currentUser = User::where('id', $id)->first();
        $params = $request->all();
        $currentUser->name = $params['name'];
        $currentUser->phone = $params['phone'];
        $currentUser->dob = strtotime($params['dob']);
        if (!empty($params['new_password'])) {
            $currentUser->password = Hash::make($params['new_password']);
        }
        $currentUser->save();
        return Redirect::to('/tai-khoan');
    }

    public function testHistory()
    {
        $currentUser = \Illuminate\Support\Facades\Auth::user();
        $testArray = [];
        if($currentUser !== NULL && $currentUser->email) {
            $history = DB::table('test_user')->where('user_id', $currentUser->id)->get();
            foreach ($history as $testData) {
                $test = Test::where('test_id', $testData->test_id)->first();
                $categoryName = TestCategory::where('id', $test->category)->first();
                $testArray[] = [
                    'test_id' => $test->test_id,
                    'slug' => $test->slug,
                    'slug_name' => $test->slug_name,
                    'category' => $categoryName->name,
                    'score' => $testData->score
                ];
            }
            return view('account_index_test', compact('testArray'));
        }
        return Redirect::to('/');
    }
    public function saveTestResult(Request $request)
    {
        $testId = $request->input('test_id');
        $userId = $request->input('user_id');
        $score = $request->input('score');

        DB::table('test_user')->updateOrInsert(
            ['test_id' => $testId, 'user_id' => $userId],
            ['score' => $score]
        );
    }
}
