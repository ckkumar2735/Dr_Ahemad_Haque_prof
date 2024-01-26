<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">



<header>
    <nav class="headertop">
        <div class="container-fluid">
            <div class="row">
                <!-- <div class="col-md-2  logo_header ">
                    <div data-tilt class="drname pl-40 mt-4 ">
                        <img src="images/ah1_logo.jpg" width="30%" height="auto" alt="" class="img-fluid header_logo">
                    </div>
                </div> -->

                <div class="col-md-2 logo_header d-flex justify-content-center text-align-center">
                    <div class="image-container drname ">
                        <img src="images/logo_6.png" alt="Your Image" class="img-fluid header_logo  ">
                    </div>
                    <!-- <div class="metallic-image">
                        <img src="images/logo_4.png" alt="Metallic Image">
                    </div> -->
                </div>


                <div class="col-md-4 d-flex justify-content-center ">
                    <div class="socialicon social_header mt-2 d-flex justify-content-center ">
                        <a href="https://www.facebook.com/drahmedhaque" target="_blank" class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-facebook fa-stack-1x fa-inverse" aria-hidden="true"></i></a>
                        <a href="https://instagram.com/ahmedshaque1" target="_blank" class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-instagram  fa-stack-1x fa-inverse" aria-hidden="true"></i></a>
                        <a href="https://www.linkedin.com/in/dr-ahmed-haque-26a1a3194" target="_blank" class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-linkedin fa-stack-1x fa-inverse" aria-hidden="true"></i></a>
                        <a href="https://youtube.com/@drahmedhaque770" target="_blank" class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-youtube-play fa-stack-1x fa-inverse" aria-hidden="true"></i></a>
                    </div>
                </div>

                <div class="col-md-2 d-flex justify-content-center">
                    <div class="indianflag mt-4 text-align-center">
                        <img src="images/flag_of_India.png" width="50px" height="30px" alt="">
                    </div>
                </div>
                <div class="col-md-2 mt-3 d-flex justify-content-center">
                    <!-- <div class="language mt-4 pl-40 "> -->
                    <div class="dropdown mt-2">
                        <button class="dropdown-toggle">
                            <span class="globe-logo "> </span>
                            Language
                        </button>
                        <div class="dropdown-content">
                            <a href="#">English</a>
                            <a href="#">Afrikaans</a>
                            <a href="#">Arabic</a>
                            <a href="#">chinese</a>
                        </div>
                    </div>
                </div>
                <div class="mysidepanel_hover d-flex justify-content-center ">
                    <div id="mySidepanel" class="sidepanel bordess text-center  ">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                        <a href="about.php">
                            <h4>About</h4>
                        </a>
                        <a href="gallery.php">
                            <h4>Gallery</h4>
                        </a>
                        <a href="enquire.php">
                            <h4>Enquire Now</h4>
                        </a>
                        <a href="reachout.php">
                            <h4>Reach Out</h4>
                        </a>
                        <a href="content.php">
                            <h4>Click Me </h4>
                        </a>
                        <!-- <div class="nextbuttonnew1 ck_btn12">
                            <a href="content.php"><button class="button-85" role="button">Click Me</button></a>
                        </div> -->
                    </div>
                </div>
                <div class="col-md-2 text-align-end">
                    <div class="fabar mt-2 pb-2 text-center" class="openbtn" onclick="openNav()">
                        <i class="fa fa-bars fa-stack-2x" style="font-size:45px" ;aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<footer>



</footer>
<script>
    function openNav() {
        document.getElementById("mySidepanel").style.width = "300px";

    }

    function closeNav() {
        document.getElementById("mySidepanel").style.width = "0";
    }
</script>