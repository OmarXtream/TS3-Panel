<body>
<div class="loader"></div>

<div class="wrapper">
    <div class="sidebar" data-background-color="black" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                  <i class="ti-crown"></i>  HoltersMC
                </a>
            </div>

            <ul class="nav">
<li <?php 
$filename = $_SERVER['PHP_SELF'];
$homename = 'index';

if(stristr($filename,$homename)){ echo 'class="active"'; }?>>
                    <a href="index.php">
                        <i class="ti-home"></i>
                        <p>الصفحة الرئيسية</p>
                    </a>
                </li>
<li <?php 
$filename = $_SERVER['PHP_SELF'];
$homename = 'features';

if(stristr($filename,$homename)){ echo 'class="active"'; }?>>
                    <a href="features.php">
                        <i class="ti-settings"></i> </i>
                        <p>الخصائص الشخصية</p>
                    </a>

                </li>
<li <?php 
$filename = $_SERVER['PHP_SELF'];
$homename = 'games';

if(stristr($filename,$homename)){ echo 'class="active"'; }?>>
                    <a href="games.php">
                        <i class="ti-star"></i>
                        <p>الألعاب المفضلة</p>
                    </a>
                </li>

<li <?php 
$filename = $_SERVER['PHP_SELF'];
$homename = 'Top';

if(stristr($filename,$homename)){ echo 'class="active"'; }?>>
                    <a href="Top.php">
                        <i class="ti-view-list-alt"></i>
                        <p>أفضل الأعضاء</p>
                    </a>
                </li>

<li <?php 
$filename = $_SERVER['PHP_SELF'];
$homename = 'Youtube';

if(stristr($filename,$homename)){ echo 'class="active"'; }?>>
                    <a href="Youtube.php">
                        <i class="ti-youtube"></i>
                        <p>عضوية اليوتيوبر</p>
                    </a>
                </li>

<li <?php 
$filename = $_SERVER['PHP_SELF'];
$homename = 'Room';

if(stristr($filename,$homename)){ echo 'class="active"'; }?>>
                    <a href="Room.php">
                        <i class="ti-lock"></i>
                        <p>غرفة خاصة</p>
                    </a>
                </li>

<li <?php 
$filename = $_SERVER['PHP_SELF'];
$homename2 = 'YT';

if(stristr($filename,$homename2)){ echo 'class="active"'; }?>>
                    <a href="YT.php">
                        <i class="ti-bar-chart"></i>
                        <p>افضل اليوتيوبر</p>
                    </a>
                </li>



            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">لوحة التيم سبيك الذكية</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-bell"></i>
                                    <p class="notification"></p>
									<p>الأخبار</p>
									<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">SooN</a></li>
                                <li><a href="#">SooN</a></li>
                              </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
