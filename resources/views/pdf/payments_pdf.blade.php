<h1>Payments</h1>

<h2>Parking Payments</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Amountcharged</th>
                <th scope="col">AmountPaid</th>
                <th scope="col">Balance</th>
                <th scope="col">Created_at</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($user->parkingPayments as $parkingPayment)
                    <tr>
                        <th scope="row">{{$parkingPayment->id}}</th>
                        <td>{{$parkingPayment->AmountCharged}}</td>
                        <td>{{$parkingPayment->AmountPaid}}</td>
                        <td>{{$parkingPayment->Balance}}</td>
                        <td>{{$parkingPayment->created_at}}</td>
                    </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center mt-4">No Parking Payments Found.</td>
                </tr>
            @endforelse 
        </tbody>    
    </table>

    <h2>Reservation Payments</h2>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Amountcharged</th>
            <th scope="col">AmountPaid</th>
            <th scope="col">Balance</th>
            <th scope="col">Created_at</th>
        </tr>
        </thead>
        @forelse ($user->resPayments as $resPayment)
            <tbody>
            <tr>
                <th scope="row">{{$resPayment->id}}</th>
                <td>{{$resPayment->Amountcharged}}</td>
                <td>{{$resPayment->Amountpaid}}</td>
                <td>{{$resPayment->Balance}}</td>
                <td>{{$resPayment->created_at}}</td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center mt-4">No Reservation Payments Found.</td>
            </tr>
        @endforelse
        </tbody>
    </table>                

    <h2>Charge Payments</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Amountcharged</th>
                <th scope="col">AmountPaid</th>
                <th scope="col">Balance</th>
                <th scope="col">Created_at</th>
            </tr>
            </thead>
            @forelse ($user->chargesPayments as $chargesPayment)
                <tbody>
                <tr>
                    <th scope="row">{{$chargesPayment->id}}</th>
                    <td>{{$chargesPayment->Amountcharged}}</td>
                    <td>{{$chargesPayment->Amountpaid}}</td>
                    <td>{{$chargesPayment->Balance}}</td>
                    <td>{{$chargesPayment->created_at}}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center mt-4">No Charge Payments Found.</td>
                </tr>
            @endforelse
            </tbody>
    </table>
</div>
