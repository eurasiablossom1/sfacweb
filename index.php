+<?php 
include 'assets/includes/header.php';
include 'sfac-bac/includes/conn.php';

?>
<title>Home | Saint Francis of Assisi College Bacoor</title>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-S6BLSMCF9Q">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-S6BLSMCF9Q');
</script>
</head>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-7VLEHZJ5Z6"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-7VLEHZJ5Z6');
</script>

<body>
    
    
    
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KG6WD3G"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v11.0" nonce="sSX03XeH"></script>

 <?php
 include ('assets/includes/navbar.php')
 ?>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-md-auto">
          <img src="assets/img/sfac_logo.png" style="width: 150px; height: 150px;">
        </div>
        <div class="col">
          <h1>Welcome to<br> Saint Francis of Assisi College - Bacoor</h1>
          <h2>#96 Bayanan, City of Bacoor, Cavite</h2>
          <a href="contact.php" class="btn-get-started">Contact Us!</a>
        </div>
      </div>
      <div class="d-flex justify-content-end">
        <img src="assets/img/Tagline.png" style="width: 40%; height: 40%;">
      </div>
    </div>
  </section><!-- End Hero -->

  <style>
    .ticker {
      display: flex;
      flex-wrap: wrap;
      height: 50px;
      margin: 0 auto
    }
    .news {
      padding: 0 2%;
      border: 1px solid #d2d2d2;
    }
    .title  {
      text-align: center;
      background: #c81c1c;
      position: relative;
      display: block;
    }
    .title h5 {
      font-size: 18px;
      margin: 8% 0;
      color: white;
    }
    .news marquee {
      font-size: 18px;
      margin-top: 12px
    }
    .news-content p {
      margin-right: 41px;
      display: inline;
      color: #37423b;
      animation: marquee 32s linear infinite;
    }
    .news-content a {
      color: #37423b;
    }

    .news-content a:hover {
      color: #FF3302;
    }

    .news:hover {
      border-color: #FF3302;
    }

    @keyframes marquee {
      from { transform: translateX(0); }
      to { transform: translateX(-10%); }
    }
    
  </style>

  <main id="main">
    <section id="counts2" class="counts2 section-bg">
      <div class="container">
        <div class="row ticker ">
          <div class="col-auto title  align-items-stretch">
            <h5><b>Announcements</b></h5>
          </div>
          <div class="col news">
            <marquee class="news-content" behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
               <?php
                $get_announcement = mysqli_query($db,"SELECT * FROM tbl_announcements WHERE prio = '1' ORDER BY date DESC");
                while ($row= mysqli_fetch_array($get_announcement)) {
                    $date = new DateTime($row['date']);
                ?>
              <p><a href="<?php echo $row['link']?>"><b><?php echo $row['title']?></b> (<?php echo $date->format('M d, Y');?>)</a></p>
              <?php } ?>
                <?php
                $get_announcement = mysqli_query($db,"SELECT * FROM tbl_announcements WHERE NOT prio = '1' ORDER BY date DESC LIMIT 5");
                while ($row= mysqli_fetch_array($get_announcement)) {
                    $date = new DateTime($row['date']);
                ?>
              <p><a href="<?php echo $row['link']?>"><b><?php echo $row['title']?></b> (<?php echo $date->format('M d, Y');?>)</a></p>
              <?php } ?>
            </marquee>
          </div>
        </div>
      </div>
    </section>
    
    <section id="counts" class="counts section-bg">
      <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" >
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
          </div>
          
          <div class="carousel-inner" >
              <div class="carousel-item active">
              <img src="assets/img/hedbac1.jpg" class="d-block img-fluid w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="assets/img/insti1.png" class="d-block img-fluid w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="assets/img/peacCert.jpg" class="d-block img-fluid w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="assets/img/psenrollment.png" class="d-block img-fluid w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="assets/img/bed3guide.png" class="d-block img-fluid w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="assets/img/shenrollment.png" class="d-block img-fluid w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="assets/img/preSchool.jpg" class="d-block img-fluid w-100" alt="...">
            </div>
            
            
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </section><!-- End Counts Section -->
    
    <section id="events" class="">
      <div class="container justify-content-center">
        <div class="row justify-content-center">
          <div class="col" style="display:block;">
            <center><iframe class="yt-vid"
              src="https://www.youtube.com/embed/LXdz4GEJBoc?playlist=LXdz4GEJBoc&loop=1" frameborder="0" allowfullscreen>
            </iframe></center>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= About Section ======= -->
    <section id="events" class="events">
      <div class="container">

      <div class="row">
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/basic_ed.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="department_bed.php">Basic Education Department</a></h5>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/higher_ed.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="department_hed.php">Higher Education Department</a></h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->
    <style>

      .yt-vid {
        width: 100%;
        height: 590px;
      }
    </style>
    <!--<section id="events" class="events">-->
    <!--  <div class="container justify-content-center">-->
    <!--      <div class="justify-content-center">-->
    <!--        <iframe class="yt-vid"-->
    <!--          src="https://www.youtube.com/embed/7Jd-aeEc3Fs?autoplay=1&mute=1&playlist=7Jd-aeEc3Fs&loop=1" allow="autoplay">-->
    <!--        </iframe>-->
    <!--      </div>-->
    <!--  </div>-->
    <!--</section>-->
    <!-- ======= Counts2 Section ======= -->
    


    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>News Update</h2>
          <p>Follow Us on Facebook</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <?php
                $get_announcement = mysqli_query($db,"SELECT * FROM tbl_announcements WHERE prio = '1' ORDER BY date DESC");
                while ($row= mysqli_fetch_array($get_announcement)) {
                    $date = new DateTime($row['date']);
                ?>
              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <h3><?php echo $row['title']?></h3>
                    <h4><?php echo $date->format('M d, Y');?></h4>
                    <?php echo $row['embed'];?>
                  </div>
                </div>
              </div>
              <?php } ?>

                <?php
                $get_announcement = mysqli_query($db,"SELECT * FROM tbl_announcements WHERE NOT prio = '1' ORDER BY date DESC LIMIT 5");
                while ($row= mysqli_fetch_array($get_announcement)) {
                    $date = new DateTime($row['date']);
                ?>
              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <h3><?php echo $row['title']?></h3>
                    <h4><?php echo $date->format('M d, Y');?></h4>
                    <?php echo $row['embed'];?>
                  </div>
                </div>
              </div>
              <?php } ?>


          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>
  </main><!-- End #main -->

                  <?php
                  include ('assets/includes/footer.php');
                  ?>