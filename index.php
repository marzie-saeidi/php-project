<?php
session_start();
?><!DOCTYPE html>
<head>
  <title>index page</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    
    .container{
        width: 100%;
        text-align: center;
        background-color: black;
        margin-top: 20px;
       
    }
    table{
        border: 2px  solid saddlebrown;
        text-align: center;
        margin-left: 10px;

    }
    th{
       border: 1px solid black;
      text-align: center;
    }
    td{
      border: 1px solid black;
      text-align: left;
    }
    a{
      text-decoration: none;
      color: yellow;
      text-align: center;
    }
    h1,h2{
      text-align: center;
    }
    ul{
      display: flex;
      flex-direction: row;
      flex-wrap: wrap;

    }
    ul li{
       margin-left: 15px;
      list-style:none;
      color: yellow;
    }
  </style>
</head>
<body>
    <div class="container">
           
           <div class="header">
             <ul>
               <li><a href="signup.php">sign up</a></li>
               <li><a href="signin.php">sign in</a></li>
             </ul>
           </div>
          <h1 style="color: white">به سایت ایران مقاله خوش آمدید</h1>
          <h2 style="color: pink">اگر هنوز در سایت ما ثبت نام نکرده اید از طریق لینک  های بالا اقدام کنید</h2>
         
   </div>
</body>
</html>