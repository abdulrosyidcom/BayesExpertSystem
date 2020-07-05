<?php

namespace App\Http\Controllers\Users;

use App\Disease;
use App\Http\Controllers\Controller;
use App\Symptom;
use App\Temporary;
use App\TemporaryFinal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mavinoo\Batch\Batch;

class DiagnosisController extends Controller
{
    public function index()
    {
        $symtoms = Symptom::all();
        return view('users.diagnosis.index', compact('symtoms'));
    }

    public function getProbGagalGinjal()
    {
        $total = 1;
        foreach (TemporaryFinal::where('disease_id', 1)->get() as $probKidney) {
            $total = $total * $probKidney->probability;
        }

        foreach (Disease::where('id', 1)->get() as $data) {
            $result = $total * $data->probability;
        }
        return $result;
    }

    public function getProbKankerGinjal()
    {
        //
    }

    public function getProbInfeksiGinjal()
    {
        //
    }

    public function getProbSindromNefrotik()
    {
        //
    }

    public function getProbHidronefrosis()
    {
        //
    }

    public function getProbKankerKandungKemih()
    {
        //
    }

    public function getProbGinjalPolikistik()
    {
        //
    }

    public function getProbNefritisInterstisial()
    {
        //
    }

    public function getProbSistitisInterstisialis()
    {
        //
    }

    public function getProbInfeksiSaluranKemih()
    {
        //
    }

    public function getProbBatuGinjal()
    {
        //
    }

    public function proccess(Request $request)
    {
        Temporary::query()->truncate();
        TemporaryFinal::query()->truncate();

        foreach ($request->symptom as $symptoms) {
            Temporary::create(['symptom_id' => $symptoms]);
        }

        // $query = DB::select("SELECT `rules`.`disease_id`,`rules`.`symptom_id`, `rules`.`probability` from `rules` JOIN `temporaries` ON `rules`.`symptom_id` = `temporaries`.`symptom_id` ORDER BY `rules`.`symptom_id` ASC");

        $queryTemporaryFinal = DB::table('rules')
            ->join('temporaries', 'rules.symptom_id', '=', 'temporaries.symptom_id')
            ->select('rules.disease_id', 'rules.symptom_id', 'rules.probability')
            ->orderBy('rules.symptom_id', 'asc')
            ->get();

        foreach ($queryTemporaryFinal as $qtf) {
            DB::table('temporary_finals')->insert([
                'disease_id' => $qtf->disease_id,
                'symptom_id' => $qtf->symptom_id,
                'probability' => $qtf->probability
            ]);
        }

        return redirect('/users/diagnosis');
    }

    public function results()
    {
        return view('users.diagnosis.results');
    }
}
