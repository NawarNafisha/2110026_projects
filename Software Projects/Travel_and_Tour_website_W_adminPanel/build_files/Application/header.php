<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/style.css');?>">
    <link rel="stylesheet" href="<?= base_url('assets/media.css');?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>Travel Agency</title>
</head>

<body>


<header>
        <nav>
            <h4> NAWAR TRAVELS</h4>
            <ul id="menu_bx">
                <li><a href="<?= base_url('/');?>">Discover</a></li>
                <li><a href="#">Special Deals</a></li>
                <li><a href="#">About US</a></li>
                
             <!--   -->

             <?php
             if (empty($this->session->userdata('userdata')['name'])){
                 echo '
                <li class="li_btn"><a href="#" id="loginBtn">login</a></li>
                <li class="li_btn"><a href="#" id="signupBtn">Register</a></li>
                ';
             }
             else{
                echo '
                <li><a href=" '. base_url("/order").'">Bookings</a></li>
                <li><a href=" '. base_url("/dashboard").'">Dashboard</a></li> 
                <li><a href="#" id="userStatus">
                <i class="bi bi-person-check-fill" style="margin-right:5px;"></i> Hi :)  '
             
                . $this->session->userdata('userdata')['name'] .  
                '
                </a></li><li class="li_btn"><a href="#" id="logoutBtn">Logout</a></li>
              ';

             }
             
             ?>
            </ul>
            <i class="bi bi-three-dots"></i>
        </nav>