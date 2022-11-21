<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Pop-it!</title>
    <link rel="shortcut icon" href="assets/images/round.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Stye CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    {{-- Swiper --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    {{-- aos animation --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>


<body>
    {{-- @yield('content') --}}

    <!-- //start: slider -->
    @include('main.slider')
    <!-- //end: slider -->

    <!-- //start: client -->
    @include('main.definisi')
    <!-- //end: client -->

    <!-- //start: value -->
    @include('main.beli')
    <!-- //end: value -->

    <!-- //start: talk_to_us -->
    @include('main.talk_to_us')
    <!-- //end: talk_to_us -->


    {{-- START FOOTER --}}
    <footer style="background-color: #333333; height:100%;padding:1%;justify-content:center;">
        <div class="card-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 mx-auto">
                        <a class="text-white" href="https://www.instagram.com/kodland.ind/"
                            style="font-size: 18px;text-decoration:none;underline:none;">Instagram.Kodland</a>
                    </div>
                    <div class="col-md-3 col-sm-3 mx-auto">
                        <a class="text-white" href="https://www.instagram.com/kodland.ind/"
                            style="font-size: 18px;text-decoration:none;underline:none;">Instagram.Kodland</a>
                    </div>
                    <div class="col-md-3 col-sm-3 mx-auto">
                        <a class="text-white" href="https://www.instagram.com/kodland.ind/"
                            style="font-size: 18px;text-decoration:none;underline:none;">Instagram.Kodland</a>
                    </div>
                    <div class="col-md-3 col-sm-3 mx-auto">
                        <a class="text-white" href="https://www.instagram.com/kodland.ind/"
                            style="font-size: 18px;text-decoration:none;underline:none;">Instagram.Kodland</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- //* Sweet Alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js" async></script>
    <!-- //* JQuery -->
    <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
    <!-- //* Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    {{-- swiper --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    {{-- aos animation  --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>

</body>

</html>