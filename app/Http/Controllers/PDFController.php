<?php

namespace App\Http\Controllers;

use App\Models\User;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PDFController extends Controller
{
    public function generateInvoice()
    {
        $user = Auth::user();
        $parkingInvoices = $user->parkingInvoices;
        $resInvoices = $user->resInvoices;
        $chargeInvoices = $user->chargeInvoices;

        // Pass the data to the view
        $data = [
            'user' => $user,
            'parkingInvoices' => $parkingInvoices,
            'resInvoices' => $resInvoices,
            'chargeInvoices' => $chargeInvoices,
        ];

        // Create an instance of the PDF class
        $pdf = app()->make('dompdf.wrapper');

        // Load the view and pass the data to it
        $pdf->loadView('pdf.invoice_pdf', $data);

        // Return the PDF as a download
        return $pdf->download('invoices.pdf');
    }

    public function generatePayment()
    {
        $user = Auth::user();
        $parkingPayments = $user->parkingPayments;
        $resPayments = $user->resPayments;
        $chargePayments = $user->chargeInvoices;

        // Pass the data to the view
        $data = [
            'user' => $user,
            'parkingInvoices' => $parkingPayments,
            'resInvoices' => $resPayments,
            'chargeInvoices' => $chargePayments,
        ];

        // Create an instance of the PDF class
        $pdf = app()->make('dompdf.wrapper');

        // Load the view and pass the data to it
        $pdf->loadView('pdf.payments_pdf', $data);

        // Return the PDF as a download
        return $pdf->download('payments.pdf');
    }

}
