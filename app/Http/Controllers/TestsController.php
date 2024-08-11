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
        $questionsData = json_decode($test->question, true);
        $anwsersData = json_decode($test->anwser, true);
        $correctAnwser = json_decode($test->correct_anwser, true);
        $count = count($questionsData);
        $data = [];
        for ($i = 1; $i <= $count; $i++) {
            $data[$i] = [
                'question' => $questionsData[$i],
                'answer' => $anwsersData[$i],
                'correct' => $correctAnwser[$i],
            ];
        }
        return view('test_index_view', compact('test', 'data'));
    }

    public function edit($id)
    {
        $test = Test::where('test_id', $id);
        $test = $test->firstOrFail();
        $questionsData = json_decode($test->question, true);
        $anwsersData = json_decode($test->anwser, true);
        $correctAnwser = json_decode($test->correct_anwser, true);
        $count = count($questionsData);
        $data = [];
        for ($i = 1; $i <= $count; $i++) {
            $data[$i] = [
                'question' => $questionsData[$i],
                'answer' => $anwsersData[$i],
                'correct' => $correctAnwser[$i],
            ];
        }
        return view('admin_test_edit', compact('test', 'data', 'count'));
    }

    public function save(Request $request, $id = null)
    {
        if ($id) {
            $test = Test::where('test_id', $id);
            $test = $test->firstOrFail();
        } else {
            $test = new Test();
        }
        $params = $request->post();
        $test->category = $params['category'];
        $categoryNameSlug = str_replace(' ', '-', strtolower($this->getCategoryName($params['category'])));
        $categoryName = strtolower($this->getCategoryName($params['category']));
        $question = [];
        $anwser = [];
        $correctAnswer = [];
        for ($i = 1; $i <= 50; $i++) {
            if (isset($params['question_'. $i])) {
                $question[$i] = $params['question_'. $i];
                $anwser[$i]['A'] = $params['question_'. $i. '_A'];
                $anwser[$i]['B'] = $params['question_'. $i. '_B'];
                $anwser[$i]['C'] = $params['question_'. $i. '_C'];
                $anwser[$i]['D'] = $params['question_'. $i. '_D'];
                $correctAnswer[$i] = $params['answer_'. $i];
            }
        }
        $test->question = json_encode($question);
        $test->anwser = json_encode($anwser);
        $test->correct_anwser = json_encode($correctAnswer);
        $test->save();
        $test->slug =  Str::slug('bai-thi-'. $categoryNameSlug.'-'.$test->test_id);
        $test->slug_name = 'Bài thi '. $categoryName.' '.$test->test_id;
        $test->save();
        return Redirect::to('admin/tests');
    }

    public function delete($id)
    {
        $test = Test::where('test_id', $id);
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
