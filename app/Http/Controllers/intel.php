<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class intel extends Controller
{
    public function index()
    {
        return response()->json([
            'status' => 'OK',
            'timestamp' => Carbon::now(),
            'name' => 'Abigail',
            'state' => 'CA',
        ]);

      
    }
}
