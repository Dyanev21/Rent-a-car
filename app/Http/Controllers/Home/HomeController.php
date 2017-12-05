<?php

namespace App\Http\Controllers\Home;

use App\add_cars;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function contact() {
        return view('home.addresses');
    }
    public function single_car(){
        $add_cars = add_cars::paginate(config('constant.per_page'));
        return view('home.single-car', compact('add_cars'));
    }
}
