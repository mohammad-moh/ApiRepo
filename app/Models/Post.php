<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Post extends Model
{
    use HasFactory;
     protected $table= 'posts';
     protected $fillable = [
         'title',
         'body',
         'photo',
         'user_id'
     ];

     public function user(){
       return  $this->belongsTo(App\Models\User::class);
     }
}
