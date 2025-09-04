<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Quiz extends Model
{
    //
     protected $fillable = [
        'title',
        'user_id',
        'status',
        'attempt_number',
    ];
    public function getShortTitle()
    {
        $shortContent = Str::limit($this->title, 12);
        return $shortContent;
    }
    public function isActive()
    {
        return $this->status ? 'Открыт':'Закрыт';
    }
}
