<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if($insert){
      $message[] = 'Janji Dengan Dokter Berhasil!!';
   }else{
      $message[] = 'Janji Gagal!!';
   }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Konsultasi Kesehatan Mental Online</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-heartbeat"></i> <strong>Soul</strong>Center</a>

    <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#about">Tentang Kami</a>
        <a href="#services">Layanan</a>
        <a href="#doctors">Para Ahli</a>
        <a href="#appointment">Buat Janji</a>
        <a href="#review">review</a>
        <a href="#blogs">blogs</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="image">
        <img src="image/undraw_medicine_b-1-ol.svg" alt="">
    </div>

    <div class="content">
        <h3>Jangan abaikan kesehatan mentalmu</h3>
        <p> Stres tidak selalu buruk, namun stres jangka panjang bisa ganggu kesehatanmu. Berbagai situasi atau peristiwa 
            kehidupan dapat menimbulkan stres. Ketika kita mendapati pengalaman baru, atau ketika suatu keadaan berada 
            di luar kendali kita, kita dapat merasa lebih stres daripada biasanya.</p>
        <p> Stres tidak dapat dihilangkan, tapi 
            kita mengatasi stres dengan cara yang berbeda-beda. Jika kamu kesulitan mengatasi stres, dapatkan bantuan 
            profesional untuk mencari cara mengelola stres dengan lebih baik..</p>
        <a href="#appointment" class="btn"> Buat Janji <span class="fas fa-chevron-right"></span> </a>
    </div>

</section>

<!-- home section ends -->

<!-- icons section starts  -->

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-user-md"></i>
        <h3>150+</h3>
        <p>Psikolog / Psikiater</p>
    </div>

    <div class="icons">
        <i class="fas fa-users"></i>
        <h3>1030+</h3>
        <p>pasien yang puas</p>
    </div>

    <div class="icons">
        <i class="fas fa-hospital"></i>
        <h3>70+</h3>
        <p> Terdapat Di Beberapa Rumah Sakit</p>
    </div>

</section>

<!-- icons section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>Tentang</span> Kami </h1>

    <div class="row">

        <div class="image">
            <img src="image/about-img.svg" alt="">
        </div>

        <div class="content">
            <h3>Tempat Berkonsulatasi Berkualitas dan Terbaik di Dunia</h3>
            <p>Kami adalah sebuah tim yang berkomitmen untuk memberikan dukungan dan panduan bagi mereka yang mencari kesejahteraan mental. 
               Dengan pengalaman dan pengetahuan kami dalam bidang kesehatan mental, kami bertekad untuk membantu Anda menjalani hidup 
               yang lebih seimbang, bahagia, dan bermakna. Situs web kami adalah sumber terpercaya untuk informasi, saran, dan sumber 
               daya yang dapat membantu Anda meraih kesehatan mental yang optimal. Bersama-sama, mari bersama-sama berjalan menuju 
               perjalanan kesehatan mental yang lebih baik</p>
            <p>Tujuan utama kami adalah untuk memperkuat kesehatan mental individu dan masyarakat secara luas. Kami berkomitmen untuk 
                menghilangkan stigma seputar masalah kesehatan mental, menyediakan pengetahuan yang mendalam, serta memberikan dukungan 
                yang diperlukan kepada mereka yang memerlukan. Melalui informasi yang akurat, sumber daya, dan panduan, kami bertujuan 
                untuk membantu setiap individu mencapai kesehatan mental yang optimal dan menciptakan dunia di mana kesejahteraan 
                jiwa diprioritaskan dan dihargai</p>
            <a href="#" class="btn"> pelajari lebih lanjut <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading"> Layanan <span> Kami </span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-notes-medical"></i>
            <h3>Konsultasi Gratis</h3>
            <p>Setiap beberapa hasi sekali dalam seminggu, akan ada program konsultasi gratis</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-user-md"></i>
            <h3>Para Ahli yang berpengalaman</h3>
            <p>Terdapat banyak psikolog dan psikiater yang berpengalaman pada bidangnya</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-pills"></i>
            <h3>Obat-obatan</h3>
            <p>Obat yang diresepkan oleh dokter bekerja langsung memperbaiki atau menyeimbangkan kadar senyawa kimia dalam otak</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-heartbeat"></i>
            <h3>Buat Janji Tatap muka</h3>
            <p>Bisa membuat janji dengan ahli pada tanggal dan hari hari tertentu</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<!-- services section ends -->



