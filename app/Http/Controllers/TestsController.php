<?php

namespace App\Http\Controllers;

use App\Models\Test;
use App\Models\TestCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TestsController extends Controller
{
    public function index()
    {
        $categories = TestCategory::all();
        return view('test_index_index', compact('categories'));
    }
    public function save(Request $request)
    {
        $test = new Test();
        $params = $request->post();
        $file = $request->file('test_pdf');
        if ($file) {
            $file->storeAs('uploads/tests/', $file->getClientOriginalName());
            $path = $file->store('public/tests');
            $test->file_url = $path;
            $test->file_name = $file->getClientOriginalName();
        }
        $test->category = $params['category'];
        $test->answer = $params['answer'];
        $test->save();
        return Redirect::to('admin/tests');
    }

    public function delete($slug)
    {
        $test = Test::where('test_id', $slug);
        $test = $test->firstOrFail();
        $test->delete();
        return Redirect::to('admin/tests');
    }

    public function getAllTest()
    {
        return Test::get();
    }

    public function getCategoryName($categoryId)
    {
        $category = TestCategory::where('id', $categoryId);
        $category = $category->firstOrFail();
        return $category->name;
    }
}
