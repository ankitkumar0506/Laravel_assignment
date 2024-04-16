<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use App\Notifications\Notify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

}
