<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RankController extends Controller
{
    public function calculatePrice(Request $request)
{
    $rank = curentrank::where('name', $request->input('rank'))->first();
    $numberOfWins = $request->input('number_of_wins');
    $totalPrice = $rank->price * $numberOfWins;
    return view('boostpages.boost2')->with(['totalPrice' => $totalPrice]);
}
}
