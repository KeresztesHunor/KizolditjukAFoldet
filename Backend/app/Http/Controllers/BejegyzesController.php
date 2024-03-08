<?php

namespace App\Http\Controllers;

use App\Models\Bejegyzes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BejegyzesController extends Controller
{
    public function index()
    {
        return response()->json(Bejegyzes::all());
    }

    public function showOsztalyId($osztaly_id)
    {
        return DB::table('bejegyzes as b')
            ->select('*')
            ->join('tevekenysegs as t', 'b.tevekenyseg_id', '=', 't.tevekenyseg_id')
            ->where('b.osztaly_id', '=', $osztaly_id)
            ->get()
        ;
    }

    public function store(Request $request)
    {
        $bejegyzes = new Bejegyzes();
        $bejegyzes->tevekenyseg_id = $request->tevekenyseg_id;
        $bejegyzes->osztaly_id = $request->osztaly_id;
        $bejegyzes->allapot = $request->allapot;
        $bejegyzes->save();
    }
}
