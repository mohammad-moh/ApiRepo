<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;

class bard extends Model
{
    use HasFactory;

    protected $table = "bards";

    protected $fillable = [
        'name',
        'type',
        'email',
        'stu_id',
    ];
    public function student(){
        $this->belongsTo(Student::class);
    }
}