<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pages;

class PagesController extends Controller
{
    public function view() {
        
        $pages = Pages::all();

        return view('page.view', [
            'pages' => $pages
        ]);
    }

    public function add() {
        $newPage = Pages::create([
            'content' => 'This is a new page',
            'user_id' => 1,
            'title' => 'New page'
        ]);
        
        return redirect()->route('home');
    }
}
