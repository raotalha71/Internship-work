<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\DataSourceController;

Route::resource('data-sources', DataSourceController::class);
use App\Http\Controllers\DashboardController;

Route::resource('dashboards', DashboardController::class);
use App\Http\Controllers\AnalyticsController;

Route::get('analytics', [AnalyticsController::class, 'index'])->name('analytics.index');

use App\Http\Controllers\ReportController;

Route::resource('reports', ReportController::class);
use App\Http\Controllers\KPIController;

Route::resource('kpis', KPIController::class);
