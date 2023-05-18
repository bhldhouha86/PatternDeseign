@extends('frontend.layouts.template')
@section('title',"Famely Shoes-about")
@section('slider')
<!-- ======= Breadcrumbs ======= -->
<div id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Présentation</h2>
      <ol>
        <li><a href="#">Accueil</a></li>
        <li>Présentation</li>
      </ol>
    </div>

  </div>
</div><!-- End Breadcrumbs -->
@endsection
@section('contenue')

<div id="about-us" class="about-us">
    <div class="container" data-aos="fade-up">

      <div class="row content">
        <div class="col-lg-6" data-aos="fade-right">
            <h2 style="margin-top: 25px;margin-left: 20px;">Qui sommes nous</h2>
          <img src="{{asset('images/photoboutique.jpg')}}"style="width: 570px;margin-left: -61px;"/>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 mt-5" data-aos="fade-left">
          <p>
            « Family Shoes » est une boutique spécialisée dans la vente de chaussures et accessoires pour hommes, femmes et Enfants.
          </p>
          <ul>
            <li><i class="ri-check-double-line"></i>  Notre choix de chaussures combine le raffinement, classique avec moderne, élégant avec décontracté.</li>
            <li><i class="ri-check-double-line"></i> Nous travaillons avec des marques reconnues pour assurer la qualité de nos produits, classique avec moderne, élégant avec décontracté. </li>
            <li><i class="ri-check-double-line"></i> Nous travaillons avec des marques reconnues pour assurer la qualité de nos produits, tout en offrant des prix abordables.</li>
            <li><i class="ri-check-double-line"></i>La qualité a toujours été le centre d'intérêt de l'équipe de « Family Shoes ».</li>
          </ul>
          <p class="fst-italic mb-3">
            « Family Shoes », promesse d’un service clientèle exceptionnel, Compétent et amical, elle est toujours prête à vous aider à trouver la chaussure parfaite et à répondre à toutes leurs questions.
             Nous sommes convaincus que nos clients repartiront de notre magasin avec une paire de chaussures confortable, durable et élégante
          </p>
        </div>
      </div>

    </div>
</div>
<!-- Start Section -->
<div class="container py-5">
    <div class="row text-center pt-5 pb-3">
        <div class="col-lg-6 m-auto">
            <h1 class="h1">Nos Services</h1>
            <p>
                Livraison à domicile, prête à vous aider de trouver la chaussure parfaite, promotion, Repondre aux questions des clients

            </p>
        </div>
    </div>
    <div class="row">

        <div class="col-md-6 col-lg-3 pb-5">
            <div class="h-100 py-5 services-icon-wap shadow">
                <div class="h1 text-success text-center"><i class="bi bi-truck"></i></div>
                <h2 class="h5 mt-4 text-center">Livraison à domicile</h2>
            </div>
        </div>

        <div class="col-md-6 col-lg-3 pb-5">
            <div class="h-100 py-5 services-icon-wap shadow">
                <div class="h1 text-success text-center"><i class="bi bi-currency-exchange"></i></div>
                <h2 class="h5 mt-4 text-center">Payement Sécurisé</h2>
            </div>
        </div>

        <div class="col-md-6 col-lg-3 pb-5">
            <div class="h-100 py-5 services-icon-wap shadow">
                <div class="h1 text-success text-center"><i class="bi bi-percent"></i></div>
                <h2 class="h5 mt-4 text-center">Promotion</h2>
            </div>
        </div>

        <div class="col-md-6 col-lg-3 pb-5">
            <div class="h-100 py-5 services-icon-wap shadow">
                <div class="h1 text-success text-center"><i class="bi bi-stopwatch"></i></div>
                <h2 class="h5 mt-4 text-center">24 heures Service</h2>
            </div>
        </div>
    </div>
</div>
<!-- End Section -->
@endsection
