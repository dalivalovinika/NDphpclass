<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Quiz;

class QuizController extends Controller
{
    public function index()
    {
        $quizzes = Quiz::all();
        return view('quizzes.index', compact('quizzes'));
    }

    public function edit($id = null)
    {
        if ($id) {
            $quiz = Quiz::find($id);
        } else {
            $quiz = new Quiz();
        }

        return view('quizzes.edit', compact('quiz'));
    }

    public function update(Request $request, $id = null)
    {

        if ($id) {
            $quiz = Quiz::find($id);
            $quiz->update($request->all());
        } else {
            Quiz::create($request->all());
        }

        return redirect('/quizzes');
    }


    
}
