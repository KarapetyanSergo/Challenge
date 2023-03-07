<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderInformationViewPdfRequest extends FormRequest
{
    public function rules()
    {
        return [
            'act_number' => 'required',
            'document_date' => 'required|date_format:d/m/Y',
            'executor' => 'required',
            'name_of_service' => 'required',
            'work_price' => 'required|numeric',
            'logo' => 'required|file',
            'executor_company_name' => 'required',
            'executor_email' => 'required|email',
            'executor_INN' => 'required',
            'executor_KPP' => 'required',
            'executor_address' => 'required',
            'executor_current_account' => 'required',
            'executor_corr_account' => 'required',
            'executor_bank_name' => 'required',
            'executor_bank_bic' => 'required',
            'executor_phone_number' => 'required',
            'executor_signature' => 'required',
            'executor_stamp' => 'required',
            'customer_company_name' => 'required',
            'customer_email' => 'required|email',
            'customer_INN' => 'required',
            'customer_KPP' => 'required',
            'customer_address' => 'required',
            'customer_current_account' => 'required',
            'customer_corr_account' => 'required',
            'customer_bank_name' => 'required',
            'customer_bank_bic' => 'required',
            'customer_phone_number' => 'required',
            'customer_signature' => 'required',
            'customer_stamp' => 'required',
        ];
    }
}
