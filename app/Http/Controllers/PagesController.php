<?php

namespace laravel_myfirstwebsite\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Homepage
    public function home()
    {
        $tasks = [
            'Start',
            'Logare'
        ];

        return view('index', [
            'greeting' => 'Bine ai venit!',
            'tasks' => $tasks
        ]);
    }

    // Start/instructions page
    public function instructions() {
        return view('instructions/view');
    }

    // Clocking page
    public function clocking() {
        return view('clocking/view');
    }

    // Admin Panel page
    public function admin_panel()
    {
        return view('admin_panel/view');
    }

    // Settings page
    public function settings()
    {
        return view('settings/view');
    }
}
