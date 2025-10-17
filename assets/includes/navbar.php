    
 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php"><img src="assets/img/sfac_logo.png"></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="active" href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li  class="dropdown"><a href="#">Department<i class="bi bi-chevron-down"></i></a></i>
            <ul>
            <li><a href="department_bed.php">Basic Education</a></li>
              <li><a href="department_hed.php">Higher Education</a></li>
            </ul>
          </li>

          
          <!-- <li><a href="events.php">Events</a></li>
          <li><a href="pricing.php">Pricing</a></li> -->

          <li class="dropdown"><a href="#"><span>Student Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>Bacoor</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="https://stfrancisbacoor.com/sfac-bac/pages/login/sign-in.php">HED Enrollment</a></li>
                  <li><a href="https://stfrancisbacoor.com/sfac-bac-ongrade/pages/login/login.php">HED Online Grade</a></li>
                  <li><a href="https://stfrancisbacoor.com/gcs-bacoor">HED GCS</a></li>
                  <li><a href="https://stfrancisbacoor.com/library-bacoor/index.php">SFAC | SAS OPAC</a></li>
                  
                  <li><a class="dropdown-item" href="https://stfrancisbacoor.com/alumni_tracer/">Alumni Tracer</a></li>
                  <li><a href="https://stfrancisbacoor.com/basic-edu/bed/pages/bed-login/login.php">BED Enrollment</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Las Piñas</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="https://stfrancislp.com/sfac-lp/pages/login/sign-in.php">HED Enrollment</a></li>
                  <li><a href="https://stfrancislp.com/sfac-lp-ongrade/pages/login/login.php">HED Online Grade</a></li>
                  <li><a href="https://stfrancisbacoor.com/library-bacoor/index.php">SFAC | SAS OPAC</a></li>
                  <li><a href="https://stfrancislp.com/gsbe/html/index.php">GSBE Library</a></li>
                  <li><a href="https://stfrancisbacoor.com/alumni_tracer/">Alumni Tracer</a></li>
                  <li><a href="https://stfrancislp.com/bedlp-enrollment/">BED Enrollment</a></li>
                </ul>
              </li>
              
            </ul>
          </li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="#" class="get-started-btn">Be One of Us</a>

    </div>
  </header><!-- End Header -->
  
  <!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "210261715681691");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v18.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>