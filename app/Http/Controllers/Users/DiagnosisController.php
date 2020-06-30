<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Symptom;
use App\Temporary;
use App\TemporaryFinal;
use Illuminate\Http\Request;

class DiagnosisController extends Controller
{
    public function index()
    {
        $symtoms = Symptom::all();
        return view('users.diagnosis.index', compact('symtoms'));
    }

    public function proccess(Request $request)
    {
        Temporary::query()->truncate();
        TemporaryFinal::query()->truncate();

        foreach ($request->symptom as $symptoms) {
            Temporary::create(['symptom_id' => $symptoms]);
        }

        $tempraries = Temporary::all();

        foreach ($tempraries->rule() as $rule) {
            TemporaryFinal::create([
                'disease_id' => $rule->disease_id,
                'symptom_id' => $rule->symptom_id,
                'probability' => $rule->probability,
            ]);
        }

        return redirect('/users/diagnosis');
    }

    public function results()
    {
        return view('users.diagnosis.results');
    }
}
