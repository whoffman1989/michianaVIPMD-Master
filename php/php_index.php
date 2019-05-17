<?php
if ($_POST['submit']) {
  if (!$_POST['name']) {
    $error="<br/>- Please enter your name. ";
  }
  if (!$_POST['email']) {
    $error.="<br/>- Please enter your email. ";
  }
  if (!$_POST['message']) {
    $error.="<br/>- Please enter a message. ";
  }
  if (!$_POST['check']) {
    $error.="<br/>- Please confirm that you are human. ";
  }
  if ($error) {
    $result='<div class="alert alert-danger" role="alert"><strong>Oops, there is an error.</strong> Please correct the following: '.$error.'</div>';
  } else {
    mail("whoffman1989@gmail.com", "Contact Message from: ".$_POST['name'],"
    Michiana VIP MD,
      You have recieved a message from: 
        ".$_POST['name']."
      Email: 
        ".$_POST['email']."
      Message: 
        ".$_POST['message']);
    {
      $_POST = array();
      $result='<div class="alert alert-success" role="alert"><strong>Thank you</strong>, We will be in touch shortly.</div>';
    }
  }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale" />
    <title>Michiana VIP MD - Contact</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu" rel="stylesheet" />

    <!-- CSS Stylesheets -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link rel="stylesheet" href="../styles.css" />

    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.8.1/js/all.js"
        integrity="sha384-g5uSoOSBd7KkhAMlnQILrecXvzst9TdC09/VM+pjDTCM+1il8RHz5fKANTFFb+gQ" crossorigin="anonymous">
    </script>

    <!-- Bootstrap Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</head>

<body>
  <section class="colored-section" id="title">
  <div class="container-fluid">
            <!-- Nav Bar -->
            <nav class="navbar navbar-expand-xl navbar-dark">
                <a class="navbar-brand" href=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="../index.html">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../pages/about_1.html">ABOUT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../pages/tech_1.html">TECH</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../pages/testimonials_1.html">TESTIMONIALS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../pages/events_1.html">EVENTS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../pages/inthenews_1.html">IN THE NEWS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../pages/faq_1.html">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../pages/payment_1.html">PAYMENT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact_1.html">CONTACT</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- Title -->
            <div class="row">
                <div class="col-lg-6">
                    <img class="title-image"
                        src="//img1.wsimg.com/isteam/ip/15a245e5-fce8-4499-b77f-9eec888efa76/68fe4963-a828-49a7-a012-6669e8cd93c7.jpg/:/cr=t:0%25,l:0%25,w:100%25,h:100%25/rs=w:1680,h:680,cg:true,m/cr=w:1680,h:680,ax:43.33338783170001%25,ay:50.08895542900785%25"
                        alt="michiana vip logo" />
                </div>
                <div class="col-lg-6" id="heading-paragraph">
                    <h1 class="big-heading">CONCIERGE MEDICINE</h1>
                    <p class="heading-paragraph">
                        Dr. Jesse Hsieh, a physician who is helping to connect mind, body,
                        and spirit for healthy living and well being.
                    </p>
                </div>
            </div>
        </div>
  </section>

    <!-- Contact Form -->

  <section class="contact-form">
    <div class="container">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <h2 class="h1_contact">Contact US</h2>

          <?php echo $result;?>

          <p>Send a message via the form below</p>
          <form method="post" role="form">
            <div class="form-group">
              <input type="text" name="name" class="form-control" placeholder="Your Name" value="<?php echo $_POST['name']; ?>">
            </div>
            <div class="form-group">
              <input type="email" name="email" class="form-control" placeholder="Your Email" value="<?php echo $_POST['email']; ?>">
            </div>
            <div class="form-group">
              <textarea name="message" rows="7" class="form-control" placeholder="Your Message..."><?php echo $_POST['message'];?></textarea>
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox" name="check"> I am Human
              </label>
            </div>
            <div align="center">
              <input type="submit" name="submit" class="btn btn-secondary" value="Send Message">
            </div>
          </form>
        </div>
      </div>
    </div>
    <br>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p>Please contact us directly with any questions, comments, or scheduling inquiries you may have.</p>
          <h3>Michiana VIP MD</h3>
          <p>3221 Beacon Parkway Granger, Indiana 46530, United States</p>
          <p><Strong>Phone: </Strong> 574-309-9974</p> 
          <p><Strong>Fax: </Strong> 574-990-0102</p>
          <h3>Hours</h3>
          <p>Monday-Thursday: 8am - 4pm</p>

        </div>
      </div>
    </div>
  </section>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
  <!-- Footer -->
  <footer class="gray-section" id="footer">
        <div class="footer-padding">
            <i class="social-icon fab fa-facebook-f"></i>
            <i class="social-icon fab fa-twitter"></i>
            <i class="social-icon fab fa-instagram"></i>
            <i class="social-icon fas fa-envelope"></i>
            <p class="footer_margin">© Copyright 2018 Michiana VIP MD - All Rights Reserved</p>
        </div>
    </footer>
</body>

</html>