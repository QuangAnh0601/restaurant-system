<?php

namespace App\Http\Controllers\Report;
use App\Exports\SaleExport;
use Maatwebsite\Excel\Facades\Excel;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExportController extends Controller
{

    public function export(Request $request) 
    {
        $from = $request->from;
        $to = $request->to;

        return Excel::download(new SaleExport($from, $to), 'SaleDetail.xlsx');


    }
}
