<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return view('home');
    }

    public function containsLetters(Request $request)
    {
        request()->validate([
            'text_1'    => 'required',
            'text_2'    => 'required',
        ]);

        $check = strpos($request->text_2, $request->text_1);

        if ($check == true) {
            return $data = [
                'status'    => true,
                'message'   => 'Text 1 ada pada text 2'
            ];
        } else {
            return $data = [
                'status'    => false,
                'message'   => 'Text 1 tidak ada pada text 2'
            ];
        }
    }
}
