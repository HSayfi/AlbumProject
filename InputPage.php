<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">

    <title>Input Page</title>
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
                <div class="panel-heading" style="text-align: center;">
                    <div class="panel-title" style="font-size: 24px; font-weight: bolder;">Grades Input</div>
                </div>
                <div class="panel-body">
                    <form action="outputpage.php" method="POST" class="form-horizontal">
                        <div style="margin-left: 100px;">
                            <div class="form-group">
                                <div class="form-group col-md-10">
                                    <label class="headLabel" for="studentName">Student Name</label>
                                    <input type="text" class="form-control" id="studentName" name="studentName" placeholder="Student Name" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-group col-md-10">
                                    <label class="headLabel" for="major">Major</label>
                                    <select id="major" class="form-control" name="major" required>
                                        <option value="" disabled selected>Choose Major ....</option>
                                        <option value="Software Engineer">Software Engineer</option>
                                        <option value="Network Engineer">Network Engineer</option>
                                        <option value="Science">Science</option>
                                        <option value="Mathmatecs">Mathmatecs</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-group col-md-10">
                                    <label class="headLabel" for="subject">Subject</label>
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-group col-md-10">
                                    <label class="headLabel" for="grades">Grades</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group col-md-10">
                                    <div class="form-row col-md-4">
                                        <label for="exam1">Exam 1</label>
                                        <input type="number" class="form-control" id="exam1" name="exam1" placeholder="Exam 1" min="0" max="20" required>
                                    </div>
                                    <div class="form-row col-md-4">
                                        <label for="exam2">Exam 2</label>
                                        <input type="number" class="form-control" id="exam2" name="exam2" placeholder="Exam 2" min="0" max="20" required>
                                    </div>
                                    <div class="form-row col-md-4">
                                        <label for="exam3">Final Exam 3</label>
                                        <input type="number" class="form-control" id="exam3" name="exam3" placeholder="Exam 3" min="0" max="60" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-12" style="margin-left: 0px;">
                            <input type="submit" name="sumitData" value="Submit" style="width: 100%; padding: 10px; font-size: 18px; font-weight: bolder;" class="btn btn-primary btn btn-info" />
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