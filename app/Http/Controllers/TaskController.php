<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * 建立一個新的控制器實例。
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
}
