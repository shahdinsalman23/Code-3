<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'include/css.php';?>
    <title><?php echo isset($title) ? $title : 'Home';  ?></title>
</head>

<body>

    <header class="header-main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="nav-logo">
                        <img src="images/logo.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="header_nav">
                        <div class="nav-items">
                            <ul>
                                <li><a href="index.php">HOME</a></li>
                                <li><a href="#services">SERVICES</a></li>
                                <li><a href="">FIREARMS TRAINING</a></li>
                                <li><a href="">ABOUT US</a></li>
                                <li><a href="">CONTACT US</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="Header_btn">
                        <ul>
                            <li><a href="">SIGN UP</a></li>
                            <li><a href="">LOGIN</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- mobile nav begin -->

    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <ul>
            <li><a href="#">HOME</a></li>
            <li><a href="#">SERVICES</a></li>
            <li><a href="#">FIREARMS TRAINING</a></li>
            <li><a href="#">ABOUT US</a></li>
            <li><a href="#">CONTACT US</a></li>
        </ul>
        <div class="login_btn">
            <ul>
                <li><a href="">SIGN UP</a></li>
                <li><a href="">LOGIN</a></li>
            </ul>
        </div>
    </div>

    <div id="main" class="nav_btn">
        <button class="openbtn" onclick="openNav()">☰ Menu</button>
    </div>



    <script>
    function openNav() {
        document.getElementById("mySidebar").style.width = "300px";
        document.getElementById("main").style.marginLeft = "250px";
    }

    function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
    }
    </script>

</body>