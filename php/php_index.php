<?php

if ($_POST['submit']) {
  if (!$_POST['name']) {
    $error="Please enter your name";
  }
  if (!$_POST['email']) {
    $error="Please enter your email";
  }
  if (!$_POST['message']) {
    $error="Please enter a message";
  }
  if (!$_POST['check']) {
    $error="Please confirm that you are human";
  }

  if ($error) {
    $result="Oops, there is an error";
  }

}

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Contact Form</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="php_styles.css">
</head>

<body>
  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <h1>Contact Form</h1>

          <?php echo $result;?>

          <p>Send a message via the form below</p>
          <form method="post" role="form">
            <div class="form-group">
              <input type="text" name="name" class="form-control" placeholder="Your Name">
            </div>
            <div class="form-group">
              <input type="email" name="email" class="form-control" placeholder="Your Email">
            </div>
            <div class="form-group">
              <textarea name="message" rows="5" class="form-control" placeholder="Your Message..."></textarea>
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
</body>

</html>