<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $dashboards = Dashboard::all();
        return view('dashboards.index', compact('dashboards'));
    }

    public function create()
    {
        return view('dashboards.create');
    }

    public function store(Request $request)
    {
        Dashboard::create($request->all());
        return redirect()->route('dashboards.index');
    }
}
