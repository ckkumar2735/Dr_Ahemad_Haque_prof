<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="description" content=" ">
    <meta name="keywords" content=" ">
    <meta name="author" content=" ">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta http-equiv="refresh" content="30"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enquire</title>
    <?php include 'filelink.php'; ?>
</head>

<body class="contentcolor phoneackthirdenquire" onmousedown="return true" onselectstart="return false">
    <!-- ============= -->
    <div class="buffer-m">
        <div></div>
    </div>
    <!-- ============= -->
    <div class="container-fluid mt-3 stylebackne">
        <div class="row">
            <div class="col-md-3 text-center">
                <div class="cnttext mt-4 mb-4">
                    <a href="index.php">
                        <h2><i class="fa fa-briefcase fa-stack-2x" aria-hidden="true"></i></h2>
                    </a>
                </div>
            </div>
            <div class="col-md-4  phoneresponsive">
                <div class="discover text-center d-flex align-item-center justify-content-center ">
                    <div class="counternu my-4 ">
                        <span class="firstco">1</span><span>2</span>
                    </div>
                </div>
                <div class="stages text-center d-flex align-item-center justify-content-center">
                    <span> ENQUIRE </span><span> ASSOCIATION </span>
                </div>
            </div>
            <div class="col-md-1 mt-4 d-flex align-item-center justify-content-center">
            <div class="dropdown ">
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
            <div class="col-md-2  ">
                <div class="indianflag text-center mt-4 mb-4">
                    <img src="images/flag_of_India.png" width="50px" height="30px" alt="">
                </div>
            </div>
            <div class="col-md-2 ">
                <div class="buttoniconnew1 mt-4 mb-4">
                    <a href="#">
                        <h2><u> 09</u> <span style="font-weight:200;"> /</span> <sup style="font-weight:200;">01</sup>
                        </h2>
                    </a>
                </div>
            </div>
           
            <div class="col-md-12 ">
                <div class="contcoloren phonethirdcountenquire my-3 px-5 ">
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="rdcontentnewin phonesecrdrdcontenquire my-5 ">
                                <!-- <div class="row">
                                    <div class="col-md-12"> -->
                                <div class="aboutacknew formsection">
                                    <div class="socialicon mt-4 text-center">
                                    <!-- <div class="socialicon mt-4 "> -->
                                        <h3 class="animate-charcter ac_enquire ">Consult with me</h3>
                                    </div>
                                    <hr>
                                    <div>
                                        <div class="row">
                                            <!-- <div class="col-md-1 col-xxl-1"></div> -->
                                            <div class="col-md-7 box-11  ">
                                                <div class="enquire">
                                                    <div class="inquriforms">
                                                        <div class="container   ">
                                                            <form onsubmit="sendmail(event)">
                                                                <div class="row ">
                                                                    <div class="col-md-6  mt-5">
                                                                        <p for="fname">Name</p>
                                                                        <div class="text-center inputtexte">
                                                                            <input onfocus="onChangeInput('name')" style="padding:6px 12px;" type="text" id="fname" name="name" placeholder="Enter your name...">
                                                                        </div>
                                                                        <span id="nameError" class="mError"></span>
                                                                    </div>
                                                                    <div class="col-md-6  mt-5  ">
                                                                        <p for="fname">Type of consulting</p> 
                                                                        <div class="text-center inputtexte">
                                                                            <?php include 'nested-dropdown.php'; ?>
                                                                        </div>
                                                                        <span id="consultingError" class="mError"></span>
                                                                    </div>
                                                                    <div class="col-md-6  mt-3">
                                                                        <p for="fname">Contact Number</p>
                                                                        <div class="text-center inputtexte">
                                                                            <input onfocus="onChangeInput('contact')" type="number" name="contact" class="form-control form-custom" size="25" maxlength="14" minlength="10" placeholder="Enter your contact number...">

                                                                        </div> <span id="contactError" class="mError"></span>
                                                                    </div>
                                                                    <div class="col-md-6  mt-3">
                                                                        <p for="email">Email</p>
                                                                        <div class="text-center inputtexte">
                                                                            <input onfocus="onChangeInput('email')" style="padding:6px 12px;" type="mail" id="email" name="email" placeholder="Enter your email...">

                                                                        </div><span id="emailError" class="mError"></span>
                                                                    </div>
                                                                    <div class="col-md-6   mt-3">
                                                                        <p for="address">Address</p>
                                                                        <div class="text-center inputtexte">
                                                                            <input onfocus="onChangeInput('address')" type="text" style="padding:6px 12px;" id="address" name="address" placeholder="Enter your address...">

                                                                        </div><span id="addressError" class="mError"></span>
                                                                    </div>
                                                                    <div class="col-md-6  mt-3">
                                                                        <p for="fname">Country</p>
                                                                        <div class="text-center inputtexte">
                                                                            <select id="country" name="country" onfocus="onChangeInput('country')" class="form-control">
                                                                                <option value="" selected disabled>Select your country</option>
                                                                                <?php include 'countryoption.php'; ?>
                                                                            </select>
                                                                        </div><span id="countryError" class="mError"></span>
                                                                    </div>
                                                                    <div class="col-md-12 ">
                                                                        <div class="text-center submit-btn-m my-5">
                                                                            <input type="submit" value="Submit" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5  ">
                                                <div class="enquireimages">
                                                    <img src="images/enquirenew.png" width="100%" height="100%" alt="" oncontextmenu="return false"/>
                                                </div>
                                            </div>
                                            <!-- <div class="col-md-1 col-xxl-1"></div> -->
                                            <div class="nextbuttonnew">
                                                <a href="associated.php"><marquee direction="right"></i><i class="fa fa-chevron-right" aria-hidden="true"></i><i class="fa fa-chevron-right" aria-hidden="true"></i></marquee></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>