<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="http://sidaun.test/assets/images/landing-page/favicon.ico" />

    <!-- Bootstrap icons-->
    <link href="http://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="http://sidaun.test/assets/compiled/css/app.css" />

    <!-- Font llink-->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Poppins:400,500,600&display=swap">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #588157;
            color: white;
        }

        .navbar {
            font-weight: bold;
            margin-top: 2rem;
        }

        .navbar-brand {
            margin-right: 5rem;
            font-size: 1.8rem;
        }

        .nav-item {
            margin-right: 2.5rem;
        }

        .header {
            font-weight: bold;
            font-size: 4rem;
            margin-top: 6rem;
        }

        .header-2 {
            font-weight: bold;
            font-size: 4rem;
            margin-top: 2rem;
        }

        .tagline {
            margin-top: 1.5rem;
            font-size: 1.2rem;
        }

        #primary-btn {
            background-color: #344E41;
            color: #ffffff;
            margin-top: 2rem;
            margin-right: 1rem;
        }

        .button-23 {
            background-color: #FFFFFF;
            border: 1px solid #22222200;
            border-radius: 8px;
            box-sizing: border-box;
            color: #222222;
            cursor: pointer;
            display: inline-block;
            font-size: 16px;
            font-weight: 600;
            line-height: 20px;
            margin: 0;
            outline: none;
            padding: 13px 23px;
            position: relative;
            text-align: center;
            text-decoration: none;
            touch-action: manipulation;
            transition: box-shadow .2s, -ms-transform .1s, -webkit-transform .1s, transform .1s;
            user-select: none;
            -webkit-user-select: none;
            width: auto;
        }

        .button-23:focus-visible {
            box-shadow: #222222 0 0 0 2px, rgba(255, 255, 255, 0.8) 0 0 0 4px;
            transition: box-shadow .2s;
        }

        .button-23:active {
            background-color: #F7F7F7;
            border-color: #000000;
            transform: scale(.96);
        }

        .button-23:disabled {
            border-color: #DDDDDD;
            color: #DDDDDD;
            cursor: not-allowed;
            opacity: 1;
        }

        .header-pict {
            width: 170px;
        }

        .content-pict {
            width: 300px;
        }

        .about-pict {
            width: 400px;
        }

        .sub-title {
            font-weight: bold;
            color: rgb(204, 204, 204);
        }

        .h2-title {
            margin-bottom: 1.5rem;
        }

        .content-section {
            margin-top: 7rem;
        }

        .form-group {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparant">
        <div class="container px-lg-5">
            <a class="navbar-brand" href="#">SiDaun</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>Landingpage/aboutus">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>Landingpage/contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>Login">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End of Responsive navbar-->

    <!-- Header-->
    <section class="py-5">
        <div class="container px-lg-5 text-center">
            <div class="row">
                <div class="col-md-2"></div>

                <div class="col-md-8">
                    <h1>About Us</h1>
                    <p class="tagline">SiDaun is a team committed to introducing and educating the public about the
                        diversity of
                        plants in botanical gardens. We believe that knowledge about plants can raise awareness of the
                        importance of preserving biodiversity and the environment.</p>
                </div>

                <div class="col-md-2"></div>
            </div>
        </div>
    </section>
    <!-- End of Header-->

    <div class="d-flex justify-content-center align-items-center">
        <img src="http://sidaun.test/assets/images/landing-page/casual-life-3d-young-people-in-the-aprons-with-gadgets.png" class="about-pict" alt="">
    </div>

    <!-- Mission-->
    <section class="py-5">
        <div class="container px-lg-5 text-center">
            <div class="row">
                <div class="col-md-2"></div>

                <div class="col-md-8">
                    <h1>Our Mission</h1>
                    <p class="tagline">We are committed to providing an interactive and educational experience through
                        innovative barcode scanning technology. Our goal is to make plant identification easier, faster,
                        and more accurate, allowing everyone to enjoy the beauty and benefits offered by botanical
                        gardens.</p>
                </div>

                <div class="col-md-2"></div>
            </div>
        </div>
    </section>
    <!-- End of Mission-->

    <!-- Introducing-->
    <section class="py-5">
        <div class="container px-lg-5">
            <div class="p-4 p-lg-5 rounded-3" style="background-color: #77ad76; box-shadow:
                2.8px 2.8px 2.2px rgba(0, 0, 0, 0.02),
                6.7px 6.7px 5.3px rgba(0, 0, 0, 0.028),
                12.5px 12.5px 10px rgba(0, 0, 0, 0.035),
                22.3px 22.3px 17.9px rgba(0, 0, 0, 0.042),
                41.8px 41.8px 33.4px rgba(0, 0, 0, 0.05),
                100px 100px 80px rgba(0, 0, 0, 0.07)
              ;">
                <div class="m-4 m-lg-5">
                    <div class="row">
                        <div class="col-md-7">
                            <h1 class="display-5 fw-bold">Get Started With Us</h1><br><br>
                            <p class="fs-4">The cutting-edge educational platform that allows you to easily
                                identify various plant species in the botanical garden simply by scanning the barcode
                                attached
                                to the trees or plants you encounter. Enjoy a delightful and informative experience with
                                our
                                innovative technology.</p>
                            <button class="button-23" role="button" id="primary-btn">Scanning Now!</button>
                            <br><br>
                        </div>

                        <div class="col-md-5 d-flex justify-content-center align-items-center">
                            <img src="http://sidaun.test/assets/images/landing-page/casual-life-3d-monstera-plant-with-holes-in-its-leaves.png" class="content-pict" alt="pict2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Introducing-->

    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; SiDaun 2023</p>
        </div>
    </footer>
    <!-- End of Footer-->

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>