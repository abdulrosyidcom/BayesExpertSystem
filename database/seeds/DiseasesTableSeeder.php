<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiseasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('diseases')->insert([
            'code' => 'P01',
            'name' => 'Gagal Ginjal',
            'probability' => '0.1',
            'appear' => '4',
            'information' => 'Globally pontificate global value through distributed results. Interactively revolutionize long-term high-impact e-services for next-generation e-tailers. Synergistically embrace open-source convergence after enterprise leadership skills. Competently aggregate process-centric process improvements for state of the art networks. Quickly.',
            'suggestion' => 'Globally pontificate global value through distributed results. Interactively revolutionize long-term high-impact e-services for next-generation e-tailers. Synergistically embrace open-source convergence after enterprise leadership skills. Competently aggregate process-centric process improvements for state of the art networks. Quickly.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('diseases')->insert([
            'code' => 'P02',
            'name' => 'Kanker Ginjal',
            'probability' => '0.1',
            'appear' => '2',
            'information' => 'Globally pontificate global value through distributed results. Interactively revolutionize long-term high-impact e-services for next-generation e-tailers. Synergistically embrace open-source convergence after enterprise leadership skills. Competently aggregate process-centric process improvements for state of the art networks. Quickly.',
            'suggestion' => 'Globally pontificate global value through distributed results. Interactively revolutionize long-term high-impact e-services for next-generation e-tailers. Synergistically embrace open-source convergence after enterprise leadership skills. Competently aggregate process-centric process improvements for state of the art networks. Quickly.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('diseases')->insert([
            'code' => 'P03',
            'name' => 'Infeksi Ginjal',
            'probability' => '0.1',
            'appear' => '3',
            'information' => 'Globally pontificate global value through distributed results. Interactively revolutionize long-term high-impact e-services for next-generation e-tailers. Synergistically embrace open-source convergence after enterprise leadership skills. Competently aggregate process-centric process improvements for state of the art networks. Quickly.',
            'suggestion' => 'Globally pontificate global value through distributed results. Interactively revolutionize long-term high-impact e-services for next-generation e-tailers. Synergistically embrace open-source convergence after enterprise leadership skills. Competently aggregate process-centric process improvements for state of the art networks. Quickly.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('diseases')->insert([
            'code' => 'P04',
            'name' => 'Sindrom Nefrotik',
            'probability' => '0.1',
            'appear' => '2',
            'information' => 'Globally pontificate global value through distributed results. Interactively revolutionize long-term high-impact e-services for next-generation e-tailers. Synergistically embrace open-source convergence after enterprise leadership skills. Competently aggregate process-centric process improvements for state of the art networks. Quickly.',
            'suggestion' => 'Globally pontificate global value through distributed results. Interactively revolutionize long-term high-impact e-services for next-generation e-tailers. Synergistically embrace open-source convergence after enterprise leadership skills. Competently aggregate process-centric process improvements for state of the art networks. Quickly.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('diseases')->insert([
            'code' => 'P05',
            'name' => 'Hidronefrosis',
            'probability' => '0.1',
            'appear' => '2',
            'information' => 'Globally pontificate global value through distributed results. Interactively revolutionize long-term high-impact e-services for next-generation e-tailers. Synergistically embrace open-source convergence after enterprise leadership skills. Competently aggregate process-centric process improvements for state of the art networks. Quickly.',
            'suggestion' => 'Globally pontificate global value through distributed results. Interactively revolutionize long-term high-impact e-services for next-generation e-tailers. Synergistically embrace open-source convergence after enterprise leadership skills. Competently aggregate process-centric process improvements for state of the art networks. Quickly.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('diseases')->insert([
            'code' => 'P06',
            'name' => 'Kanker Kandung Kemih',
            'probability' => '0.1',
            'appear' => '2',
            'information' => 'Globally pontificate global value through distributed results. Interactively revolutionize long-term high-impact e-services for next-generation e-tailers. Synergistically embrace open-source convergence after enterprise leadership skills. Competently aggregate process-centric process improvements for state of the art networks. Quickly.',
            'suggestion' => 'Globally pontificate global value through distributed results. Interactively revolutionize long-term high-impact e-services for next-generation e-tailers. Synergistically embrace open-source convergence after enterprise leadership skills. Competently aggregate process-centric process improvements for state of the art networks. Quickly.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('diseases')->insert([
            'code' => 'P07',
            'name' => 'Ginjal Polikistik',
            'probability' => '0.1',
            'appear' => '2',
            'information' => 'Globally pontificate global value through distributed results. Interactively revolutionize long-term high-impact e-services for next-generation e-tailers. Synergistically embrace open-source convergence after enterprise leadership skills. Competently aggregate process-centric process improvements for state of the art networks. Quickly.',
            'suggestion' => 'Globally pontificate global value through distributed results. Interactively revolutionize long-term high-impact e-services for next-generation e-tailers. Synergistically embrace open-source convergence after enterprise leadership skills. Competently aggregate process-centric process improvements for state of the art networks. Quickly.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('diseases')->insert([
            'code' => 'P08',
            'name' => 'Nefritis Interstisial',
            'probability' => '0.1',
            'appear' => '3',
            'information' => 'Globally pontificate global value through distributed results. Interactively revolutionize long-term high-impact e-services for next-generation e-tailers. Synergistically embrace open-source convergence after enterprise leadership skills. Competently aggregate process-centric process improvements for state of the art networks. Quickly.',
            'suggestion' => 'Globally pontificate global value through distributed results. Interactively revolutionize long-term high-impact e-services for next-generation e-tailers. Synergistically embrace open-source convergence after enterprise leadership skills. Competently aggregate process-centric process improvements for state of the art networks. Quickly.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('diseases')->insert([
            'code' => 'P09',
            'name' => 'Sistitis Interstisialis',
            'probability' => '0.1',
            'appear' => '2',
            'information' => 'Globally pontificate global value through distributed results. Interactively revolutionize long-term high-impact e-services for next-generation e-tailers. Synergistically embrace open-source convergence after enterprise leadership skills. Competently aggregate process-centric process improvements for state of the art networks. Quickly.',
            'suggestion' => 'Globally pontificate global value through distributed results. Interactively revolutionize long-term high-impact e-services for next-generation e-tailers. Synergistically embrace open-source convergence after enterprise leadership skills. Competently aggregate process-centric process improvements for state of the art networks. Quickly.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('diseases')->insert([
            'code' => 'P10',
            'name' => 'Infeksi Saluran Kemih',
            'probability' => '0.1',
            'appear' => '2',
            'information' => 'Globally pontificate global value through distributed results. Interactively revolutionize long-term high-impact e-services for next-generation e-tailers. Synergistically embrace open-source convergence after enterprise leadership skills. Competently aggregate process-centric process improvements for state of the art networks. Quickly.',
            'suggestion' => 'Globally pontificate global value through distributed results. Interactively revolutionize long-term high-impact e-services for next-generation e-tailers. Synergistically embrace open-source convergence after enterprise leadership skills. Competently aggregate process-centric process improvements for state of the art networks. Quickly.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('diseases')->insert([
            'code' => 'P11',
            'name' => 'Batu Ginjal',
            'probability' => '0.1',
            'appear' => '3',
            'information' => 'Globally pontificate global value through distributed results. Interactively revolutionize long-term high-impact e-services for next-generation e-tailers. Synergistically embrace open-source convergence after enterprise leadership skills. Competently aggregate process-centric process improvements for state of the art networks. Quickly.',
            'suggestion' => 'Globally pontificate global value through distributed results. Interactively revolutionize long-term high-impact e-services for next-generation e-tailers. Synergistically embrace open-source convergence after enterprise leadership skills. Competently aggregate process-centric process improvements for state of the art networks. Quickly.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
