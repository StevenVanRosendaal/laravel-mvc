<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pages;

class PagesController extends Controller
{

    // hoi

    public function view() {
        
        $pages = Pages::all();

        return view('page.view', [
            'pages' => $pages
        ]);
    }

    public function addPage() {

        return view('page.add');
        
    }

    public function processAddPage(Request $request) {

        $newPage = Pages::create([
            // Optie 1
            'title' => $request->title,
            // Optie 2
            'content' => $request->input('content'),
            'user_id' => 1,
        ]);

        return redirect()->route('home');
    }
}
