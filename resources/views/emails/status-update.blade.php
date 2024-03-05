@component('mail::message')
# Application Status is Updated

@if ($details['status'] == "Pending")
Hello thank you for using our platform.You request has been received and will be processed shortly.

@elseif ($details['status'] == "Approved")
You  order has been approved.

Regards

@elseif ($details['status'] == "Processing")
Your order has been processed allow few hours to perform due diligence before we move on to the next segment. 

Regards!

@elseif ($details['status'] == "Cancelled")
Your order has been canceled please contact help@optimumparcel.net

Regards!

@elseif ($details['status'] == "Money Laundering non Compliant")
Money Laundering non compliant 

Your  payment has been restricted. Contact support to provide Money laundering document.

Regards! 
@elseif ($details['status'] == "Seized by FBI")
Seized by FBI 

Your payment has been seized by FBI. Contact support for more information

Regards!

@elseif ($details['status'] == "Fees not paid")
Fees not paid

You are required to pay up shipping fee before delivering your order.

Regards! 

@elseif ($details['status'] == "Transfer fees not paid")
Transfer fees not paid

You are required to pay up transfer fee. Contact support for more information

Regards! 


@elseif ($details['status'] == "Vault fee not paid")
Vault fee not paid

Please pay up  vault  fee to enable us process your request.

Regards!


@elseif ($details['status'] == "Restricted by state police")
Restricted by state police

Your order has been restricted by state police. Contact support for more information

Regards!



@endif
 

Thanks,<br>
{{ config('app.name') }}
@endcomponent
