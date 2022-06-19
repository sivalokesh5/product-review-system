
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
    $flag=0;
    $username=$_POST['p1'];
    $password1=$_POST['p2'];
    session_start();
    $_SESSION['username']=$username;
    $sql='select * from user_login';
    $sql1=mysqli_query($conn,$sql);
    if (mysqli_num_rows($sql1)>0){
        while($row=mysqli_fetch_assoc($sql1)){
            if ($username==$row['username'] && $password1==$row['password'] && strlen($username)!=0){
                $flag=1;
                echo '<!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
                    <title>Product Review System|Home Page</title>
                    <link rel="stylesheet" href="Style/style1.css">
                </head>
                <body>
                    <header>
                        <h1>PRODUCT REVIEW MANAGEMENT </h1>
                    </header>
                    <div class="menu_bar">
                        <ul>
                           <li><a href="index1.html">Home</a></li> 
                            <li><a href="#">About us <i class="fas fa-caret-down"></i></a>
                                <div class="dropdown_menu">
                                    <ul>
                                        <li><a href="ourteam.html">Our Team</a></li>
                                        <li><a href="ourvision.html">Our Vision</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">Search Products <i class="fas fa-caret-down"></i></a>
                                <div class="dropdown_menu">
                                    <ul>
                                        <li><a href="spMobiles.html">Mobiles</a></li>
                                        <li><a href="spLaptops.html">Laptops</a></li>
                                        <li><a href="spAppliances.html">Appliances</a></li>
                                        <li><a href="spWatches.html">Watches</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <main>
                        <img src="Style/review.jpg" alt="image"  width="100%">
                
                        <br><br><br>
                        <main class="gallery">  
                            &nbsp; &nbsp;&nbsp;  <a href="spMobiles.html"><img src="Style/mobiles.jpg"></a> &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; 
                            <a href="spLaptops.html"> <img src="Style/laptops.jpg"></a> &nbsp;&nbsp; &nbsp;&nbsp; 
                            <a href="spAppliances.html"><img src="Style/appliances.jpg"></a>  &nbsp;&nbsp; &nbsp;&nbsp;
                            <a href="spWatches.html"><img src="Style/watches.png"></a>  </main>
                        <div class=footer>
                            <a href="ourteam.html" target="_blank">About Us</a>&nbsp;&nbsp;
                            <a href="#"
                            target="_blank">FAQ</a>&nbsp;&nbsp;
                            <a href="#"
                            target="_blank">Contact Us</a>
                        </div>
                    </main>
                
                
                
                </body>
                </html>'
    
    ;}}}		
    if($flag==0)
    {
        echo "Enter Valid Username and Password";
    }	
}
    mysqli_close($conn);
?>
