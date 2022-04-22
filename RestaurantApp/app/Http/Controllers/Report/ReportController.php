<?php

namespace App\Http\Controllers\Report;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Sale;
use App\SaleDetail;
use App\User;
class ReportController extends Controller
{
    public function result (Request $request)
    {
        // $newYear = new Carbon('first day of January 2018');
        $from = $request->from;
        $to = $request->to;
        $sales = Sale::all()->whereBetween('created_at',[$from, $to]);
        $price = Sale::all()->whereBetween('created_at',[$from, $to])->sum('total_price');
        $result = 'Total Result '. Sale::all()->whereBetween('created_at',[$from, $to])->count('id');
        $saleDetails = SaleDetail::all();
        return view('report.result')->with('sales', $sales)->with('saleDetails', $saleDetails)->with('from', $from)->with('to', $to)->with('result', $result);

    }
    public function index(){
        return view('report.index');
    }


}
