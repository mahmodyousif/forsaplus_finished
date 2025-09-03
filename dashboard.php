<!-- @format -->
<?php
session_start() ; 
require "connection.php" ; 
if(isset($_SESSION['user_id'])) {
    $id = $_SESSION['user_id'] ;
    $stmt = $con->prepare("SELECT * FROM users WHERE id = ?"); 
    $stmt->execute(array($id)) ; 
    $row = $stmt->fetch();
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Render All Element to Normally -->
    <link rel="stylesheet" href="css/normalize.css" />
    <!-- font Awesome Library -->
    <link rel="stylesheet" href="css/all.min.css" />
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
        href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,200;0,400;0,500;0,600;0,700;0,800;1,200&display=swap"
        rel="stylesheet" />
    <!-- the main file to css -->
    <link rel="stylesheet" href="css/Hamdan.css" />
    <title>Forsa Plus</title>
</head>
<body>
<!-- Start Header Section  -->
<div class="header">
    <div class="container">
        <div class="main-heading">
            <a href="#" class="logo">
                <img src="imgs/Group.png" alt="" />
                <h2>Forsa Plus</h2>
            </a>
            <ul class="links">
                <li>
                    <a href="#consolations">
                        <i class="fa fa-edit"></i>
                        <i class="fas fa-bag-shopping-check"></i>

                        Consolations</a>
                </li>
                <li>
                    <a href="#my-offers">
                        <span class="fa-hand-with-3-stars">
                            <i class="fas fa-hand-holding"></i>
                            <i class="fas fa-star s1"></i>
                            <i class="fas fa-star s2"></i>
                            <i class="fas fa-star s3"></i>
                        </span>
                        My Offers</a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-chevron-down"></i>

                        Other Links</a>
                    <div class="mega-menu">
                        <div class="image">
                            <img src="imgs/megamenu.png" alt="" />
                        </div>
                        <ul class="link">
                            <li>
                                <a href="#my-works"><i class="fa fa-shopping-bag"></i>

                                    My Works</a>
                            </li>
                            <li>
                                <a href="#profile"><i class="far fa-building fa-fw"></i>Personal Profile</a>
                            </li>
                            <li>
                                <a href="#Consultation-detail"><i class="fas fa-comment-dots"></i>
                                    Consultation detail</a>
                            </li>

                        </ul>
                        <ul class="link">
                            <li>
                                <a href="#contact"><i class="fa fa-phone"></i>Contact Us</a>
                            </li>
                            <li>
                                <a href="#messages"><i class="fas fa-envelope"></i>
                                    </i>messages</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
            <?php
            if(isset($_SESSION['fullname'])) {
                echo "<a href='logout.php'>logout</a>" ;
            } else {
                echo "<a href='login.php'>login</a>" ;
            }
            ?>
        </div>
    </div>
</div>
<div class="dashboard">
    <div class="container">
        <div class="title">
          <i class="fa fa-home"></i>
            <h3>Home</h3>
        </div>
        <h4>Control Panel</h4>
        <div class="control-panel">
            <div class="profile">
                <div class="con">
                    <img src="imgs/lana.png" alt="">
                    <div class="name"><?php echo $row['fullname']?></div>
                    <div class="edit">
                        <img src="imgs/Tuning Square 2.png" alt="">
                        <span>Edit Profile</span>
                    </div>
                </div>
                <div class="con">
                    <h4 class="message">
                        New Message
                    </h4>
                    <span>0</span>
                    <div class="foot">
                        <span>Outgoing messages 10</span>
                        <span>Incoming messages 7</span>
                    </div>
                </div>
                <div class="con">
                    <h4>My Works</h4>
                    <span>7</span>
                </div>

            </div>
            <div class="balances">
                <div class="balance">
                    <div class="witdhdraw">
                        <div class="lef">
                            <p>Withdrawable balance</p>
                            <span>$0.00</span>
                        </div>
                        <div class="total">
                            <p>Total balance</p>
                            <span>$125.50</span>
                        </div>
                    </div>
                    <div class="pending">
                        <div class="pending-left">
                            <span>Pending balance</span>
                            <span>$125.50$</span>
                        </div>
                        <div class="pending-right">
                            <span>Available balance</span>
                            <span>0.00$</span>
                        </div>
                    </div>
                </div>
                <div class="lates">
                    <h4>Latest consultations</h4>
                    <div class="box">
                        <p>How to improve website performance</p>
                        <div class="con">
                            <div class="name">
                                <imgs src="imgs/User Circle.svg" alt="">
                                <span>Ahmed Mousa</span>
                            </div>
                            <div class="name">
                                <img src="imgs/Clock Circle.png" alt="">
                                <span>15 minutes ago</span>
                            </div>
                            <div class="name">
                                <img src="imgs/Add Circle.svg" alt="">
                                <span>Add your offer</span>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <p>How to write a legal contract that complies with local laws</p>
                        <div class="con">
                            <div class="name">
                                <img src="imgs/User Circle.svg" alt="">
                                <span>Ahmed Mousa</span>
                            </div>
                            <div class="name">
                                <img src="imgs/Clock Circle.png" alt="">
                                <span>15 minutes ago</span>
                            </div>
                            <div class="name">
                                <img src="imgs/Add Circle.svg" alt="">
                                <span>Add your offer</span>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <p>Strategies for designing small spaces effectively</p>
                        <div class="con">
                            <div class="name">
                                <img src="imgs/User Circle.svg" alt="">
                                <span>Ahmed Mousa</span>
                            </div>
                            <div class="name">
                                <img src="imgs/Clock Circle.png" alt="">
                                <span>15 minutes ago</span>
                            </div>
                            <div class="name">
                                <img src="imgs/Add Circle.svg" alt="">
                                <span>Add your offer</span>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <p>The importance of establishing a strong brand identity in the market</p>
                        <div class="con">
                            <div class="name">
                                <img src="imgs/User Circle.svg" alt="">
                                <span>Ahmed Mousa</span>
                            </div>
                            <div class="name">
                                <img src="imgs/Clock Circle.png" alt="">
                                <span>15 minutes ago</span>
                            </div>
                            <div class="name">
                                <img src="imgs/Add Circle.svg" alt="">
                                <span>Add your offer</span>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <p>Strategies for designing small spaces effectively</p>
                        <div class="con">
                            <div class="name">
                                <img src="imgs/User Circle.svg" alt="">
                                <span>Ahmed Mousa</span>
                            </div>
                            <div class="name">
                                <img src="imgs/Clock Circle.png" alt="">
                                <span>15 minutes ago</span>
                            </div>
                            <div class="name">
                                <img src="imgs/Add Circle.svg" alt="">
                                <span>Add your offer</span>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <p>The importance of establishing a strong brand identity in the market</p>
                        <div class="con">
                            <div class="name">
                                <img src="imgs/User Circle.svg" alt="">
                                <span>Ahmed Mousa</span>
                            </div>
                            <div class="name">
                                <img src="imgs/Clock Circle.png" alt="">
                                <span>15 minutes ago</span>
                            </div>
                            <div class="name">
                               <img src="imgs/Add Circle.svg" alt="">
                                <span>Add your offer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>

</body>
<script src="js/main.js"></script>

</html>
