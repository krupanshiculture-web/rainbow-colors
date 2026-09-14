<head>
   <!-- required meta -->
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- #favicon -->
   <link rel="shortcut icon" href={{ asset('assets/front/images/rainbow/favicon-y.png') }} type="image/x-icon" >
   <!-- #title -->
   <title>Rainbow Colors</title>
   <!-- #keywords -->
   <meta name="keywords" content="creative, agency, portfolio">
   <!-- #description -->
   <meta name="description" content="Creative Agency Portfolio PHP Template">
   <!-- ==== css dependencies start ==== -->
   <!-- bootstrap five css -->
   <link rel="stylesheet" href={{ asset('assets/front/vendor/bootstrap/css/bootstrap.min.css') }}>
   <!-- glyphter css -->
   <link rel="stylesheet" href={{ asset('assets/front/vendor/glyyphter/css/xpovio.css') }}>
   <!-- font awesome six css -->
   <link rel="stylesheet" href={{ asset('assets/front/vendor/font-awesome/css/all.css') }}>
   <!-- nice select css -->
   <link rel="stylesheet" href={{ asset('assets/front/vendor/nice-select/css/nice-select.css') }}>
   <!-- magnific popup css -->
   <link rel="stylesheet" href={{ asset('assets/front/vendor/magnific-popup/css/magnific-popup.css') }}>
   <!-- slick css -->
   <link rel="stylesheet" href={{ asset('assets/front/vendor/slick/css/slick.css') }}>
   <!-- ==== / css dependencies end ==== -->
   <!-- main css -->
   <link rel="stylesheet" href={{ asset('assets/front/css/front.css') }}>
</head>

<body>
   <div class="my-app">

      <!-- Preloader Start -->
      @include('front.layouts.preloader')

      <!-- Cursor Area Start -->
      @include('front.layouts.cursor')

      <!-- ==== header start ==== -->
      @include('front.layouts.header')
      <!-- ==== / header end ==== -->

      @yield('content')

   </div>

   <!-- Back to top area start here -->
   @include('front.layouts.scroll-up')
   <!-- Back to top area end here -->
   <!--<< All JS Plugins >>-->
   @include('front.layouts.script')
  
</body>