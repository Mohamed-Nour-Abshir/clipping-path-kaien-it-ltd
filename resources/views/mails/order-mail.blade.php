<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Confirmation</title>
</head>
<body>
    <h2>Hello Admin,</h2><br>
        You received an Order<br>
        Here are the full details:<br>
        <b>Name:</b> {{ $order->firstname }} {{ $order->lastname }}<br>
        <b>Email:</b> {{ $order->email }}<br>
        <b>Country:</b> {{ $order->country }}<br>
        <b>Phone Number:</b> {{ $order->phone }}<br>
        <b>This Customer Needs:</b> {{ $order->servicetype }}<br>
        <b>Images Up to:</b> {{ $order->imagesno }}<br>
        <b>Need Images Resized:</b> {{ $order->needresized }}<br>
        <b>Customer's Instructions:</b> {{ $order->instruction }}<br>
        <p>Admin please go your adminal panel and check this customers images and requirements carefully
            <a href="/">Kaizen It Ltd Clipping Path</a>
        </p>
</body>
</html>
