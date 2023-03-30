<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
use Carbon\Carbon;

class PageController extends Controller
{
    public function index()
    {
        $today = Carbon::today()->toDateString();
        $today_trains = Train::whereDate('departure', $today)->get();
        $other_trains = Train::whereDate('departure', '!=', $today)->get();
        return view('homepage', compact('today_trains', 'other_trains', 'today'));
    }
}
