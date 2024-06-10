<!DOCTYPE html>
<html lang="en">
<head>
    <title>Booking Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h3 {
            color: #ff0000;
            text-align: center;
            border-bottom: 2px solid #ff0000;
            padding-bottom: 10px;
        }

        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: left;
            margin-top: 20px;
        }

        table {
            width: 100%;
        }

        table tr {
            margin-bottom: 10px;
        }

        table td {
            padding: 8px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #ff0000;
            color: #ffffff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            margin: auto;
        }

        button:hover {
            background-color: #cc0000;
        }

        /* CSS untuk nota */
        .nota-container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .nota-header {
            background-color: #ff0000;
            color: #ffffff;
            padding: 10px;
            border-radius: 8px 8px 0 0;
            text-align: center;
        }

        .nota-content {
            padding: 20px;
        }

        .nota-content p {
            margin-bottom: 10px;
        }

        .nota-content p:last-child {
            margin-bottom: 0;
        }

        .nota-footer {
            background-color: #f4f4f4;
            padding: 10px;
            border-radius: 0 0 8px 8px;
            text-align: center;
        }
        .hide{
            display: none;
        }
    </style>
</head>
<body>
    <div id="booking" class="section">
        <div class="section-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-md-push-5">
                        <div class="booking-cta">
                        </div>
                    </div>
                    <div class="col-md-4 col-md-pull-7">
                        <div class="booking-form">
                            <form method="post" action="/booking">
                                @csrf
                                <h1>RESERVASI</h1>
                                <input type="number" id="id" name="id" class="hide">
                                <div class="form-group">
                                    <span class="form-label">NIK</span>
                                    <input class="form-control" type="number" id="no_hp" name="nik" placeholder="Masukkan NIK Anda">
                                </div>
                                <div class="form-group">
                                    <span class="form-label">Select unit</span>
                                    <select class="form-control" name="tipe" id="tipe">
                                        <option value=" ">pilih tipe</option>
                                        @foreach ($roomTipes as $item)
                                            <option value="{{$item->id}}" data -harga='{{$item->harga}}'>{{$item->tipe}}</option>
                                        @endforeach
                                    </select>
                                    <span class="select-arrow"></span>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <span class="form-label">No Kamar</span>
                                            <select class="form-control" id="rooms" name="rooms">
                                            </select>
                                            <span class="select-arrow"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <span class="form-label">Check In</span>
                                            <input class="form-control" type="date" id="cidate" name="cidate" onchange="updateTotal()">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <span class="form-label">Check out</span>
                                            <input class="form-control" type="date" name="codate" id="codate" onchange="updateTotal()">
                                        </div>
                                    </div>
                                </div>
                                
                                <div id="total-price" class="form-group">
                                    <span class="form-label">Total Price</span>
                                    <input type="number" id="harga" name="harga" onchange="updateTotal()" readonly>
                                </div>
                                <div class="form-btn">
                                    <button type="submit" name="submit-btn" class="submit-btn">RESERVE NOW</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function updateTotal() {
            var tipeKamarSelect = document.getElementById("tipe");
            var selectedOption = tipeKamarSelect.options[tipeKamarSelect.selectedIndex];
            var hargaKamar = selectedOption.getAttribute("data-harga");

            var checkinDate = new Date(document.getElementById("cidate").value);
            var checkoutDate = new Date(document.getElementById("codate").value);
            var selisihHari = Math.ceil((checkoutDate - checkinDate) / (1000 * 60 * 60 * 24));

            var totalPembayaran = hargaKamar * selisihHari;
            document.getElementById("harga").value = totalPembayaran;
        }

    document.addEventListener('DOMContentLoaded', function () {
        calculateTotalPrice();

        document.querySelector('select[name="unit"]').addEventListener('change', calculateTotalPrice);
        document.querySelector('input[name="cidate"]').addEventListener('change', calculateTotalPrice);
        document.querySelector('input[name="codate"]').addEventListener('change', calculateTotalPrice);
    });
        document.addEventListener("DOMContentLoaded", function() {
                var tipeKamarSelect = document.getElementById("tipe");
                var nomorKamarSelect = document.getElementById("rooms");
            console.log(tipeKamarSelect);
                tipeKamarSelect.addEventListener("change", function() {
                var selectedTipeKamar = this.value;

                    nomorKamarSelect.innerHTML = '<option value="">Pilih Nomor Kamar</option>';

                    if (selectedTipeKamar) {
                        fetch('/get_nomor_kamar/' + selectedTipeKamar)
                            .then(response => response.json())
                            .then(data => {
                                data.forEach(nomor => {
                                    var option = document.createElement("option");
                                    option.text = nomor.id;
                                    option.value = nomor.id;
                                    nomorKamarSelect.add(option);
                                });
                            })
                            .catch(error => console.error('Error:', error));
                    } 
                });
            });
    </script>
</body>
</html>