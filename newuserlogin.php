<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Style/newuserlogin.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8 login-box">
                <div class="col-lg-12 login-key">
                   
                </div>
                <div class="col-lg-12 login-title">
                   NEW USER LOGIN
                </div>
    
                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        <form action='newuserlogin.php' method='post'>
                            <div class="form-group">
                              <label class="form-control-label">NAME</label>
                                <input type="text" name="n1" class="form-control">
                            </div>
                         
                         
                         
                            <div class="form-group">
                              <label class="form-control-label">USER NAME</label>
                                <input type="text" name="n2" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">PASSWORD</label>
                                <input type="password" name="n3" class="form-control" i>
                            </div>
                         
                         
                            <div class="form-group">
                              <label class="form-control-label">EMAIL ID</label>
                                <input type="text" name="n4"  class="form-control">
                            </div>
                            <div class="form-group">
                              <label class="form-control-label">PHONE NUMBER</label>
                                <input type="text" name="n5" class="form-control">
                            </div>
                         
    <div class="form-group">
                              <label class="form-control-label">ADDRESS</label>
                                <input type="text"  name="n6" class="form-control">
                            </div>  
    <div class="form-group">
                              <label class="form-control-label">CITY</label>
                                <input type="text" name="n7" class="form-control">
                            </div>        
    
                            <div class="col-lg-12 loginbttm">
                                <div class="col-lg-6 login-btm login-text">
                                    <!-- Error Message -->
                                </div>
                                <div class="col-lg-6 login-btm login-button">
                                    <button type="submit" name="submit" class="btn btn-outline-primary">LOGIN</button>
    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>
        </div>
        <?php
        $servername = "localhost";
        $user="root";
        $develop="prev";
        $password ="";
        // Create connection
        $conn = new mysqli($servername,$user,$password,$develop);
        
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        if (isset($_POST["submit"])){
        $name=$_POST['n1'];
        $user_name=$_POST['n2'];
        $password=$_POST['n3'];
        $email_id=$_POST['n4'];
        $phone_number=$_POST['n5'];
        $address=$_POST['n6'];
        $city=$_POST['n7'];
        $sql1=0;
        if(strlen($user_name)!=0)
           { $sql="insert into user_login values(' $name','$user_name','$password','$email_id','$phone_number','$address','$city')";
            $sql1=mysqli_query($conn,$sql);}
            if ($sql1){
        if(strlen($user_name)!=0)
        header("Location: http://localhost/Product%20Review%20System/index1.html");
        else
        {
            echo("***ENTER VALID CREDENTIALS***");
        }
        }
    }
        ?>
    
</body>
</html>