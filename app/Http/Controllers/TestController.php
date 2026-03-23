<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return view('test.index');
    }

    public function feed()
    {
        $html = view('test.feed')->render();

        return response()->json(array('success' => true, 'html' => $html));
    }
}
