<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sehir extends Controller
{
    public function goster($id)
    {
        return view('city', ['id' => $id]);
    }
}
