<?php 
if(session_status()!=PHP_SESSION_ACTIVE) session_start();
include_once 'connect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Registration</title>
</head>
<body>


<div class="container">
    <div class="row">
        <div class="col-2"> 
            
        </div>
        <div class="col-8" style="margin-top: 2rem; margin-bottom: 2rem;"> 
            <div class="card shadows">
                <div class="card-body">
                    <h5 class="card-title text-center">
                        REGISTRATION!
                    </h5>
                    <form action="insert/insert_register.php" method="post">
                    <div class="form-group">
                            Name
                        <input type="text" name="name" class="form-control box" placeholder="Enter Name">
                            Contact
                        <input type="text" name="contact" class="form-control" placeholder="Enter Contact Number">
                        <small class="form-text text-muted box">
                            Enter Valid Contact Number (Starts from 09 and is 11 Digits)
                        </small>
                            Address
                        <input type="text" name="address" class="form-control box" placeholder="Enter Address">
                            School
                        <input type="text" name="school" class="form-control box" placeholder="Enter School">
                            Course
                        <input type="text" name="course" class="form-control box" placeholder="Enter Course">
                            Username
                        <input type="text" name="username" class="form-control" placeholder="Enter Email" required>
                        <small class="form-text text-muted box">
                            Enter Valid Email
                        </small>
                            Password
                        <input type="password" name="password" class="form-control box" placeholder="Enter Password" required>
                        <div class="btn-group btn-block">
                            <button class="btn btn-danger " onclick="history.back()" style="margin: 5px">
                                Back
                            </button>
                            <button class="btn btn-dark" style="margin: 5px;">
                                Submit
                            </button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-2"> 
            
        </div>
    </div>
       
</div>

    

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>