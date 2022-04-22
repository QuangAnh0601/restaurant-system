<?php

namespace App\Exports;
use App\Sale;
use App\SaleDetail;

// use Maatwebsite\Excel\Concerns\FromCollection;
// use Maatwebsite\Excel\Concerns\WithHeadings;
// use Maatwebsite\Excel\Concerns\WithMapping;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class SaleExport implements FromView
{
    // /**
    // * @return \Illuminate\Support\Collection
    // */
    // public function collection()
    // {
    //     return SaleDetail::all();
    // }

    // public function headings(): array
    // {
    //     return ["Menu ID", "Menu", "Quantity", "Price", "Total Price"];
    // }

    // public function map($saleDetail): array
    // {
    //     return [
    //         'The Total Amount of Sale from ',
    //        $saleDetail->menu_id,
    //        $saleDetail->menu_name,
    //        $saleDetail->quantity,
    //        $saleDetail->menu_price,
    //        $saleDetail->menu_price,
    //     ];
    // }
    public function __construct($from, $to){
        $this->from = $from;
        $this->to = $to;
    }
    public function view(): View
    {
        return view('export.sale', [
            'saleDetails' => SaleDetail::all(),
            'sales' => Sale::all()->whereBetween('created_at',[$this->from, $this->to])
        ]);
    }
}
