<!doctype html>
<html lang="ar">

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
    <link href="bootstrap-rtl-master/dist/css/bootstrap-rtl.min.css" rel="stylesheet">



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

        label {
            float: right;
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
                        <h4 class="text-white" style="float: right !important;">عنا</h4>
                        <br /><br />
                        <p class="text-muted" style="text-align: right">بلاب بلاب بلاب بلاب بلاب بلاب بلاب بلاب بلاب بلاب بلاب بلاب بلاب بلاب بلاب بلاب بلاب بلاب بلاب بلاب بلاب بلاب بلاب بلاب بلاب بلاب بلاب بلاب بلاب بلاب </p>
                    </div>
                    <div class="col-sm-4 offset-md-1 py-4">
                        <h4 class="text-white">تواصل معنا</h4>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white">تويتر</a></li>
                            <li><a href="#" class="text-white">فيس بوك</a></li>
                            <li><a href="#" class="text-white">ايميل</a></li>
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
                    <strong> &nbsp; ألبوم </strong>
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
                <h1>تسجيل</h1>
                <p class="lead text-muted">بوتستراب Bootstrap هي إحدى أشهر المكتبات التي يستخدمها مبرمجو المواقع الإلكترونية على الإطلاق، حيث أن تطوير المواقع بشكله الحديث لم يعد يحتاج لإعادة كتابة كل حركةٍ وكل عنصرٍ من صفحات الموقع، وأصبح تنظيم الصفحة أمرًا بسيطًا بمساعدة بعض المكتبات الخارجية الشهيرة وعلى رأسها Bootstrap.</p>
                <p>
                    <input id="toggle-event" type="checkbox" data-toggle="toggle" data-on="ENGLISH" data-off="العربية" style="font-weight: bolder">

                    <script>
                        $(function() {
                            $('#toggle-event').change(function() {
                                var myVar = setInterval(myTimer, 1500);

                                function myTimer() {
                                    window.location.href = 'Register.php';
                                }
                            })
                        })
                    </script>
                </p>

            </div>
        </section>

        <div class="album py-5 bg-light ">
            <div class="container d-flex justify-content-center">

                
            </div>
        </div>

    </main>

    <footer class="text-muted">
        <div class="container">
            <p class="float-right">
                <a href="#">العودة للبداية</a>
            </p>
            <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
            <p>New to Bootstrap? <a href="https://getbootstrap.com/">Visit the homepage</a> or read our <a href="/docs/4.4/getting-started/introduction/">getting started guide</a>.</p>
        </div>
    </footer>
    <script src="bootstrap-4.4.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="bootstrap-4.4.1/site/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')
    </script>

</body>

</html>