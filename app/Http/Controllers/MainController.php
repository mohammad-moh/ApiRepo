<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return 'This is main page';
    }

    /**
* @OA\Info(
*     title="My the best API",
*     version="1.0.0"
*/
}
