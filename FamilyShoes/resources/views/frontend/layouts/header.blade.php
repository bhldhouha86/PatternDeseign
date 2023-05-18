<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
  <div class="container d-flex align-items-center">

  <!--  <h1 class="logo me-auto"><a href="#"><span>Family</span>Shoes</a></h1> -->
    <!-- Uncomment below if you prefer to use an image logo -->
     <a href="#" class="logo me-auto me-lg-0"><img src="{{asset('images/logo.png')}}" alt="" class="img-fluid"></a>
    <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="{{route('FamilyShoes.home')}}" class="active">Accueil</a></li>
          <li><a href="{{route('FamilyShoes.about')}}">Présentation</a></li>
          <li><a href="{{route('FamilyShoes.produits')}}">Produits</a></li>
          <li><a href="{{route('FamilyShoes.contact')}}">Contact</a></li>


        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    <div class="header-social-links d-flex">
      <a href="https://fb.com/" class="facebook"><i class="bu bi-facebook"></i></a>
      <a href="https://www.instagram.com/" class="instagram"><i class="bu bi-instagram"></i></a>
    </div>

  </div>
</header><!-- End Header -->
