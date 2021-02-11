@component('mail::message')
    New order placed: <br>

    {{ $order['contact'] }} <br>
    {{ $order['product'] }} <br>
    {{ $order['price'] }} <br>

@endcomponent
