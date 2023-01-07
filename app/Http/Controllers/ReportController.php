<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use App\Models\Sale;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function reports_day(){
        $sales = Sale::WhereDate('sale_date', Carbon::today('America/Lima'))->get();
        $total = $sales->sum('total');
        return view('admin.report.reports_day', compact('sales', 'total'));
    }
    public function reports_date(){
        $sales = Sale::whereDate('sale_date', Carbon::today('America/Lima'))->get();
        $total = $sales->sum('total');
        return view('admin.report.reports_date', compact('sales', 'total'));
    }
    public function report_results(Request $request){
        $fi = $request->fecha_ini. ' 00:00:00';
        $ff = $request->fecha_fin. ' 23:59:59';
        $sales = Sale::whereBetween('sale_date', [$fi, $ff])->get();
        $total = $sales->sum('total');
        return view('admin.report.reports_date', compact('sales', 'total'));
    }

    public function rday(){
        $purchases = Purchase::WhereDate('purchase_date', Carbon::today('America/Lima'))->get();
        $total = $purchases->sum('total');
        return view('admin.report.rday', compact('purchases', 'total'));
    }

    public function rdate(){
        $purchases = Purchase::whereDate('purchase_date', Carbon::today('America/Lima'))->get();
        $total = $purchases->sum('total');
        return view('admin.report.rdate', compact('purchases', 'total'));
    }

    public function rresults(Request $request){
        $fi = $request->fecha_ini. ' 00:00:00';
        $ff = $request->fecha_fin. ' 23:59:59';
        $purchases = Purchase::whereBetween('purchase_date', [$fi, $ff])->get();
        $total = $purchases->sum('total');
        return view('admin.report.rdate', compact('purchases', 'total'));
    }
}
