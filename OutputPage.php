<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">

    <title>Output Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <!-- Bootstrap core CSS -->
    <!-- <link href="bootstrap-4.4.1/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>


    <script>
        // Material Select Initialization
        $(document).ready(function() {
            $('.mdb-select').materialSelect();
        });
    </script>


    <style>
        .headLabel {
            font-size: 14px;
            font-weight: bolder;
        }

        body {
            background: lightblue url("body.jpg") no-repeat fixed center;
            background-size: cover;
        }
    </style>
</head>

<body>
    <div class="container">

        <div id="signupbox" style=" margin-top:100px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info">
                <?php
                $studentName = $_REQUEST['studentName'];
                $major = $_REQUEST['major'];
                $subject = $_REQUEST['subject'];
                $exam1 = $_REQUEST['exam1'];
                $exam2 = $_REQUEST['exam2'];
                $exam3 = $_REQUEST['exam3'];
                $grade = $exam1 + $exam2 + $exam3;

                if ($grade > 89) {
                    $grade = "A";
                } elseif ($grade > 79) {
                    $grade = "B";
                } elseif ($grade > 69) {
                    $grade = "C";
                } elseif ($grade > 59) {
                    $grade = "D";
                } else {
                    $grade = "F";
                }
                ?>
                <div class="panel-heading" style="text-align: center;">
                    <div class="panel-title" style="font-size: 24px; font-weight: bolder;">Grades Output</div>
                </div>
                <div class="panel-body">
                    <form action="inputpage.php" method="POST" class="form-horizontal">
                        <div style="margin-left: 100px;">
                            <div class="form-group">
                                <div class="form-group col-md-10">
                                    <label class="headLabel" for="studentName">Student Name</label>
                                    <input type="text" class="form-control" value="<?php echo $studentName ?>" id="studentName" name="studentName" disabled>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-group col-md-10">
                                    <label class="headLabel" for="major">Major</label>
                                    <input type="text" class="form-control" value="<?php echo $major ?>" id="major" name="major" disabled>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-group col-md-10">
                                    <label class="headLabel" for="subject">Subject</label>
                                    <input type="text" class="form-control" value="<?php echo $subject ?>" id="subject" name="subject" disabled>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-group col-md-10">
                                    <label class="headLabel" for="grades">Grade</label>
                                    <input type="text" class="form-control" value="<?php echo $grade ?>" id="major" name="major" disabled>
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="form-group col-md-12" style="margin-left: 0px;">
                            <input type="submit" name="sumitData" value="Back" style="width: 100%; padding: 10px; font-size: 18px; font-weight: bolder;" class="btn btn-primary btn btn-info" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="bootstrap-4.4.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="bootstrap-4.4.1/site/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')
    </script>
</body>

</html>