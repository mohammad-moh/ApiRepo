<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\bard;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';

    protected $fillable = [
        'name',
        'middle_name',
        'studentsstudents',
        'email',

    ];

    public function bard(){
        $this->hasOne(bard::class);
    }
}
