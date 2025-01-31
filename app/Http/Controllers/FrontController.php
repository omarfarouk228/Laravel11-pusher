<?php

namespace App\Http\Controllers;

use App\Events\NotifyUserEvent;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    function index()
    {
        return view('index');
    }

    function notify()
    {

        return  event(new NotifyUserEvent("Hello!"));
    }
}
