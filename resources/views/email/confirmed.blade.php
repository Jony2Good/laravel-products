@component('mail::message')
    Артикуль продукта: {{ $product['article'] }} <br/>
    Название продукта: {{ $product['name'] }} <br/>
    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
