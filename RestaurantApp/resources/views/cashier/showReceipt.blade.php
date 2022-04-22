<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant App - Receipt - SaleID: {{$sale->id}}</title>
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>
    <div id="wrapper">
        <div id="receipt-header" class="align-middle">
            <h3 id="restaurant-name">Restaurant App Devtamin</h3>
            <p>Address: 341 N Vakanda Ave</p>
            <p>Anapolis, MD 1234</p>
            <p>tel: 473-xxxx-xxxx</p>
            <p>Reference Receipt: <strong>{{$sale->id}}</strong></p>
        </div>
        <div id="receipt-body">
            <table class="tb-sale-detail">
                <thead>
                    <tr class="header-menu">
                        <th class="header-menu">#</th>
                        <th class="header-menu">Menu</th>
                        <th class="header-menu">Qty</th>
                        <th class="header-menu">Price</th>
                        <th class="header-menu">Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($saleDetails as $saleDetail)
                        <tr>
                            <td width="30" align="center">{{$saleDetail->menu_id}}</td>
                            <td width="180" align="center">{{$saleDetail->menu_name}}</td>
                            <td width="50" align="center">{{$saleDetail->quantity}}</td>
                            <td width="55" align="center">{{$saleDetail->menu_price}}</td>
                            <td width="65" align="center">{{$saleDetail->menu_price * $saleDetail->quantity}}</td>

                        </tr>
                    @endforeach



                </tbody>
            </table>

            <table class="tb-sale-total">
                <tbody>
                    <tr>
                        <td >Total Quantity</td>
                        <td style="border-right:1px solid black">{{$saleDetails->count()}}</td>
                        <td >Total</td>
                        <td align="right">${{number_format($sale->total_price, 2)}}</td>

                    </tr>
                    <tr>
                        <td colspan="2">Payment Type</td>
                        <td colspan="2" align="right">{{$sale->payment_type}}</td>

                    </tr>
                    <tr>
                        <td colspan="2">Paid Amount</td>
                        <td colspan="2" align="right">${{number_format($sale->total_received, 2)}}</td>
                    </tr>                    
                    <tr>
                        <td colspan="2">Change</td>
                        <td colspan="2" align="right">{{$sale->change, 2}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div id="receipt-footer">
            <p align="center">Thank you!!!</p>
        </div>
        <div id="buttons">
            <a href="/cashier">
                <button class="btn1 btn-back">
                    Back to Cashier
                </button>
            </a>
            <button class="btn1 btn-print" type="button" onclick="window.print(); 
            return false;"> 
                Print
            </button>
        </div>
    </div>
</body>
</html>