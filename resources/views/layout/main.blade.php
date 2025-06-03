<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>BEM KM FASILKOM UNSRI</title>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <!-- remixicon -->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">

  <!--Font Awesome CDN-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Favicons -->
  <link href="{{ asset('assets/image/logo.png') }}" rel="icon">
  <link href="{{ asset('assets/image/logo.png') }}" rel="apple-touch-icon">

  <!--Carousel-->
  <link rel="stylesheet" href="{{asset('owlcarousel/dist/assets/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('owlcarousel/dist/assets/owl.theme.default.min.css')}}">
  
  <!-- Card Swiper -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.css">
  
  <!--CSS-->
  <link rel="stylesheet" href="{{ asset('css/main.css')}}">
  <link rel="stylesheet" href="{{ asset('css/card-slider.css')}}">
  <link rel="stylesheet" href="{{ asset('css/card-swiper.css')}}">
  <link rel="stylesheet" href="{{ asset('css/navbar.css')}}">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>

<body>
  @yield('isi')
  <script src="{{asset('node_modules/jquery/dist/jquery.min.js')}} "></script>
  <script src="{{asset('owlcarousel/dist/owl.carousel.min.js')}} "></script>
  <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
  <script src="{{asset('assets/js/main.js')}}"></script>
  <script src="{{asset('assets/js/navbar.js')}}"></script>
  <script src="{{asset('assets/js/card-swiper.js')}}"></script>
  <script src="{{asset('assets/js/typescript.js')}}"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.2/cdn.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>