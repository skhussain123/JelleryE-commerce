<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="Description" content="Enter your description here" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="css/card.css">
  <title>Title</title>
</head>

<body>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>

</html>
<?php
include "webheader.php";

?>

<script>
  $(document).ready(function () {
    $('#about').addClass('active')
  })
</script>

<section>
</section>

<main id="main">

  <section id="about" class="about mt-4">
    <div class="container-fluid">

      <div class="row">
        <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
          <img src="img/logo3.png" alt="">
        </div>

        <div
          class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
          <h3 style="font-size:50px;">About us</h3>
          <br>

          <p style="font-size: x-large;">welcome to our jewelry and cosmetics website! We are a team of passionate individual who are committed to
            providing our customers with high-quality and unique products.
            <br>
            <br>
            Our journy began with a simple idea:to create a plateform where people could find exquisite jewelry and
            cosmetics at affordable prices.with this vision in mind,we have worked hard to curate a collection of
            products that are not only beautiful but also sustainable.
            <br>
            <br>
            At our website you will find a wide range of jewelry pieces, including nacklaces, earrings,bracelets, and
            rings crafted from various materials like gold, silver, and precious stones. Our cosmetic products range
            from makeup and skiricare to fragrances and hair care all of which are carefully selected form trusted
            brands.
          </p>


        </div>
      </div>
      <p style="font-size: x-large; ">
        We believe that beauty should not come at the cost of the environment or the people involved in the production
        process. thats why we only source products from ethical and sustainable suppliers. erisuring that our customers
        can enjoy their purchases with purchases with peace of mind.
        <br>
        Our team is dedicated to providing excelient customer servive, and we are always happy to answer any questions
        you may have about our productd or services. Thanks you for choosing for choosing to shop with us, and we hope
        you enjoy your experience with our website.
      </p>
    </div>
  </section>

</main>
<br>
<hr>



<?php
    include "footer.php"
    ?>