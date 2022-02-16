<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Josefin+Sans&family=Lobster&family=Roboto:wght@900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .nav_bar1 ul {
            list-style: none;
            overflow: hidden;
            background-color: #111;
            top: 0;
            width: 100%;
            font-size: 20px;
            font-family: 'Bebas Neue', cursive;
        }

        .nav_bar1 ul li {
            float: right;
        }

        .nav_bar1 ul li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .title p {
            font-size: 300%;
        }

        fieldset {
            width: 100vh;
        }

        .form-group {
            width: 50vh;
        }

        legend {
            font-size: 220%;
            font-family: 'Anton', sans-serif;
        }

        .no_account p {
            color: #111;
        }

        .copy {
            background-color: #111;
            color: white;
        }
    </style>
</head>

<body>
    <div class="nav_bar1">
        <ul>
            <li><a href="login.php">System</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Servicse</a></li>
            <li><a href="../index.php">Home</a></li>
            <li style="float: left;"><a href="#">School Management System</a></li>
        </ul>
    </div>
    <br><br><br>
    <center>
        <div class="login">
            <div class="title">
                <p>Welcome to the System</p>
            </div>
            <hr width="50%">
            <br><br><br>
            <table border="0">
                <tr>
                    <td>
                        <fieldset>

                            <table border="0">
                                <tr>
                                    <td>
                                        <form>
                                            <legend>Principal Login</legend>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Username</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Uesrname">

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            <div class="no_account">
                                                <p>Don't Have an account? <a href="#">Create one</a></p>
                                            </div>

                                        </form>
                                    </td>
                                    <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                                    <td></td>
                                    <td>
                                        <form>
                                            <legend>Class Teacher Login</legend>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Class</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Class">

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            <div class="no_account">
                                                <p>Don't Have an account? <a href="#">Create one</a></p>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                                <tr></tr>
                                <tr></tr>
                                <tr></tr>
                                <tr></tr>
                                <tr></tr>
                                <tr></tr>
                                <tr>
                                    <td colspan="4">
                                        <form>
                                            <legend>Subject Teacher Login</legend>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Class</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Class">

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Subject</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Subject">

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            <div class="no_account">
                                                <p>Don't Have an account? <a href="#">Create one</a></p>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </fieldset>
                    </td>
                </tr>
            </table>
        </div>
        <br><br><br><br><br>

        <div class="copy">
            Copyright &copy; || Jehankandy - 2022
        </div>
    </center>
</body>

</html>