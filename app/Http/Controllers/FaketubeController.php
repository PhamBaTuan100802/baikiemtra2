<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use Illuminate\Http\Request;

class FaketubeController extends Controller
{
    public function __invoke() {
        $channels = Channel::all();
    
        return view('faketube.index', compact('channels'));
    }
}
