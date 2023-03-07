<!DOCTYPE html>
<html>
    <body class="antialiased">
        <div style="dislay: flex; text-align: center">
            <h1>Act NO {{ $act_number }} from {{ $document_date }}</h1>
            <p>Executor: {{ $executor }}</p>
            <p>Customer: {{ $customer_company_name }}</p>
            <p>{{ $name_of_service }} - {{ $work_price }}</p>
        </div>
        <div class="" style="float: left; width: 50%; border: 1px solid black; padding-left: 10px">
            <p>Executor: {{ $executor }}</p>
            <p>INN: {{ $executor_INN }}</p>
            <p>Address: {{ $executor_address }}</p>
            <p>R/S: {{ $executor_current_account }}</p>
            <p>K/S: {{ $executor_corr_account }}</p>
            <p>Bank: {{ $executor_bank_name }}</p>
            <p>BIC: {{ $executor_bank_bic }}</p>
            <p>Telephone Number: {{ $executor_phone_number }}</p>
        </div>
        <div class="" style="float: left; width: 50%; border: 1px solid black; padding-left: 10px">
            <p>Customer: {{ $customer_company_name }}</p>
            <p>INN: {{ $customer_INN }}</p>
            <p>Address: {{ $customer_address }}</p>
            <p>R/S: {{ $customer_current_account }}</p>
            <p>K/S: {{ $customer_corr_account }}</p>
            <p>Bank: {{ $customer_bank_name }}</p>
            <p>BIC: {{ $customer_bank_bic }}</p>
            <p>Telephone Number: {{ $customer_phone_number }}</p>
        </div>
    </body>
</html>
