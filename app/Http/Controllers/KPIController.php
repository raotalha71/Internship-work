<?php

namespace App\Http\Controllers;

use App\Models\KPI;
use Illuminate\Http\Request;

class KPIController extends Controller
{
    public function index()
    {
        $kpis = KPI::all();
        return view('kpis.index', compact('kpis'));
    }

    public function create()
    {
        return view('kpis.create');
    }

    public function store(Request $request)
    {
        KPI::create($request->all());
        return redirect()->route('kpis.index');
    }
}
