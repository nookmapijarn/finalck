<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Certificate;

class AddFinalStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(){
        return view('addfinalstudent');
    }

    public function add(Request $request)
    {
        $Certificate = Certificate::create([
            'STD' => $request->STD,
            'PRENAME' => $request->PRENAME,
            'NAME' => $request->NAME,
            'SURNAME' => $request->SURNAME,
            'CARDID' => $request->CARDID,
            'ID' => $request->ID,
            'LAVEL' => $request->LAVEL,
            'FIN_SEM' => $request->FIN_SEM,
            'TRNGRP' => $request->TRNGRP,
            'TRNRUN' => $request->TRNRUN,
        ]);
        echo $Certificate.'add'.'<br><br><br><br><br><br>';
        //return view('help.addsuccess');
    }
}
