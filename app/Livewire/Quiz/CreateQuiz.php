<?php

namespace App\Livewire\Quiz;

use Livewire\Component;
use App\Models\Quiz;
use Illuminate\Support\Facades\Auth;

class CreateQuiz extends Component
{
    public string $title = '';
 
    public $user_id = '';

    public function mount()
    {
        $this->user_id = Auth::user()->id;
    }

    public function save()
    {
        Quiz::create(
            $this->all()
        );
 
        session()->flash('status', 'Новый опрос создан');
 
        return $this->redirect('/quizzes');
    }
 
    public function render()
    {
        return view('livewire.quiz.create-quiz');
    }
}
