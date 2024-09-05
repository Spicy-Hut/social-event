<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
   <header>
        <nav id="header">
            <div>
                <img src="./img/1725361570918.jpg" alt="">
            </div>
            <ul id="header_ul">
                <li><a href="./intex.php">HOME</a></li>
                <li><a href="./Event.php">EVENT</a></li>
                <li><a href="Register.php">REGISTRATION</a></li>
                <li><a href="./store.php">STORE</a></li>
                <li><a href="student_rigister.php">CONTACT</a></li>
           </ul>
        </nav> 
         <div id="announcement" class="wrapper">ANNOUNCEMENT:REGISTRATIONS FOR CAMPUS SPORTS FOR SOCIAL CHANGE ACTIVE-OPEN FOR SELECTED TAMILNADU REGIONS</div> 
    </header>    
    <main id=container>
      
        <article class="m-5">
            <h6 class="PROVIDE_LOGIN " id="Login">PROVIDE LOGIN DETAILS</h6>
        </article>
        <article class="m-5">
             <form action="" method="">
            <p>COMPUSNAME :</p><input type="text" id="campusname" name="compusname">
            <p>PASSWORD :</p><input type="text" id="campuspassword" name="campuspassword">
            <button class="login_btn mt-5">LOGIN</button>
            </from>
        </article>
        <article>
        
        <article>
            <h6 class="PROVIDE_LOGIN">CAMPUS REGISTRATION</h6>
        </article>
        <article class="personal_detail m-5">
            <form action="insert.php" method="POST">
            <p>COMPUSNAME :</p><input type="text"  name="compusname">
            <p>COMPUS Password :</p><input type="password"  name="compuspass">
            <p>CAMPUS ADDRESS :</p><input type="text"  name="address">
            <p>CONTECT PERSON :</p><input type="text"  name="contect">
            <p>EMAIL ADDRESS :</p><input type="text"  name="email">
            <p>CAMPUS PHONE<br>NUMBER :</p><input type="number" name="number">
            <button class="login_btn mt-5" type="submit">SUBMIT</button>
           </from>
          
        </article>
    </main> 
<!-- php code inside -->
  
</body>
<footer id="footer_content">
    <div id="Navigate_content">
        <div class="cointainer d-flex justify-content-between">
        <div class="row">
        <ul>
            <li><a href="">HOME</a></li>
            <li><a href="">EVENT</a></li>
            <li><a href="">REGISTRATION</a></li>
            <li><a href="">MEDIA</a></li>
            <li><a href="">CONTACT</a></li>
        </ul>
        </div>
        <div class="row">
        <img src="./img/1725361570955.png" alt="CHAMPIONS OF SOCIAL CHANGE" width="140" height="140">
        </div>
        </div>
    </div>
    <div id="footer-banner">
        <p>POINEERS OF CAMPUS SPORTS DEVELOPMENT</p>
    </div>
    <div id="ending_session">

    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>