<!DOCTYPE html>
<html>
<head>
    <title>Мои заказы</title>
</head>
<body>
<h1>Ваши заказы</h1>
@foreach($orders as $order)
    <div>
        <h2>{{ $order->product->name }}</h2>
        <p>Количество: {{ $order->quantity }}</p>
        <p>Сумма: {{ $order->total }} руб.</p>
    </div>
@endforeach
</body>
</html>
