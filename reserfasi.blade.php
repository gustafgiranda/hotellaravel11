

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
        background: url('https://images.oyoroomscdn.com/uploads/hotel_image/55951/7335564f886b49a5.jpg') no-repeat center center fixed;
        background-size: cover;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }
    nav a:hover {
                background-color: #ff0000;
                color: yellow;  
            }
    table {
        width: 70%;
        border-collapse: collapse;
        margin-top: 20px;
        background-color: rgba(255, 255, 255, 0.7);
        border-radius: 10px;
        overflow: hidden;
    }
    table thead tr{
        background: rgba(255,0,0,0.7);
    }

    th, td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #FF0000;
        color: white;
    }

    tr:hover {
        background-color: #f5f5f5;
    }

    a {
        display: inline-block;
        padding: 8px 16px;
        text-decoration: none;
        background-color: #FF0000;
        color: white;
        border-radius: 4px;
        transition: background-color 0.3s;
    }

    a:hover {
        background-color: #FF3333;
    }

    a:active {
        background-color: #990000;
    }

    .add-button {
        display: block;
        margin-top: 20px;
        text-align: center;
        bottom: 50px;
    }
    

    </style>
    <title>RESERVASI</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <td>NIK</td>
                <td>NO_KAMAR</td>
                <td>TGL_CHECKIN</td>
                <td>TGL_CHECKOUT</td>
                <td>TIPE</td>
                <td>TOTAL HARGA</td>
                <td>ACTION</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($bookings as $item)
            <tr>
                <td>{{$item->nik}}</td>
                <td>{{$item->id_room}}</td>
                <td>{{$item->checkin_date}}</td>
                <td>{{$item->checkout_date}}</td>
                <td>{{$item->id_room_tipe}}</td>
                <td>{{$item->total_price}}</td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="">MASUKKAN DATA</a>
</body>
</html>
