<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FamilyShoesController extends Controller
{
    public function home(){
        return view("frontend.home");
    }
    public function about(){
        return view("frontend.about");
    }
    public function produits(){
        return view("frontend.products");
    }
    public function contact(){
        return view("frontend.contact");
    }
}
