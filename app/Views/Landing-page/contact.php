<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="bootstrap/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">

    <!-- Font llink-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500,600&display=swap">
</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparant">
        <div class="container px-lg-5">
            <a class="navbar-brand" href="#">SiDaun</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="AboutUs.html">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End of Responsive navbar-->

    <!-- Header-->
    <section class="py-5">
        <div class="container px-lg-5">
            <div class="row">
                <div class="col-md-5 d-flex justify-content-center align-items-center">
                    <img src="assets/3d-casual-life-scanning-qr-code.png" style="width: 350px;" alt="pict1">
                </div>

                <div class="col-md-6">
                    <h1 class="header-2">Contact Us.</h1>
                    <p>Discover the Wonders of Kebun Raya Banua. Feel free to get in touh.</p>
                    <form>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Name</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Full Name">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Gmail</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2"
                                placeholder="example@gmail.com">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Message</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="question">
                        </div>
                        <button type="submit" class="button-23" role="button" id="primary-btn">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Header-->

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