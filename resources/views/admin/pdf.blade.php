<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Order PDF</title>
        <style>
            h1, h3 {
                color: red;
            }

            body {
                background-color: #ccc;
            }
            .center {
            text-align: center;
        }
        </style>
    </head>
    <body>
        <h1 class="center">Order Details</h1>
        <p>Customer phone: <span style="color: red;">{{$order->name}}</span></p>
        <p>Customer phone: <span style="color: red;">{{$order->phone}}</span></p>
        <p>Customer address: <span style="color: red;">{{$order->address}}</span></p>
        <p>Product Name: <span style="color: red;">{{$order->product_name}}</span></p>
        <p>Product Quantity: <span style="color: red;">{{$order->quantity}}</span></p>
        <p>Product price: <span style="color: red;">{{$order->price}}</span></p>
       

        <br><br>

        <img height="150" width="150" src="public/product/{{$order->image}}" alt="">
    </body>
</html>
