<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Registration</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/album/">

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="bootstrap-rtl-master/dist/css/bootstrap-rtl.min.css" rel="stylesheet"> -->



    <!-- Favicons -->
    <link rel="apple-touch-icon" href="bootstrap-4.4.1/site/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="bootstrap-4.4.1/site/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="bootstrap-4.4.1/site/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="bootstrap-4.4.1/site/docs/4.4/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="bootstrap-4.4.1/site/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
    <link rel="icon" href="bootstrap-4.4.1/site/docs/4.4/assets/img/favicons/favicon.ico">
    <meta name="msapplication-config" content="bootstrap-4.4.1/site/docs/4.4/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">


    <!-- Toggle Bootstrap -->
    <script src="js/jquery-3.4.1.slim.min.js"></script>

    <script src="js/popper.min.js"></script>

    <link href="css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="js/bootstrap-toggle.min.js"></script>


    <!-- <a href="http://docs.jquery.com/Events/ready#fn">JQuery's ready event</a> -->


    <!-- Sort DDL JQuery -->
    <script>
        function sortDdlByText() {
            // Loop for each select element on the page.
            $("select").each(function() {

                // Keep track of the selected option.
                var selectedValue = $(this).val();

                // Sort all the options by text val.
                $(this).html($("option", $(this)).sort(function(a, b) {
                    return a.text == b.text ? 0 : a.text < b.text ? -1 : 1
                }));

                // Select one option.
                $(this).val(selectedValue);
            });
        }
    </script>
    <script type="text/javascript">
        $(document).ready(sortDdlByText);
    </script>
    <!-- Sort DDL JQuery -->

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .hidden {
            display: none;
        }

        .visible {
            display: block;
        }


        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/album.css" rel="stylesheet">
</head>

<body>
    <header>
        <div class="collapse bg-dark" id="navbarHeader">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4" style="float: right !important;">
                        <h4 class="text-white">About</h4>
                        <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
                    </div>
                    <div class="col-sm-4 offset-md-1 py-4">
                        <h4 class="text-white">Contact</h4>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white">Follow on Twitter</a></li>
                            <li><a href="#" class="text-white">Like on Facebook</a></li>
                            <li><a href="#" class="text-white">Email me</a></li>
                            <li><input type="checkbox" checked data-toggle="toggle"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container d-flex justify-content-between">
                <a href="MainPage.php" class="navbar-brand d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2" viewBox="0 0 24 24" focusable="false">
                        <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
                        <circle cx="12" cy="13" r="4" /></svg>
                    <strong> Album </strong>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </header>

    <main role="main">

        <section class="jumbotron text-center">
            <div class="container">
                <h1>Register</h1>
                <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
                <p>
                    <input id="toggle-event" type="checkbox" data-toggle="toggle" data-off="ENGLISH" data-on="العربية" style="font-weight: bolder">

                    <script>
                        $(function() {
                            $('#toggle-event').change(function() {
                                var myVar = setInterval(myTimer, 1500);

                                function myTimer() {
                                    window.location.href = 'Register_AR.php';
                                }
                            })
                        })
                    </script>
                </p>

            </div>
        </section>

        <div class="album py-5 bg-light ">
            <div class="container d-flex justify-content-center">

                <!-- Form English -->
                <div class="row d-flex justify-content-center">
                    <div class="col-md-10">
                        <form action="information.php" method="POST">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Email</label>
                                    <input type="email" class="form-control" id="regEmail" name="regEmail" placeholder="test@mail.com">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Username</label>
                                    <input type="text" class="form-control" id="regUsername" name="regUsername" placeholder="User_123">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Password</label>
                                    <input type="password" class="form-control" id="regPassword" name="regPassword" placeholder="Password" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Confirm Password</label>
                                    <input type="password" class="form-control" id="regConfirmPassword" name="regConfirmPassword" placeholder="Confirm Password" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Address</label>
                                <input type="text" class="form-control" id="regAddress" name="regAddress" placeholder="1234 Taibah St">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">Address 2</label>
                                <input type="text" class="form-control" id="regAddress2" name="regAddress2" placeholder="Apt, House, Studio ...">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputCity">City</label>
                                    <input type="text" class="form-control" name="regCity" id="regCity" placeholder="Riyadh, Madinah, ..." />
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="regState">State</label>
                                    <select id="regState" class="form-control" name="regState">
                                        <option selected>Riyadh</option>
                                        <option>Madinah</option>
                                        <option>Makkah</option>
                                        <option>Tabuk</option>
                                        <option>Baha</option>
                                        <option>Eastern District</option>
                                        <option>Qassim</option>
                                        <option>Jizan</option>
                                        <option>Hael</option>
                                        <option>Aseer</option>
                                        <option>Najran</option>
                                        <option>Jouf</option>
                                        <option>Northern Borders</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="regZip">Zip</label>
                                    <input type="number" class="form-control" name="regZip" id="regZip" maxlength="5" placeholder="12345">
                                </div>
                            </div>
                            <div>
                                <label for="inputImage">Upload Image</label>
                                <br />
                                <input type="file" id="regImage" name="regImage" onchange="PreviewImage();">
                                <br />
                                <div class="container">
                                    <img id="imgUpload" class="img-thumbnail" src="#" alt="" />

                                    <script type="text/javascript">
                                        function PreviewImage() {
                                            var oFReader = new FileReader();
                                            oFReader.readAsDataURL(document.getElementById("regImage").files[0]);

                                            oFReader.onload = function(oFREvent) {
                                                document.getElementById("imgUpload").src = oFREvent.target.result;
                                            };
                                        };
                                    </script>
                                </div>
                            </div>
                            <br />

                            <fieldset class="form-group">
                                <div class="row">
                                    <legend class="col-form-label col-sm-3 pt-0">Gender</legend>
                                    <div class="col-sm-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="genderRadio" id="maleRadio" value="Male" checked>
                                            <label class="form-check-label" for="maleRadio" >Male</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="genderRadio" id="femaleRadio" value="Female">
                                            <label class="form-check-label" for="femaleRadio" >Female</label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <br />
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-10">
                                    <button type="submit" onclick="incUserID()" class="btn btn-primary col-md-10">Register</button>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                            <br />
                            <input id="userIDAR" name="userIDAR" type="text" value="0" class="form-control" style="text-align: center" />
                            <script>
                                function myFunction() {
                                    var number = 1000 + Math.floor(Math.random() * 9999);
                                    return number;
                                }
                                document.getElementById("userIDAR").value = myFunction();
                            </script>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <footer class="text-muted">
        <div class="container">
            <p class="float-right">
                <a href="#">Back to top</a>
            </p>
            <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
            <p>New to Bootstrap? <a href="https://getbootstrap.com/">Visit the homepage</a> or read our <a href="/docs/4.4/getting-started/introduction/">getting started guide</a>.</p>
        </div>
    </footer>
    <script src="bootstrap-4.4.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="bootstrap-4.4.1/site/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')
    </script>
    <script>
        var password = document.getElementById("regPassword"),
            confirm_password = document.getElementById("regConfirmPassword");

        function validatePassword() {
            if (password.value != confirm_password.value) {
                confirm_password.setCustomValidity("Passwords Don't Match");
            } else {
                confirm_password.setCustomValidity('');
            }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
    </script>
</body>

</html>