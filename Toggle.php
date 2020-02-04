<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>


    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <link href="bootstrap-4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">


    <link href="css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="js/bootstrap-toggle.min.js"></script>

    <!-- Sort DDL JQuery -->
    <!-- <script type="text/javascript" src="js/jquery.js"></script> -->

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

        /* hide all elements with a language class */
        .en,
        .ar {
            display: block;
        }

        /* show those elements that match their language class */
        .en:lang(en),
        .ar:lang(ar) {
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
                    <div class="col-sm-8 col-md-7 py-4">
                        <h4 class="text-white">About</h4>
                        <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
                    </div>
                    <div class="col-sm-4 offset-md-1 py-4">
                        <h4 class="text-white">Contact</h4>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white">Follow on Twitter</a></li>
                            <li><a href="#" class="text-white">Like on Facebook</a></li>
                            <li><a href="#" class="text-white">Email me</a></li>
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
                    <strong>Album</strong>
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
                    <input id="toggle-event" type="checkbox" data-toggle="toggle" data-off="ENGLISH" data-on="ARABIC">
                    <p id="console-event">Nothing!</p>
                    <script>
                        $(function() {
                            $('#toggle-event').change(function() {
                                $('#console-event').html('Toggle: ' + $(this).prop('checked'))
                            })
                        })
                    </script>
                </p>

            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container" style="padding-left: 160px;">
                <div class="row">
                    <div class="col-md-10">
                        <div class="row">
                            <label>User ID: <?php
                                            $userID = $_REQUEST['userIDAR'];
                                            echo $userID
                                            ?></label>
                        </div>

                        <div class="row">
                            <label>Email: <?php
                                            $regEmail = $_REQUEST['regEmail'];
                                            echo $regEmail
                                            ?>
                            </label>
                        </div>

                        <div class="row">
                            <label>Username: <?php
                                                $regUsername = $_REQUEST['regUsername'];
                                                echo $regUsername
                                                ?></label>
                        </div>

                        <div class="row">
                            <label>Password: <?php
                                                $regPassword = $_REQUEST['regPassword'];
                                                echo $regPassword
                                                ?></label>
                        </div>

                        <div class="row">
                            <label>Address: <?php
                                            $regAddress = $_REQUEST['regAddress'];
                                            echo $regAddress
                                            ?></label>
                        </div>

                        <div class="row">
                            <label>Address 2: <?php
                                                $regAddress2 = $_REQUEST['regAddress2'];
                                                echo $regAddress2
                                                ?></label>
                        </div>

                        <div class="row">
                            <label>City: <?php
                                            $regCity = $_REQUEST['regCity'];
                                            echo $regCity
                                            ?></label>
                        </div>

                        <div class="row">
                            <label>State: <?php
                                            $regState = $_REQUEST['regState'];
                                            echo $regState
                                            ?></label>
                        </div>

                        <div class="row">
                            <label>Zip: <?php
                                        $regZip = $_REQUEST['regZip'];
                                        echo $regZip
                                        ?></label>
                        </div>

                        <div class="row">
                            <label>Gender: <?php
                                            $genderRadio = $_REQUEST['genderRadio'];
                                            echo $genderRadio
                                            ?></label>
                        </div>


                        <div class="row">
                            <label>Image: <?php
                                            $regImage = $_REQUEST['regImage'];
                                            echo $regImage
                                            ?></label>
                        </div>
                        <img id="imgUpload" class="img-thumbnail" src="<?php
                                                                        $regImage = $_REQUEST['regImage'];
                                                                        echo $regImage
                                                                        ?>" alt="" />

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
    <!-- <script>
        function sortList() {
            var list, i, switching, b, shouldSwitch;
            list = document.getElementById("regState");
            switching = true;
            /* Make a loop that will continue until
            no switching has been done: */
            while (switching) {
                // start by saying: no switching is done:
                switching = false;
                b = list.getElementsByTagName("option");
                // Loop through all list-items:
                for (i = 0; i < (b.length - 1); i++) {
                    // start by saying there should be no switching:
                    shouldSwitch = false;
                    /* check if the next item should
                    switch place with the current item: */
                    if (b[i].innerHTML.toLowerCase() > b[i + 1].innerHTML.toLowerCase()) {
                        /* if next item is alphabetically
                        lower than current item, mark as a switch
                        and break the loop: */
                        shouldSwitch = true;
                        break;
                    }
                }
                if (shouldSwitch) {
                    /* If a switch has been marked, make the switch
                    and mark the switch as done: */
                    b[i].parentNode.insertBefore(b[i + 1], b[i]);
                    switching = true;
                }
            }
        }
        document.getElementById("regState").innerHTML = sortList();
    </script> -->

</body>

</html>