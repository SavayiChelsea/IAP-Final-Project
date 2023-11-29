<h1>Invoices</h1>

<h2>Parking Invoices</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Invoice</th>
                <th>State</th>
                <th>Created_at</th>
                <th>Updated_at</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($user->parkingInvoices as $parkingInvoice)
            <tr>
                <td>{{ $parkingInvoice->id }}</td>
                <td>{{ $parkingInvoice->Invoice }}</td>
                <td>{{ $parkingInvoice->state }}</td>
                <td>{{ $parkingInvoice->created_at }}</td>
                <td>{{ $parkingInvoice->updated_at }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="5" style="text-align: center;">No Parking Invoices Found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <h2>Reservation Invoices</h2>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Amountcharged</th>
            <th scope="col">State</th>
            <th scope="col">Created_at</th>
            <th scope="col">Updated_at</th>
        </tr>
        </thead>
        @forelse ($user->resInvoices as $resInvoice)
            <tbody>
            <tr>
                <th scope="row">{{$resInvoice->id}}</th>
                <td>{{$resInvoice->Amountcharged}}</td>
                <td>{{$resInvoice->state}}</td>
                <td>{{$resInvoice->created_at}}</td>
                <td>{{$resInvoice->updated_at}}</td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center mt-4">No Reservation Invoices Found.</td>
            </tr>
        @endforelse
        </tbody>
    </table>                

    <h2>Charge Invoices</h2>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Invoice</th>
            <th scope="col">State</th>
            <th scope="col">Created_at</th>
            <th scope="col">Updated_at</th>
        </tr>
        </thead>
        @forelse ($user->chargeInvoices as $chargeInvoice)
            <tbody>
            <tr>
                <th scope="row">{{$chargeInvoice->id}}</th>
                <td>{{$chargeInvoice->charges->charge}}</td>
                <td>{{$chargeInvoice->state}}</td>
                <td>{{$chargeInvoice->created_at}}</td>
                <td>{{$chargeInvoice->updated_at}}</td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center mt-4">No Charge Invoices Found.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
</div>
