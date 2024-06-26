<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel OYO </title>
    <link rel="stylesheet" href="harga.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="/css/tamu.css">
</head>

<body>

    <header>
        <img src="https://seeklogo.com/images/O/oyo-rooms-logo-ADDE1C74DB-seeklogo.com.png" width="100" height="auto">
    </header>

    <div class="link">
    <nav>
        <span></span>
        <div>
            <a href="#historys">About Us</a> |
        <a href="#room-list">Rooms</a> |
        <a href="#oyo-experience">Experience</a> |
        <a href="#contact">Contact</a>
        </div>
        @auth
        <a href="/logout">Logout</a>
        @else
        <a href="/login" target="_blank">Login</a>    
        @endauth
    </nav>
</div>

    <div class="home">

    </div>

    <section class="facilities">
        <h2>FASILITAS</h2>
        <div class="facility">
            <img src="https://s-light.tiket.photos/t/01E25EBZS3W0FY9GTG6C42E1SE/t_htl-dskt/tix-hotel/images-web/2021/09/17/d955a815-f601-41ef-aebe-5cccd8603c75-1631869237940-5f2f52212c9b08a5dfc773054be97a6b.jpg"
                alt="Taman">
            <h3>Taman</h3>
        </div>

        <div class="facility">
            <img src="bg.jpeg"
                alt="Fitness">
            <h3>Fitness</h3>
        </div>

        <div class="facility">
            <img src="kolamr.jpg" alt="Kolam Renang">
            <h3>Kolam Renang</h3>
        </div>

        <div class="facility">
            <img src="https://www.bidakarahotel.com/wp-content/uploads/sites/198/2021/08/Mawar-Restaurant-2.jpg"
                alt="Tempat Makan">
            <h3>Tempat Makan</h3>
        </div>
    </section>

    <section class="oyo-experience" id="oyo-experience">
        <div class="experience-container">
            <h2>OYO EXPERIENCE</h2>
            <p>Terinspirasi oleh keindahan Parahyangan, Hotel OYO menawarkan pemandangan pegunungan yang spektakuler,
                santapan yang memanjakan, kamar-kamar yang elegan, dan keramahtamahan luar biasa yang diwujudkan dengan
                Layanan Butler 24 jam. Terletak di perbukitan Ciumbuleuit, namun hanya beberapa menit dari hiruk pikuk
                pusat kota Bandung, hotel ini berjarak 10 km dari Bandara Internasional Husein Sastranegara dan 9 km
                dari stasiun kereta api Bandung.
                <br>
                <br>
                Padma Hotel Bandung adalah tempat yang sempurna untuk liburan yang menyegarkan dan mewah, pertemuan
                pribadi, serta acara dan pertemuan yang terorganisir dengan baik.
            </p>
            <div class="box-experience">
                <div class="experience-item">
                    <img src="hutanoyo.jpg" alt="Hutan">
                    <h3>Hutan</h3>
                    <p>Adventure Park di lokasi menawarkan kepada para tamu koleksi atraksi ramah anak yang dirancang untuk
                        menghibur dan memikat</p>
                </div>
                <div class="experience-item">
                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/14/b5/d6/31/view-from-room.jpg?w=1200&h=-1&s=1"
                        alt="Laut">
                    <h3>Laut</h3>
                    <p>Terletak menghadap laut biru di sekitarnya, laut ini dirancang untuk meningkatkan pengalaman
                        bersantai Anda.</p>
                </div>
                <div class="experience-item">
                    <img src="https://asset.kompas.com/crops/zDevYpkuarPr3pH0L8NvvTBsBhc=/5x0:788x522/750x500/data/photo/2022/01/11/61dd429c9e757.png"
                        alt="Pegunungan">
                    <h3>Pegunungan</h3>
                    <p>Terletak di lantai 5 dan menghadap ke pegunungan, tempat bersantai tanpa batas luar ruangan adalah
                        tempat yang sempurna untuk beristirahat dan bersantai.</p>
                </div>
            </div>
        </div>
    </section>

    </div>
    </section>
    <section class="room-list" id="room-list">
        <div class="room">
            <section class="rooms">
                <div class="container top">
                    <div class=""></div>
                    <h2>PILIH KAMARMU</h2>
                    <p>Semua Kamar Mendapatkan Fasilitas Yang Terbaik</p>

                </div>

                <div id="rooms" class="owl-carousel owl-carousel1 owl-theme">
                    <!-- Room 1 -->
                    <div class="items">
                        <div class="image">
                            <img src="https://www.hotelmu.id/gambar/blog/blog-tipe-kamar-hotel-yang-wajib-diketahui-47-l.jpg"
                                alt="">
                        </div>
                        <div class="text">
                            <h2>Superior Room 1</h2>
                            <div class="rate flex">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p>Kamar pilihan yang sangat bagus sekali nyaman dan pemandangannya indah</p>
                            <div class="button flex">
                                <button class="primary-btn">BOOK NOW</button>
                                <h3>250$ <span> <br> Per Night</span></h3>
                            </div>
                        </div>
                    </div>

                    <!-- Room 2 -->
                    <div class="items">
                        <div class="image">
                            <img src="https://asedino.com/wp-content/uploads/2023/04/Ngintip-Kamar-Hotel-Family-Room-Nata-Azana-Hotel-Solo-Rekomendasi-Hotel-Terbaru-di-Solo-1024x683.jpg"
                                sizes="50px" alt="">
                        </div>  
                        <div class="text">
                            <h2>Superior Room 2</h2>
                            <div class="rate flex">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p>Kamar pilihan yang sangat bagus sekali nyaman dan pemandangannya indah</p>
                            <div class="button flex">
                                <button class="primary-btn">BOOK NOW</button>
                                <h3>250$ <span> <br> Per Night</span></h3>
                            </div>
                        </div>
                    </div>

                    <!-- Room 3 -->
                    <div class="items">
                        <div class="image">
                            <img src="https://i0.wp.com/media.dekoruma.com/article/2019/10/15154154/cnn.jpg?fit=2226%2C1449&ssl=1"
                                alt="">
                        </div>
                        <div class="text">
                            <h2>Superior Room 3</h2>
                            <div class="rate flex">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p>Kamar pilihan yang sangat bagus sekali nyaman dan pemandangannya indah</p>
                            <div class="button flex">
                                <button class="primary-btn">BOOK NOW</button>
                                <h3>250$ <span> <br> Per Night</span></h3>
                            </div>
                        </div>
                    </div>

                    <!-- Room 4 -->
                    <div class="items">
                        <div class="image">
                            <img src="https://asset-a.grid.id/crop/0x0:0x0/x/photo/2022/05/11/luxurious-hotel-roomjpeg-20220511085733.jpeg"
                                alt="">
                        </div>
                        <div class="text">
                            <h2>Superior Room 4</h2>
                            <div class="rate flex">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p>Kamar pilihan yang sangat bagus sekali nyaman dan pemandangannya indah</p>
                            <div class="button flex">
                                <button class="primary-btn">BOOK NOW</button>
                                <h3>250$ <span> <br> Per Night</span></h3>
                            </div>
                        </div>
                    </div>

                    <!-- Room 5 -->
                    <div class="items">
                        <div class="image">
                            <img src="https://jernih.co/wp-content/uploads/kamar-hotel.jpeg" alt="">
                        </div>
                        <div class="text">
                            <h2>Superior Room 5</h2>
                            <div class="rate flex">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p>Kamar pilihan yang sangat bagus sekali nyaman dan pemandangannya indah</p>
                            <div class="button flex">
                                <button class="primary-btn">BOOK NOW</button>
                                <h3>250$ <span> <br> Per Night</span></h3>
                            </div>
                        </div>
                    </div>
                </div>


            </section>
        </div>
    </section>
            <br>
            <div class="historys" id="historys">
                <section class="history">
                    <div class="container">
                        <h1>Abouts Hotel OYO</h1>
                        <p>
                            Mengenal OYO Rooms, Usaha Perhotelan asal India
                            OYO Rooms, umumnya dikenal sebagai OYO adalah jaringan layanan perhotelan dan hotel hemat
                            asal India. Didirikan pada 2013 oleh Ritesh Agarwal dan sejak itu berkembang menjadi lebih
                            dari 8.500 hotel di 230 kota baik itu di India, Malaysia, Nepal, Cina, dan Indonesia.

                            OYO Rooms secara aktif hadir di Indonesia pada Oktober 2018. Cukup dengan jangka waktu
                            delapan bulan, OYO berhasil menguasai lebih dari 720 hotel dan 20 ribu kamar di 80 kota.
                            Pertumbuhan bisnis OYO terbilang sangat signifikan karena mencapai 20 kali lipat atau 1900%
                            dalam kurun waktu yang relatif singkat.

                            Model bisnisnya sendiri yaitu pemilik properti bermitra dengan OYO, kemudian
                            mengoperasikannya model manchise (manajemen dan franchise). Semua properti akan dioperasikan
                            dalam perjanjian sewa atau mengizinkan pemilik properti menjalankannya dalam kesepakatan
                            waralaba
                        </p>
                    </div>
                    </section>
                </div>
                
                        <br>    

                        <footer>
                            <table class="foot">
                                <tr>
                                    <td>
                                        <a href="#" target="_blank">
                                                <img src="https://idme-marketplace.s3.amazonaws.com/zaqn33t8m529bgi5euqngx0ldy7r" width="300">
                                        </a>
                                    </td>
                                    <td>    
                                        <div class="social-media">
                                            <a href="#" target="_blank"><img src="facebook.png" alt=""></a>
                                            <a href="#" target="_blank"><img src="gmail-logo.png" alt=""></a>
                                            <a href="#" target="_blank"><img src="instagram.png" alt=""></a>
                                            <a href="#" target="_blank"><img src="twitter-sign.png" alt=""></a>
                                            <a href="#" target="_blank"><img src="youtube-logo.png" alt=""></a>
                                        </div>
                            <h2 
                            style="text-align: left;">ECC.co.id Headquarter
                                <br>    
                                Jl. Kenari No. 5, Semaki,
                                <br>
                                 Umbulharjo, Kota Yogyakarta,
                                 <br>   
                                 Daerah Istimewa Yogyakarta
                                55166, Indonesia</h2>
                                    </td>
                                </tr>
                            </table>
                            <div class="sponsor">
                                <a href="#" target="_blank"><img src="traveloka.png" alt=""></a>
                                <a href="#" target="_blank"><img src="agoda.png" alt=""></a>
                                <a href="#" target="_blank"><img src="tiketcom.jpg" alt=""></a>
                            </div>
                        </footer>
                        <script>
                           document.addEventListener('DOMContentLoaded', function () {
    const backgrounds = [
        'https://d2xf5gjipzd8cd.cloudfront.net/available/1192878794/1192878794_WxH.jpg',
        'https://images.oyoroomscdn.com/uploads/hotel_image/91833/5876b537e60f9e28.jpg',
        'https://images.oyoroomscdn.com/uploads/hotel_image/87265/46fd8dd8a3ffd1f0.jpg',
    ];

    let currentIndex = 0;

    function changeBackground() {
        document.querySelector('.home').classList.add('changing');
        document.querySelector('.home').style.backgroundImage = `url('${backgrounds[currentIndex]}')`;

        setTimeout(() => {
            document.querySelector('.home').classList.remove('changing');
        }, 1000);

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