@component('mail::message')
# New Order:  {{ $order->title}}

{{ $order->description}}

@component('mail::button', ['url' => url('/login')])
View project
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
