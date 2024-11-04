<?php

namespace App\Http\Controllers;

use App\Models\DataSource;
use Illuminate\Http\Request;

class DataSourceController extends Controller
{
    public function index()
    {
        $dataSources = DataSource::all();
        return view('data_sources.index', compact('dataSources'));
    }

    public function create()
    {
        return view('data_sources.create');
    }

    public function store(Request $request)
    {
        DataSource::create($request->all());
        return redirect()->route('data_sources.index');
    }
}
