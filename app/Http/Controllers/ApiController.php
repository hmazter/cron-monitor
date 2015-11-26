<?php

namespace App\Http\Controllers;

use App\Models\Monitor;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    public function run(Request $request, Monitor $monitor)
    {
        $monitor->updateState(Monitor::STATE_RUNNING);
    }

    public function complete(Request $request, Monitor $monitor)
    {
        $monitor->updateState(Monitor::STATE_COMPLETED);
    }

    public function fail(Request $request, Monitor $monitor)
    {
        $monitor->updateState(Monitor::STATE_FAIL);
    }
}