<!-- doctors section starts  -->

<section class="doctors" id="doctors">

    <h1 class="heading"> Para <span> Ahli </span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/13687_2-2-2023_16-31-40.jpeg" alt="">
            <h3>Bayu Prasetya Yudha S.Psi,MM, M.Psi</h3>
            <span>Psikolog Klinis Dewasa</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
                
            </div>
        </div>

        <div class="box">
            <img src="image/42000_1-2-2023_14-29-26.jpeg" alt="">
            <h3>Tita Rosmiati S.Psi, MM, M.Psi, Psi</h3>
            <span>Psikolog Klinis</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/772733_3-11-2022_12-24-12.jpeg" alt="">
            <h3>Rr. Eka Cahya Ningrum M.Psi, Psikolog</h3>
            <span>Psikolog Klinis Dewasa</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/102797_1-8-2022_9-56-22.jpeg" alt="">
            <h3>Dr. Jhonny Prambudi Batong Sp.KJ</h3>
            <span>Sp. Jiwa</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/786104_4-4-2022_8-48-4.jpeg" alt="">
            <h3>Yulia Sahaja Dewi Permatasari M.Psi, Psikolog</h3>
            <span>Psikolog Klinis</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/523329_13-2-2023_15-34-25.jpeg" alt="">
            <h3>Verty Sari Pusparini S.Psi, M.Psi, Psikolog</h3>
            <span>Psikolog Klinis Anak & Remaja</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            
            </div>
        </div>
        <div class="box">
            <img src="image/687035_1-2-2023_14-29-46.jpeg" alt="">
            <h3>Dr. Endy Nurhayati M.Biomed, Sp.KJ</h3>
            <span>Psikolog Klinis Dewasa</span>
            <div class="share">
                
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="box">
            <img src="image/261364_24-1-2023_13-7-5.jpeg" alt="">
            <h3>Riza Muhardeni S.Psi, M.Psi, Psikolog</h3>
            <span>Psikolog Klinis</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="box">
            <img src="image/8541_2-2-2023_13-57-29.jpeg" alt="">
            <h3>Dr. Fenny Aprilia Saragih M.Ked(KJ), Sp.KJ</h3>
            <span>Sp. Jiwa</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

    </div>

</section>

<!-- doctors section ends -->

<!-- appointmenting section starts   -->

<section class="appointment" id="appointment">

    <h1 class="heading"> <span> Buat Janji </span> dengan para ahli </h1>    

    <div class="row">

        <div class="image">
            <img src="image/appointment-img.svg" alt="">
        </div>

        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <?php
            if(isset($message)) {
                foreach($message as $message) {
                echo'<p class ="message">'.$message.'</p>';
            }
            }
        ?>
      
            <h3>Membuat Janji Tatapmuka</h3>
            <input type="text"name="name" placeholder="your name" class="box">
            <input type="number"name="number" placeholder="your number" class="box">
            <input type="email"name="email" placeholder="your email" class="box">
            <input type="date"name="date" class="box">
            <input type="submit" name="submit" value="buat janji" class="btn">
        </form>

    </div>

</section>

<!-- appointmenting section ends -->

<!-- review section starts  -->

