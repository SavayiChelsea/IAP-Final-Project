<x-app-layout>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script>
        // jQuery document ready function
        $(document).ready(function() {
            // Add click event listener to rows with the class 'clickable-row' in all tables
            $('.clickable-row').click(function() {
                // Prompt when a row is clicked
                var confirmation = confirm("Do you want to do pay for this Invoice?");

                // Example: If confirmed, perform an action (you can modify this as needed)
                if (confirmation) {
                    // Perform action here
                    // For instance, you can redirect to another page or perform any desired action
                    // Example: window.location.href = "your_action_url";
                }
            });
        });
    </script>
    <div class="container">
        <h1 class="mt-6 mb-6">Invoices</h1>
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#parking">Parking Invoices</a></li>
            <li><a data-toggle="tab" href="#reservation">Reservation Invoices</a></li>
            <li><a data-toggle="tab" href="#charge">Charge Invoices</a></li>
        </ul>

        <div class="tab-content mt-6 mb-6">
            <div id="parking" class="tab-pane fade in active">
                <h3 class="mt-6 mb-6">Parking Invoices</h3>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Invoice</th>
                            <th scope="col">State</th>
                            <th scope="col">Created_at</th>
                            <th scope="col">Updated_at</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($user->parkingInvoices as $parkingInvoice)
                                <tr class="clickable-row">
                                    <th scope="row">{{$parkingInvoice->id}}</th>
                                    <td>{{$parkingInvoice->Invoice}}</td>
                                    <td>{{$parkingInvoice->state}}</td>
                                    <td>{{$parkingInvoice->created_at}}</td>
                                    <td>{{$parkingInvoice->updated_at}}</td>
                                </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center mt-4">No Parking Invoices Found.</td>
                            </tr>
                        @endforelse 
                    </tbody>
                </table>
            </div>
            <div id="reservation" class="tab-pane fade">
                <h3 class="mt-6 mb-6">Reservation Invoices</h3>
                <table class="table table-striped">
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
                        <tr class="clickable-row">
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
            </div>
            <div id="charge" class="tab-pane fade">
                <h3 class="mt-6 mb-6">Charge Invoices</h3>
                <table class="table table-striped">
                    <thead>
                    <tr class="clickable-row">
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
            <form action="{{ route('user.generate.invoice.pdf') }}" method="get">
                @csrf
                <button class="btn btn-success" type="submit">Generate PDFs</button>
            </form>
            
        </div>
    </div>
</x-app-layout>
