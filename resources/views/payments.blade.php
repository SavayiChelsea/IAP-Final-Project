<x-app-layout>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <div class="container">
            <h1 class="mt-6 mb-6">Payments</h1>
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#parking">Parking Payments</a></li>
                <li><a data-toggle="tab" href="#reservation">Reservation Payments</a></li>
                <li><a data-toggle="tab" href="#charge">Charge Payments</a></li>
            </ul>
    
            <div class="tab-content mt-6 mb-6">
                <div id="parking" class="tab-pane fade in active">
                    <h3 class="mt-6 mb-6">Parking Payments</h3>
                    <table class="table table-striped">
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
                                    <td colspan="5" class="text-center mt-4">No Results Found.</td>
                                </tr>
                            @endforelse 
                        </tbody>
                    </table>
                </div>
                <div id="reservation" class="tab-pane fade">
                    <h3 class="mt-6 mb-6">Reservation Payments</h3>
                    <table class="table table-striped">
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
                                <td colspan="5" class="text-center mt-4">No Results Found.</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>                
                </div>
                <div id="charge" class="tab-pane fade">
                    <h3 class="mt-6 mb-6">Charge Payments</h3>
                    <table class="table table-striped">
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
                                <td colspan="5" class="text-center mt-4">No Results Found.</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </x-app-layout>
    