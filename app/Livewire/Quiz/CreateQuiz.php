<?php

namespace App\Livewire\Quiz;

use Livewire\Component;
use App\Models\Quiz;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;

class CreateQuiz extends Component
{
    #[Validate('required|string')]
    public string $title = '';
    
    public $user_id = '';

    public $status = null;

    public function mount()
    {
        $this->user_id = Auth::user()->id;
    }

    public function save()
    {
        Quiz::create(
            $this->all()
        );
 
        // session()->flash('status', 'Новый опрос создан');
 
        return $this->redirect('/quizzes');
    }
 
    public function render()
    {
        return view('livewire.quiz.create-quiz');
    }
}
