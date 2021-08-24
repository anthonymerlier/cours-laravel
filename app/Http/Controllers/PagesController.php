<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function about(){
        return view('pages.about');
    }

    public function contact(){
        $coords = [ 
            'tel' => '01 02 03 04 05', 
            'mail' => 'contact@moi.fr',
            'noms' => [ "Joe", "Jack", "Averell", "Wiiliam" ], 
        ];
        return view('pages.contact', [ "coords" => $coords ] );
    }
}
