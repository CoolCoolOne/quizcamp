<?php

namespace App\Livewire\Quiz;

use Livewire\Component;
use App\Models\Quiz;
use Illuminate\Support\Facades\Auth;

class CreateQuiz extends Component
{
     public $title = '';
 
    public $user_id = '';

    public function save()
    {
        Quiz::create(
            $this->only(['title', 'user_id'=>Auth::user()->id])
        );
 
        session()->flash('status', 'Новый опрос создан');
 
        return $this->redirect('/quizzes');
    }
 
    public function render()
    {
        return view('livewire.quiz.create-quiz');
    }
}
