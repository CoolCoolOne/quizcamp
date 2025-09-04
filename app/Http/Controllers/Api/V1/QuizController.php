<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Quiz;

class QuizController extends Controller
{
    public function index(?int $id = null)
    {
        if ($id === null) {
            $quizzes = Quiz::All();
        } else {
            $quizzes = Quiz::All()->where('id', $id);
        }
        return $quizzes;
    }
}
