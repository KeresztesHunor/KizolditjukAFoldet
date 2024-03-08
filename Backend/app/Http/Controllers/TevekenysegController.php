<?php

namespace App\Http\Controllers;

use App\Models\Tevekenyseg;
use Illuminate\Http\Request;

class TevekenysegController extends Controller
{
    public function index()
    {
        return response()->json(Tevekenyseg::all());
    }
}
