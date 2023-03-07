<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderInformationViewPdfRequest;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Mail;

class OrderInformationController extends Controller
{
    public function viewPdf(OrderInformationViewPdfRequest $request): JsonResponse
    {
        // Load .pdf file using Pdf facade
        $pdf = PDF::loadView('order_information', $request->validated());

        // Get the validated data from request
        $data = $request->validated();

        // Send email to customer
        Mail::send('order_information_email', $data, function ($message) use ($data, $pdf) {

            // Email recipient
            $message->to($data["customer_email"])

                 // Email subject
                ->subject('Order Information')

                // Attach order_information.pdf file to email
                ->attachData($pdf->output(), "order_information.pdf");
        });

        return response()->json($this->getSuccessResponse('Email send successfully'));
    }
}
