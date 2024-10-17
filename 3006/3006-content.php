<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-3006">
    <div class="hero">
        <div class="container">
            <div class="content">
                <div class="content1">
                    <h1>Get It Fixed Fast with
                        MobiCare’s Expert
                        Technicians.</h1>
                </div>
                <div class="content2">
                    <p>Ultrices quam mattis posuere porttitor tellus rhoncus tristique.
                        Primis aliquam dignissim interdum vel suscipit sodales.</p>
                </div>
                <div class="content3">
                    <span class="button">
                        <a href="#" class="btn">BOOK AN APPOINTMENT</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-logo">
                        <img src="images/Logo_mobicare_w.jpg" alt="">
                    </div>
                    <p class="text-left">Need fast and reliable phone repair? Contact MobiCare today and get your device
                        back in perfect condition</p>
                    <div class="row">
                        <div class="col-md-2">
                            <span class="call"><i class="fa fa-volume-control-phone"></i></span>

                        </div>
                        <div class="col-md-10 hotline">

                            <p>Customer Support</p>
                            <p>(888) 4000-2424</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 checkcolum1 ">
                    <h3> Services</h3>
                    <span>
                        <i class="fa-regular fa-circle-check"></i>
                        Screen Repair
                    </span> <br>
                    <span>
                        <i class="fa-regular fa-circle-check "></i>
                        Screen Repair
                    </span><br>
                    <span>
                        <i class="fa-regular fa-circle-check"></i>
                        Screen Repair
                    </span><br>
                    <span>
                        <i class="fa-regular fa-circle-check"></i>
                        Screen Repair
                    </span><br>
                    <span>
                        <i class="fa-regular fa-circle-check"></i>
                        Screen Repair
                    </span><br>
                    <span>
                        <i class="fa-regular fa-circle-check"></i>
                        Screen Repair
                    </span>

                </div>
                <div class="col-md-2 checkcolum2">
                    <h3> Company</h3>
                    <span>
                        <i class="fa-regular fa-circle-check"></i>
                        Screen Repair
                    </span> <br>
                    <span>
                        <i class="fa-regular fa-circle-check"></i>
                        Screen Repair
                    </span><br>
                    <span>
                        <i class="fa-regular fa-circle-check"></i>
                        Screen Repair
                    </span><br>
                    <span>
                        <i class="fa-regular fa-circle-check"></i>
                        Screen Repair
                    </span><br>
                    <span>
                        <i class="fa-regular fa-circle-check"></i>
                        Screen Repair
                    </span><br>
                </div>
                <div class="col-md-4 singup">
                    <h3>Signup our newsletter to get update information, news, insight or promotions.</h3>
                    <div class="inputmail">

                    <input type="" class="input1" placeholder="name"> <input type="text" class="input2"placeholder="email">
                    </div>
                    <button type="button " class="btn-up"> <i class="fa-regular fa-envelope"></i>Sign Up</button>
                </div>
                
            </div>
        </div>

        <div class="line"></div>
        <div class="container">
            <div class="copyright">
                <div class="text-left">
                    <div class="col-md-12 copyright_p">
                        <p>Copyright© 2024 Mobicare, All rights reserved. Powered by MoxCreative.</p>
                    </div>
                </div>
                <div class="text-right">
                    <div class="col-md-8">
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>


        </div>



    </footer>

</div>