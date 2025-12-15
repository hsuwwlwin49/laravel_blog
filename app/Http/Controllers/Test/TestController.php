<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function index1()
    {
        return "Controller : Article List";
    }
    public function detail($id)
    {
        return "Controller : Article Details for ID - $id"; 
    }
    public function test()
    {
        return "Testing!!";
    }
    public function order()
    {
        return view('articles.order');
    }
<<<<<<< HEAD
    public function index()
=======
    public function items()
>>>>>>> 64754173b969fcbdff763dc4ebb5c450af842c16
    {
        $data = [
            [ "id" => 1, "item" => "Apple" ],
            [ "id" => 2, "item" => "Orange" ],
            [ "id" => 3, "item" => "Tomato" ],
            [ "id" => 4, "item" => "Banana"],
            [ "id" => 5, "item" => "Avocado"],
            [ "id" => 6, "item" => "Watermelon"],
            [ "id" => 7, "item" => "Grapes"],
        ];
        return view('articles.index', [
            'articles' => $data
            ]);    }

}
