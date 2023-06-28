<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $tittle ?? 'Sidaun' ?></title>

    <style>
        @import "compass/css3";
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');

        body {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            font-family: 'Roboto', sans-serif;
            background-color: #588157;
            overflow: hidden;
        }

        .table {
            display: table;
            width: 100%;
            height: 100%;
        }

        .table-cell {
            display: table-cell;
            vertical-align: middle;
            transition: all 0.5s;
        }

        .container {
            position: relative;
            width: 600px;
            margin: 30px auto 0;
            height: 320px;
            background-color: #77ad76;
            top: 50%;
            margin-top: -160px;
            transition: all 0.5s;
        }

        .container .box {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .container .box:before,
        .container .box:after {
            content: " ";
            position: absolute;
            left: 152px;
            top: 50px;
            background-color: #84b384;
            transform: rotateX(52deg) rotateY(15deg) rotateZ(-38deg);
            width: 300px;
            height: 285px;
            transition: all 0.5s;
        }

        .container .box:after {
            background-color: #99cc99;
            top: -10px;
            left: 80px;
            width: 320px;
            height: 180px;
        }

        .container .container-forms {
            position: relative;
        }

        .container .btn {
            cursor: pointer;
            text-align: center;
            margin: 0 auto;
            width: 60px;
            color: #fff;
            background-color: #344E41;
            opacity: 1;
            transition: all 0.5s;
        }

        .container .btn:hover {
            opacity: 0.7;
        }

        .container .btn,
        .container input {
            padding: 10px 15px;
        }

        .container input {
            margin: 0 auto 15px;
            display: block;
            width: calc(600px/2 - 80px);
            transition: all 0.3s;
        }

        .container .container-forms .container-info {
            text-align: left;
            font-size: 0;
        }

        .container .container-forms .container-info .info-item {
            text-align: center;
            font-size: 16px;
            width: calc(600px/2);
            height: 320px;
            display: inline-block;
            vertical-align: top;
            color: #fff;
            opacity: 1;
            transition: all 0.3s;
        }

        .container .container-forms .container-info .info-item h1 {
            font-size: 28px;
            margin: 30px;
        }

        .container .container-forms .container-info .info-item p {
            font-size: 15px;
            margin: 30px;
        }

        .container .container-forms .container-info .info-item .p2 {
            font-size: 10px;
        }

        .container .container-forms .container-info .info-item .btn {
            background-color: transparent;
            border: 1px solid #fff;
        }

        .container .container-forms .container-info .info-item .table-cell {
            padding-right: 35px;
        }

        .container .container-forms .container-info .info-item:nth-child(2) .table-cell {
            padding-left: 35px;
            padding-right: 0;
        }

        .container .container-form {
            overflow: hidden;
            position: absolute;
            left: 30px;
            top: -30px;
            width: 305px;
            height: calc(320px + 60px);
            background-color: #fff;
            box-shadow: 0 0 15px 0 rgba(0, 0, 0, 0.2);
            transition: all 0.5s;
        }

        .container .container-form:before {
            content: "✔";
            position: absolute;
            left: 160px;
            top: -50px;
            color: #344E41;
            font-size: 130px;
            opacity: 0;
            transition: all 0.5s;
        }

        .container .container-form .btn {
            position: relative;
            box-shadow: 0 0 10px 1px #344E41;
            margin-top: 30px;
        }

        .container .form-item {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            opacity: 1;
            transition: all 0.5s;
        }

        .container .form-item.sign-up {
            position: absolute;
            left: -100%;
            opacity: 0;
        }

        .container.log-in .box:before {
            position: absolute;
            left: 180px;
            top: 62px;
            height: 265px;
        }

        .container.log-in .box:after {
            top: 22px;
            left: 192px;
            width: 324px;
            height: 220px;
        }

        .container.log-in .container-form {
            left: 265px;
        }

        .container.log-in .form-item.sign-up {
            left: 0;
            opacity: 1;
        }

        .container.log-in .form-item.log-in {
            left: -100%;
            opacity: 0;
        }

        .container.active {
            width: 260px;
            height: 140px;
            margin-top: -70px;
        }

        .container.active .container-form {
            left: 30px;
            width: 200px;
            height: 200px;
        }

        .container.active .container-form:before {
            content: "✔";
            position: absolute;
            left: 51px;
            top: 5px;
            color: #344E41;
            font-size: 130px;
            opacity: 1;
        }

        .container.active input,
        .container.active .btn,
        .container.active .info-item {
            display: none;
            opacity: 0;
            padding: 0px;
            margin: 0 auto;
            height: 0;
        }

        .container.active .form-item {
            height: 100%;
        }

        .container.active .container-forms .container-info .info-item {
            height: 0%;
            opacity: 0;
        }

        .rabbit {
            width: 50px;
            height: 50px;
            position: absolute;
            bottom: 20px;
            right: 20px;
            z-index: 3;
            fill: #fff;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="box"></div>
        <div class="container-forms">
            <div class="container-info">
                <div class="info-item">
                    <div class="table">
                        <div class="table-cell" style="text-align: left;">
                            <h1>Join SiDaun Today!</h1>
                            <p>Create your SiDaun account to start exploring the plants in the botanical garden.</p>
                            <p class="p2">Already have an account?</p>
                            <div class=" btn">Log in</div>
                        </div>
                    </div>
                </div>
                <div class="info-item">
                    <div class="table">
                        <div class="table-cell" style="text-align: left;">
                            <h1>Welcome back!</h1>
                            <p>Please enter your SiDaun account to continue exploring the plants in the botanical
                                garden.</p>
                            <p class="p2">Don't have an account?</p>
                            <div class=" btn">Sign up
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-form">
                <div class="form-item log-in">
                    <div class="table">
                        <div class="table-cell">
                            <input type="text" name="Username" placeholder="Username" id="username">
                            <input type="password" name="Password" placeholder="Password" id="password">
                            <div class="btn" onclick="check()">Log in</div>
                        </div>
                    </div>
                </div>
                <div class="form-item sign-up">
                    <div class="table">
                        <div class="table-cell">
                            <input type="text" name="Username" placeholder="Username" id="username">
                            <input type="password" name="Password" placeholder="Password" id="password">
                            <div class="btn" onclick="registrasi()">Sign up</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="box-item" href="https://codepen.io/Anna_Batura/" target="blank">
            <svg class="rabbit" viewBox="0 0 600 600" version="1.2">
                <path id="rabbit" d="..."></path>
            </svg>
        </a>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var btns = document.querySelectorAll('.info-item .btn');
            for (var i = 0; i < btns.length; i++) {
                btns[i].addEventListener('click', function() {
                    var container = document.querySelector('.container');
                    container.classList.toggle('log-in');
                });
            }
        });
    </script>

    <script>
        var form = {};

        function check() {
            const username = $("#username").val();
            const password = $("#password").val();

            var model = {};
            model.username = username;
            model.password = password;
            form.model = model;

            if (username == '' || password == '') {
                Swal.fire('Ups !', 'Isi Username dan Password', 'warning')
            } else {
                $.post("<?= base_url(); ?>/Login/check", form, function(res) {
                    if (res.code == 200) {
                        var formBtns = document.querySelectorAll('.container-form .btn');
                        for (var j = 0; j < formBtns.length; j++) {
                            formBtns[j].addEventListener('click', function() {
                                var container = document.querySelector('.container');
                                container.classList.add('active');
                            });
                        }
                    } else {
                        Swal.fire({
                            title: 'Ups',
                            text: res.codeText,
                            icon: 'error',
                        })
                    }
                }).fail(function(xhr) {
                    console.log(xhr);
                    Swal.fire('Error', "Server gagal merespon", 'error');
                }).always(function() {
                    // app.form.isSaving = false;
                })
            }
        }
    </script>

    <script>
        var form = {};

        function registrasi() {
            const username = $("#username").val();
            const password = $("#password").val();

            var model = {};
            model.username = username;
            model.password = password;
            form.model = model;

            $.post("<?= base_url(); ?>/Login/simpanRegistrasi", form, function(res) {
                if (typeof res.validasi == 'undefined') {
                    var formBtns = document.querySelectorAll('.container-form .btn');
                    for (var j = 0; j < formBtns.length; j++) {
                        formBtns[j].addEventListener('click', function() {
                            var container = document.querySelector('.container');
                            container.classList.add('active');
                        });
                    }
                    Swal.fire({
                        title: 'Berhasil',
                        text: "Akun Berhasil Dibuat",
                        icon: 'success',
                    }).then((result) => {
                        window.location.replace("<?= base_url(); ?>/Login");
                    })
                } else {
                    Swal.fire('Ups', "Username atau Password kosong", 'error');
                }
            }).fail(function(xhr) {
                console.log(xhr);
                Swal.fire('Error', "Server gagal merespon", 'error');
            }).always(function() {
                // app.form.isSaving = false;
            })
        }

        function check() {
            const username = $("#username").val();
            const password = $("#password").val();

            var model = {};
            model.username = username;
            model.password = password;
            form.model = model;

            $.post("<?= current_url(); ?>/Login/registrasi", "", function(res) {}).fail(function(xhr) {
                console.log(xhr);
                Swal.fire('Error', "Server gagal merespon", 'error');
            }).always(function() {
                // app.form.isSaving = false;
            })
        }

        function postData(url, params, callback) {
            var xhr = new XMLHttpRequest();
            xhr.open("POST", url, true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function() {
                if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
                    callback(this.responseText);
                }
            }
            xhr.send(params);
        }

        function post(url, params, callback) {
            var xhr = new XMLHttpRequest();
            xhr.open("POST", url, true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.send(params);
        }
    </script>

    <script src="<?php current_url() ?>/assets/extensions/sweetalert2/sweetalert2.js"></script>
    <script src="<?php current_url() ?>/assets/extensions/jquery/jquery.js"></script>
</body>

</html>