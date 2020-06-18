<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Symptom;

class DiagnosisController extends Controller
{
    public function index()
    {
        $symtoms = Symptom::all();
        return view('users.diagnosis.index', compact('symtoms'));
    }
}
