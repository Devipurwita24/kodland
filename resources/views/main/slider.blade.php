<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    @media screen and (max-width:900px) {}

    .btn {
        padding: 12px 28px;
        background-color: #b8e7da;
        border: none;
        border-radius: 0;
    }

    .judul {
        font-weight: bolder;
        font-size: 200px;
        height: 11px;
    }
    .nav-link{
        font-size:20px;
    }
    </style>

</head>

<body>
    <div style="background-image: url('assets/images/background.png');background-repeat: no-repeat;background-size: cover;">
        <nav class="navbar navbar-expand-lg sticky-top fixed">
            <div class="container-fluid" style="padding:1%">
                <a href="/" class="navbar-brand logo ml-1 mx-4">DeviKodland</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                        <li class="nav-item active mx-5">
                            <a class="nav-link scrollto text-dark" style="font-weight:bolder;" href="#definisi">Definisi</a>
                        </li>
                        <li class="nav-item mx-5">
                            <a class="nav-link scrollto text-dark" style="font-weight:bolder;" href="#beli">Product</a>
                        </li>
                        <li class="nav-item mx-5">
                            <a class="nav-link scrollto text-dark" style="font-weight:bolder;" href="#talk_to_us">Manfaat</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <section id="home" class="align-items-center">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-inner">
                    <section class="carousel-item active bg" id="slide-1">
                        <section class="container-fluid text-slider"><br>
                            <span class="judul">POP IT!</span>
                            <section class="caption-slider">
                                <h4>Pop It dapat menghilangkan stress yang mengguncang</h4>
                                <h4>anda hanya dengan pluk-pluk</h4>
                                <a class="product btn text-dark nav-link scrollto" href="#beli"
                                    role="button">Product</a>
                                <!-- <button type="button" style="padding: 12px 28px; background-color: #4CAF50;">12px 28px</button> -->
                            </section>
                        </section>
                    </section>
                </div>
            </div>
        </section>
    </div>
</body>

</html>