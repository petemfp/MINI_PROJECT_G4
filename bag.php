<?php 
    session_start();

    if (!isset($_SESSION['email'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['email']);
        header('location: login.php');
    }

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="http://127.0.0.1/Mini_Project_G4/MyStyles.css">
    <link rel="stylesheet" href="http://127.0.0.1/Mini_Project_G4/bootstrap-5.0.2-dist/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="http://127.0.0.1/Mini_Project_G4/bootstrap-5.0.2-dist/css/bootstrap.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" />
    <title>ถุง-Apple (TH)</title>
    <link rel="icon" href="http://127.0.0.1/Mini_Project_G4/images/icons/apple.png" type="image/icon type">

</head>
<header>
    <div class="my-container">
        <nav class="my-nav">
            <ul class="my-nav-list my-nav-list-mobile">
                <li class="my-nav-item">
                    <div class="mobile-menu">
                        <span class="line line-top"></span>
                        <span class="line line-bottom"></span>
                    </div>
                </li>
                <li class="my-nav-item">
                    <a href="index.php" class="my-nav-link my-nav-link-apple"></a>
                </li>
                <li class="my-nav-item">
                    <a href="#" class="my-nav-link my-nav-link-bag"></a>
                </li>
            </ul>
            <!-- /.nav-list nav-list-mobile -->
            <ul class="my-nav-list my-nav-list-larger">
                <li class="my-nav-item my-nav-item-hidden">
                    <a href="index.php" class="my-nav-link my-nav-link-apple"></a>
                </li>
                <li class="my-nav-item">
                    <a href="store.php" class="my-nav-link">Store</a>
                </li>
                <li class="my-nav-item">
                    <a href="#" class="my-nav-link">Mac</a>
                </li>
                <li class="my-nav-item">
                    <a href="#" class="my-nav-link">iPad</a>
                </li>
                <li class="my-nav-item">
                    <a href="#" class="my-nav-link">iPhone</a>
                </li>
                <li class="my-nav-item">
                    <a href="#" class="my-nav-link">Watch</a>
                </li>
                <li class="my-nav-item">
                    <a href="TV.html" class="my-nav-link">TV</a>
                </li>
                <li class="my-nav-item">
                    <a href="#" class="my-nav-link">Music</a>
                </li>
                <li class="my-nav-item">
                    <a href="#" class="my-nav-link">Support</a>
                </li>

                <li class="my-nav-item">
                    <a href="#" class="my-nav-link-search"></a>
                </li>
                <li class="my-nav-item my-nav-item-hidden">
                    <a href="#" class="my-nav-link my-nav-link-bag"></a>
                </li>
                <li class="my-nav-item ">
                    <!--logged information-->
                    <?php if (isset($_SESSION['email'])) : ?>
                        <p class="fs-4 fw-bold text-danger"> <a href="index.php?logout='1'" style="padding-top:5px;color:red;">logout</a> </p>
                    <?php endif ?>
                </li>
            </ul>
            <!-- /.nav-list nav-list-larger -->
        </nav>
    </div>
</header>

<body>

    <div class="container-fluid my-5"> <br> <br>
        <div class="my-container ">

            <div class="row justify-content-md-left">

                <div class="container">
                    <div class="row">
                        <div class="col">
                            <p class="text-center fw-bold display-3 mb-5">
                                นี่คือรายการสินค้าที่อยู่ในถุงของคุณ&nbsp;<span>฿38,900.00</span> </p>
                            <p class="text-center fs-2 display-3 mb-5">รับบริการจัดส่งฟรีและส่งคืนฟรีทุกคำสั่งซื้อ</p>


                            <div class="d-grid gap-2 col-6 mx-auto" style="width: 30rem; height: 1rem;">
                                <button class="btn btn-primary btn-lg" type="button">
                                    <p class="fs-4  fw-bold  ">
                                        ชำระเงิน
                                    </p>
                                </button>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>


    </div>





    <br><br><br>
    <div class="my-container ">
        <p class="underline"></p>
        <br><br>
        <div class="row">
            <div class="col-sm-auto">
                <div class="card  border-0" style="width: 20rem;">
                    <img id="iphone13-shop" src="http://127.0.0.1/Mini_Project_G4/images/shop/iphone-13-pro-family-hero.png" alt=""
                        class="card-img-top">

                </div>
            </div>


            <div class="col-sm-9">
                <div class="card  border-0">
                    <div class="card-body">



                        <div class="card border-0 ">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col col-md-auto">

                                        <p class="text-left display-1 fw-bold fs-2 mb-2 textcard "> iPhone 13 Pro
                                            ความจุ 128GB สีเซียร์ร่าบลู
                                        </p>
                                    </div>


                                    <div class="col ">
                                        <p class="fs-5 display-1 fw-bold fs-2 text-end mb-2 textcard">
                                            ฿38,900.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <p class="underline"></p>


                        <p class="text-left fs-3 fw-bold ">
                            <img src="http://127.0.0.1/Mini_Project_G4/images/icons/apple-black-logo.png" style="width: 2rem;padding-bottom: 7px;">
                            <span>เพิ่ม AppleCare+ สำหรับ iPhone 13 Pro ในราคา ฿8,290.00</span>
                        </p>

                        <p class="text-left fs-4 text-muted">
                            <span>&nbsp;&bull;&nbsp;สิทธิพิเศษในการติดต่อกับผู้เชี่ยวชาญของ Apple</span>

                        </p>
                        <p class="text-left fs-4 text-muted">
                            <span>&nbsp;&bull;&nbsp;บริการซ่อมที่ผ่านการรับรองจาก Apple ซึ่งใช้อะไหล่แท้ของ Apple</span>
                        </p>
                        <p class="text-left fs-4 text-muted">
                            <span>&nbsp;&bull;&nbsp;ความคุ้มครองสำหรับ iPhone รวมถึงแบตเตอรี่</span>
                        </p>

                        <p class="text-left fs-4 text-muted">
                            <span>&nbsp;&bull;&nbsp;ความคุ้มครองด้านความเสียหายจากอุบัติเหตุ</span>
                        </p>

                        <p class="text-left fs-4 cta-link">
                            <link>&nbsp;&nbsp;ดูเพิ่มเติม</link>
                        </p>
                        <p class="text-rigth fs-4 cta-link">
                            <link>&nbsp;&nbsp;&nbsp;&nbsp;เพิ่ม</link>
                        </p>
                        <p></p>
                        <p class="underline"></p>
                        <br>
                        <p class="text-left fs-3 fw-bold ">
                            <img src="http://127.0.0.1/Mini_Project_G4/images/icons/gift-card.png" style="width: 2rem;padding-bottom: 7px;">
                            <span>เพิ่มข้อความแนบของขวัญหรือห่อของขวัญ</span>
                        </p>
                        <p class="text-rigth fs-4 cta-link">
                            <link>เพิ่ม</link>
                        </p>
                        <p></p>

                        <p class="underline"></p>

                        <p class="text-left fs-3 fw-bold ">

                            <span> ดูว่าคุณจะได้รับสินค้ารายการนี้เร็วที่สุดเมื่อไหร่</span>
                        </p>


                        <div class="form-group ">
                            <p class="text-left fs-4 text-muted fw-bold">
                                <span>PostCode</span>
                            </p>

                            <input type="" class="form-group mx-xs-3 mb-3 fs-4" style="width:25rem;" id=""
                                placeholder="กรอกรหัสไปรษณีย์">
                        </div>
                        <button type="submit" class="btn btn btn-outline-primary mb-2 fs-4">Confirm identity</button>

                        <p></p>
                        <br>
                   

                        <br>
                        <div class="row  text-start  ">
                            <div class="col box">

                                <img src="http://127.0.0.1/Mini_Project_G4/images/icons/box.png" style="width: 3rem;">
                                <p class="fs-5 display-6 mb-2 textcard text-muted">&nbsp;&nbsp;มีในสต๊อคพร้อมจัดส่ง</p>
                            </div>
                            <div class="col col-md-auto">
                                &nbsp;
                            </div>
                            <div class="col box">
                                <img src="http://127.0.0.1/Mini_Project_G4/images/icons/return.png" style="width: 3rem;">
                                <p class="fs-5 display-6 mb-2 textcard text-muted">&nbsp;&nbsp;รับด้วยตัวเองที่ Apple
                                    Store ใกล้คุณ</p>
                            </div>
                        </div>
                        <br><br> <br>
                      






                    </div>
                </div>

            </div>
          <br> 
            <p class="underline"></p>
            
            <div class="my-container ">



                <div class="row">
                    <div class="col-sm-auto">
                        <div class="card  border-0" style="width: 20rem;">


                        </div>
                    </div>


                    <div class="col-sm-9">
                        <div class="card  border-0">
                            <div class="card-body">



                                <div class="card border-0 ">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col ">

                                                <p class="text-left  display-1 text-muted fs-2 mb-2 "> ยอดรวม
                                                </p>
                                            </div>

                                            <div class="col ">
                                                <p class="fs-1 display-1 text-mutedfs-2 text-end mb-2 "> ฿38,900.00</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col ">

                                                <p class="text-left fs-2 display-1 text-muted  mb-2 "> ยอดจัดส่ง
                                                </p>
                                            </div>

                                            <div class="col ">
                                                <p class="fs-1 display-1 text-mutedfs-2 text-end mb-2 "> ฟรี</p>
                                            </div>
                                        </div>

                                        <p class="underline" style="padding-bottom: 3rem;"></p>

                                        <div class="row">
                                            <div class="col ">

                                                <p class="text-left fs-1 display-1 fw-bold  mb-2 "> ยอดชำระเงินของคุณ
                                                </p>
                                            </div>

                                            <div class="col ">
                                                <p class="fs-1 display-1 text-mutedfs-2 1 fw-bold text-end mb-2 "> ฿38,900.00</p>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col ">

                                              
                                            </div>

                                            <div class="col ">
                                                <p class="fs-5 display-1 text-mutedfs-2 text-end mb-2 "> รวม VAT จำนวน ฿2,544.86</p>
                                            </div>

                                           
                                        </div>
                                        <div class="row">
                                            <div class="col ">

                                              
                                            </div>

                                            <div class="col text-end " style="padding-top: 1rem;">
                                                <button type="submit" class="btn btn-primary mb-2 fs-4 btn-rounded " style="width: 40rem; height: 7rem;">Confirm identity</button>
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












    <script src="main.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous"></script>









</body>

</html>