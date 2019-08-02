<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    /* We ask the model to give us a list of authors
    for this book */
    public function index()
    {
        return 'index method of test controller';
    }
    public function contact()
    {
        return 'contact method of test controller';
    }


    public function book($id)
    {
        $authors= ['bomba' ,  'liliana',  'Zoltan'];

        return view('book', ['id' => $id, 'authors' => $authors]);
    }
}
