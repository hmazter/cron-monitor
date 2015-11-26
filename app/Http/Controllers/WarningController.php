<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class WarningController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();
        $warnings = $user->warnings;

        return view('warnings.index')->with('warnings', $warnings->reverse());
    }
}
