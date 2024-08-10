<?php

namespace App\Http\Controllers;

use App\Models\Test;
use App\Models\TestCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class TestsController extends Controller
{
    public function index()
    {
        $categories = TestCategory::all();
        return view('test_index_index', compact('categories'));
    }

    public function view($slug)
    {
        $test = Test::where('slug', $slug);
        $test = $test->firstOrFail();
        return view('test_index_view', compact('test'));
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
        $categoryNameSlug = str_replace(' ', '-', strtolower($this->getCategoryName($params['category'])));
        $categoryName = strtolower($this->getCategoryName($params['category']));
        $test->save();
        $test->slug =  Str::slug('bai-thi-'. $categoryNameSlug.'-'.$test->test_id);
        $test->slug_name = 'Bài thi '. $categoryName.' '.$test->test_id;
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

    public static function getAllTest()
    {
        return Test::get();
    }

    public static function getCategoryName($categoryId)
    {
        $category = TestCategory::where('id', $categoryId);
        $category = $category->firstOrFail();
        return $category->name;
    }

    public static function getByCategory($categoryId)
    {
        return Test::where('category', $categoryId)->get();
    }
}
