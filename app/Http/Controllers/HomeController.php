<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CovidStatisticService;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index(CovidStatisticService $covidStatisticService) {
        $today = Carbon::now()->toDateString();

        $confirmedCovidCasesUntilToday = $covidStatisticService->getTotalCasesByCountryAndType('macedonia', 'confirmed');
        $recoveredCovidCasesUntilToday = $covidStatisticService->getTotalCasesByCountryAndType('macedonia', 'recovered');
        $deadCovidCasesUntilToday = $covidStatisticService->getTotalCasesByCountryAndType('macedonia', 'deaths');

        return view('index', [
            'today' => $today,
            'confirmedCovidCasesUntilToday' => $confirmedCovidCasesUntilToday,
            'recoveredCovidCasesUntilToday' => $recoveredCovidCasesUntilToday,
            'deadCovidCasesUntilToday' => $deadCovidCasesUntilToday,
        ]);

        // return response([
        //     $confirmedCovidCasesUntilToday,
        //     $recoveredCovidCasesUntilToday,
        //     $deadCovidCasesUntilToday,
        // ]);
    }
}