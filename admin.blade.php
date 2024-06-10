<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel OYO    </title>
    <link rel="stylesheet" type="text/css" href="/css/hotel.css">
</head>
<body>

<header>
    <img src="https://seeklogo.com/images/O/oyo-rooms-logo-ADDE1C74DB-seeklogo.com.png" width="100" height="auto"> 
</header>

<div class="bg"></div>

<nav>
    <a href="#about">About Us</a> |
    <a href="file:///C:/xampp/htdocs/hotel/harga.html">Rooms</a> |
    <a href="http://localhost/hotel/kamar.php">Kamar</a> |
    <a href="http://localhost/hotel/petugash.php">Petugas</a> |
    <a href="/reserfasi">Reservasi</a> |
    <a href="http://localhost/hotel/tamu.php">Tamu</a> |
    <a href="#contact">Contact</a>
</nav>




<footer>
    &copy; bebas melakukan kegiatan apapun tanpa ktp
</footer>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const backgrounds = [
            'https://d2xf5gjipzd8cd.cloudfront.net/available/1192878794/1192878794_WxH.jpg  ',
            'https://images.oyoroomscdn.com/uploads/hotel_image/91833/5876b537e60f9e28.jpg',
            'https://images.oyoroomscdn.com/uploads/hotel_image/87265/46fd8dd8a3ffd1f0.jpg',
        ];

        let currentIndex = 0;

        function changeBackground() {
        document.body.classList.add('changing');
        document.body.style.backgroundImage = `url('${backgrounds[currentIndex]}')`;

        setTimeout(() => {
            document.body.classList.remove('changing');
        }, 1000); // 
        currentIndex = (currentIndex + 1) % backgrounds.length;
    }
    setInterval(changeBackground, 5000);


    changeBackground();
});
</script>


</body>
</html> 

</body>
</html>
