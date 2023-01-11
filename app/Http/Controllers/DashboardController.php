<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
        $last_project = DB::select('SELECT * FROM projects ORDER BY id DESC LIMIT 1;');
        return view('admin.dashboard', compact('last_project'));
    }
}