<section class="review" id="review">
    
    <h1 class="heading"> Respon Para <span> Pasien </span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/pic-1.jpg" alt="">
            <h3>win coder</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam sapiente nihil aperiam? Repellat sequi nisi aliquid perspiciatis libero nobis rem numquam nesciunt alias sapiente minus voluptatem, reiciendis consequuntur optio dolorem!</p>
        </div>

        <div class="box">
            <img src="image/pic-1.jpg" alt="">
            <h3>win coder</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam sapiente nihil aperiam? Repellat sequi nisi aliquid perspiciatis libero nobis rem numquam nesciunt alias sapiente minus voluptatem, reiciendis consequuntur optio dolorem!</p>
        </div>

        <div class="box">
            <img src="image/pic-1.jpg" alt="">
            <h3>win coder</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam sapiente nihil aperiam? Repellat sequi nisi aliquid perspiciatis libero nobis rem numquam nesciunt alias sapiente minus voluptatem, reiciendis consequuntur optio dolorem!</p>
        </div>


        <div class="box">
            <img src="image/pic-1.jpg" alt="">
            <h3>win coder</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam sapiente nihil aperiam? Repellat sequi nisi aliquid perspiciatis libero nobis rem numquam nesciunt alias sapiente minus voluptatem, reiciendis consequuntur optio dolorem!</p>
        </div>

    </div>

</section>

<!-- review section ends -->

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

    <h1 class="heading"> our <span>blogs</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="image/blog-1.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 21 november, 2022 </a>
                    <a href="#"> <i class="fas fa-user"></i> by win coder </a>
                </div>
                <h3>blog title win coder goes here</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, eius.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/blog-2.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 21 november, 2022 </a>
                    <a href="#"> <i class="fas fa-user"></i> by win coder </a>
                </div>
                <h3>blog title win coder goes here</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, eius.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/blog-3.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 21 november, 2022 </a>
                    <a href="#"> <i class="fas fa-user"></i> by win coder </a>
                </div>
                <h3>blog title win coder goes here</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, eius.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="image/blog-4.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 21 november, 2022 </a>
                    <a href="#"> <i class="fas fa-user"></i> by win coder </a>
                </div>
                <h3>blog title win coder goes here</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, eius.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="image/blog-5.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 21 november, 2022 </a>
                    <a href="#"> <i class="fas fa-user"></i> by win coder </a>
                </div>
                <h3>blog title win coder goes here</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, eius.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="image/blog-6.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 21 november, 2022 </a>
                    <a href="#"> <i class="fas fa-user"></i> by win coder </a>
                </div>
                <h3>blog title win coder goes here</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, eius.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>

    </div>

</section>

<!-- blogs section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#home"> <i class="fas fa-chevron-right"></i> Home </a>
            <a href="#about"> <i class="fas fa-chevron-right"></i> Tentang Kami </a>
            <a href="#services"> <i class="fas fa-chevron-right"></i> Layanan </a>
            <a href="#doctors"> <i class="fas fa-chevron-right"></i> Para Ahli </a>
            <a href="#appointment"> <i class="fas fa-chevron-right"></i> Buat Janji </a>
            <a href="#review"> <i class="fas fa-chevron-right"></i> Review </a>
            <a href="#blogs"> <i class="fas fa-chevron-right"></i> Blogs </a>
        </div>

        <div class="box">
            <h3>our services</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i> dental created </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> message therapy </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> cardioloty </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> diagnosis </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> ambulance service </a>
        </div>

        <div class="box">
            <h3>appointment info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +8801688238801 </a>
            <a href="#"> <i class="fas fa-phone"></i> +8801782546978 </a>
            <a href="#"> <i class="fas fa-envelope"></i> wincoder9@gmail.com </a>
            <a href="#"> <i class="fas fa-envelope"></i> sujoncse26@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> sylhet, bangladesh </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i> faceappointment </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
        </div>

    </div>

    <div class="credit"> created by <span>Group 27</span> | all rights reserved </div>

</section>

<!-- footer section ends -->


<!-- js file link  -->
<script src="js/script.js"></script>

</body>
</html>

