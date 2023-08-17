 <?php wp_head();?>

  <link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/assets/images/favicon.png"
    type="image/x-icon" />
         <link href="https://docs.google.com/document/d/1-IyBCJDZ9yYQ_KtsbOtdp_-57r--3XAcC2hOfa_Ryzw/edit?usp=share_link
"/>
    <script src="<?php echo get_template_directory_uri();?>/assets/js/custom.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css"
      integrity="sha512-WEQNv9d3+sqyHjrqUZobDhFARZDko2wpWdfcpv44lsypsSuMO0kHGd3MQ8rrsBn/Qa39VojphdU6CMkpJUmDVw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
      integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
      integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <script
      src="https://kit.fontawesome.com/b0eb9bd990.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/global.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/header.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/footer.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/home.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/gallery.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/about.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/philippines.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/blog.css"/>
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/contact.css"/>
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/form.css"/>
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/responsive.css" />
  </head>
  <body>
    <div class="topbar">
      <div class="container">
        <div class="topbarinside d-flex align-items-center">
          <div class="social-media d-flex align-items-center">
            <h6>Follow Us :</h6>
            <div class="social-icons d-flex align-items-center">
              <a href="https://www.facebook.com/UPH.DJGTamayoMedicalUniversity"><i class="fa-brands fa-facebook-f"></i></a>
              <a href="https://www.instagram.com/uph_djgtamayomedicaluniversity/"><i class="fa-brands fa-instagram"></i></a>
              <a href="https://twitter.com/UPH_DJGTMU"><i class="fa-brands fa-twitter"></i></a>
              <a href="https://www.linkedin.com/in/uph-djg-tamayo-medical-university-381807277/"><i class="fa-brands fa-linkedin"></i></a>
              <a href="https://www.youtube.com/channel/UCK8k9jpB2YzMBiRVi1r1gCw"><i class="fa-brands fa-youtube"></i></a> 
            </div>
          </div>
          <div class="trust d-flex align-items-center">
            <img src="<?php bloginfo('template_directory');?>/assets/images/trust-icon.webp" alt="" />
            <h5>Most Premium and Prestigious University</h5>
          </div>
          <div class="phone d-flex align-items-center">
            <a  href="tel:+918122728122">
              <i class="fa-solid fa-phone"></i>
              <h5>8122878122</h5>
            </a>
        </div>
      </div>
    </div>
  </div>
  <nav>
    <div class="container d-flex align-items-center navigation">

      <div class="logo">
        <img src="<?php bloginfo('template_directory');?>/assets/images/Tamayo-logo.webp" alt="Tamayo" />
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links"
        onclick="toggleNavbar()">
        <i class="fa-solid fa-bars"></i>
      </button>
      <button class="closebtn" type="button" data-toggle="collapse" data-target="#navbar-links"
        onclick="toggleNavbar()">
        <i class="fa-solid fa-x"></i>
      </button>
      <ul class="navbar navbar-hide" id="navbar-links">
        <li>
          <a href="https://www.uphdjgtmedicaluniversity.com/">Home</a>
        </li>
        <li>
          <a href="https://www.uphdjgtmedicaluniversity.com/about">About Us</a> </li>
        <li><a href="https://uphdjgtmedicaluniversity.com/philippines/">Phillippines</a> </li>
        <li><a href="https://uphdjgtmedicaluniversity.com/gallery/">Gallery</a> </li>
        <li><a href="https://uphdjgtmedicaluniversity.com/contact-us/">Contact</a> </li>
        <li><a href="https://uphdjgtmedicaluniversity.com/blog/">Blog</a> </li>
        <li>
           <a href="#video-popup" class="open-popup-link popup-youtube video-btn">
          <button type="button" class="btn btn-primary admissionbutton d-flex align-items-center">
            Admission Now <i class="fa-solid fa-arrow-right"></i>
          </button>
</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="overlay"></div>