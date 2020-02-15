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

    <script>
    </script>
</head>

<body>
    <div class="container">

        <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading" style="text-align: center;">
                    <div class="panel-title">Grades Input</div>
                </div>
                <div class="panel-body">
                    <form method="post" action=".">
                        <input type='hidden' name='csrfmiddlewaretoken' value='XFe2rTYl9WOpV8U6X5CfbIuOZOELJ97S' />


                        <form class="form-horizontal" method="post">


                            <div id="div_id_name" class="form-group required">
                                <label for="id_name" class="control-label col-md-4  requiredField">Student Name<span class="asteriskField">*</span> </label>
                                <div class="controls col-md-8 ">
                                    <input class="input-md textinput textInput form-control" id="id_name" name="name" placeholder="Your Frist name and Last name" style="margin-bottom: 10px" type="text" />
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="regState">Grades</label>
                                <select class="mdb-select md-form">
                                    <option value="" disabled selected>Choose your option</option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                </select>
                            </div>
                            <div id="div_id_company" class="form-group required">
                                <label for="id_company" class="control-label col-md-4  requiredField">Subject<span class="asteriskField">*</span> </label>
                                <div class="controls col-md-8 ">
                                    <input class="input-md textinput textInput form-control" id="id_company" name="company" placeholder="your company name" style="margin-bottom: 10px" type="text" />
                                </div>
                            </div>
                            <div id="div_id_catagory" class="form-group required">
                                <label for="id_catagory" class="control-label col-md-4  requiredField">Grade 1<span class="asteriskField">*</span> </label>
                                <div class="controls col-md-8 ">
                                    <input class="input-md textinput textInput form-control" id="id_catagory" name="catagory" placeholder="skills catagory" style="margin-bottom: 10px" type="text" />
                                </div>
                            </div>
                            <div id="div_id_number" class="form-group required">
                                <label for="id_number" class="control-label col-md-4  requiredField">Grade 2<span class="asteriskField">*</span> </label>
                                <div class="controls col-md-8 ">
                                    <input class="input-md textinput textInput form-control" id="id_number" name="number" placeholder="provide your number" style="margin-bottom: 10px" type="text" />
                                </div>
                            </div>
                            <div id="div_id_location" class="form-group required">
                                <label for="id_location" class="control-label col-md-4  requiredField">Grade 3<span class="asteriskField">*</span> </label>
                                <div class="controls col-md-8 ">
                                    <input class="input-md textinput textInput form-control" id="id_location" name="location" placeholder="Your Pincode and City" style="margin-bottom: 10px" type="text" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="controls col-md-8" style="width: 100%;">
                                    <br />
                                    <input type="submit" name="sumitData" value="Submit" style="width: 100%;" class="btn btn-primary btn btn-info" />
                                </div>
                            </div>

                        </form>

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>