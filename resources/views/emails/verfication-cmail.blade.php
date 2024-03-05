@component('mail::message')
# Registration Successfully



@component('mail::button', ['url' => 'http://127.0.0.1:8000/verify?code='.$details['VerificationCode'] ])
Verify Now
@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent
