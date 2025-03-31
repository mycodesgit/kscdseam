<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

use App\Models\Offices;

class FitnessAppointmentController extends Controller
{
    public function fitnessappointRead()
    {
        $office = Offices::orderBy('office_abbr', 'ASC')->get();

        return view('fitness.workout', compact('office'));
    }
}
