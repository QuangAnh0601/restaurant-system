<table class="table">
    <thead>
        <tr>
            <th style="background-color: #396EB0">#</th>
            <th style="background-color: #396EB0">Receipt ID</th>
            <th style="background-color: #396EB0">Date Time</th>
            <th style="background-color: #396EB0">Table</th>
            <th style="background-color: #396EB0">Staff</th>
            <th style="background-color: #396EB0">Total Amount</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($sales as $sale)
            <tr style="background-color: #396EB0">
                <th><b>{{$sale->id}}</b></th>
                <th><b>{{$sale->id}}</b></th>
                <th><b>{{$sale->created_at}}</b></th>
                <th><b>{{$sale->table_name}}</b></th>
                <th><b>{{$sale->user_name}}</b></th>
                <th><b>{{$sale->total_price}}</b></th>
            </tr>
            <tr>
                <th></th>
                <th>Menu ID</th>
                <th>Menu</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total Price</th>
            </tr>
            @foreach ($sale->saleDetails as $sale_detail)
                <tr>
                    <td></td>
                    <td>
                        {{ $sale_detail->menu_id }}
                    </td>
                    <td>{{ $sale_detail->menu_name }}</td>
                    <td>{{ $sale_detail->quantity }}</td>
                    <td>{{ $sale_detail->menu_price }}</td>
                    <td>{{ $sale_detail->quantity * $sale_detail->menu_price }}</td>
                </tr>
            @endforeach
        @endforeach

    </tbody>
</table>