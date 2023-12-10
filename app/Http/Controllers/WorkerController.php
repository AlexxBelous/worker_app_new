<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function index()
    {
        return "This is action index from Worker Controller";
    }
    public function show()
    {
        return "This is action show from Worker Controller";
    }
}
