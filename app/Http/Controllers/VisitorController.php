<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DataTables;
use App\Service;
use App\Models\User;
use App\Models\Role;
use App\Models\Property;
use App\Models\Ameneti;
use App\Models\VisitSchedule;
use Hash;
use Auth;
class VisitorController extends Controller
{
    public function all()
    {
        return view('admin.visitors');
    }

    public function allData(Request $request)
    {
        $visitor=VisitSchedule::all();

        return DataTables::of($visitor)->make(true);
    }
}
