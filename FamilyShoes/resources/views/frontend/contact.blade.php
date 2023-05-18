@extends('frontend.layouts.template')
@section('title',"Famely Shoes-contact")
@section('slider')
<!-- ======= Breadcrumbs ======= -->
<div id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Contact</h2>
      <ol>
        <li><a href="#">Accueil</a></li>
        <li>Contact</li>
      </ol>
    </div>

  </div>
</div><!-- End Breadcrumbs -->
@endsection
@section('contenue')

<div id="main">

    <div class="map-section">
      <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/place/Av.+de+la+Libert%C3%A9,+Sakiet+Ezzit,+Tunisie/@34.8177618,10.7727981,17z/data=!3m1!4b1!4m6!3m5!1s0x1301d22460c5a40f:0xbfb9db045337e616!8m2!3d34.8177574!4d10.7749921!16s%2Fg%2F1td5bqp_?hl=fr" frameborder="0" allowfullscreen></iframe>
    </div>
    <div id="contact" class="contact">
      <div class="container">

        <div class="row justify-content-center" data-aos="fade-up">

          <div class="col-lg-10">

            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Adresse:</h4>
                  <p>Route Tunis km9 sfax <br>Tunisia, CP 3021</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>familyshoes13@gmail.com</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-phone"></i>
                  <h4>Télephone:</h4>
                  <p>+216 44 993 411</p>
                </div>
              </div>
            </div>

          </div>

        </div>

        <div class="row mt-5 justify-content-center" data-aos="fade-up">
          <div class="col-lg-10">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form" style="margin-bottom: 50px;">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Votre nom" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Votre Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Votre message a été envoyé. Merci!</div>
              </div>
              <div class="text-center"><button type="submit">Envoyer</button></div>
            </form>
          </div>

        </div>

      </div>
    </div>

  </div>
@endsection
