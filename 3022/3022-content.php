<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>


<div class="type-3022">
    <div class="container">
        <!--hình 1-->
        <div class="col-md-4 pd-4 col-12">
            <div class="item text-center">
                <a href>
                    <h5>SMART PHONE REPAIR</h5>
                </a>
                <div class="img">
                    <img src="images/1-1.jpg.webp" alt="">
                </div>
                <div class="text">
                    <p>We specialise in Phone repairs for Apple iPhones, iPad, iPod, Samsung, Galaxy, Sony, HTC, Nexus,
                        Motorola, Blackberry & ...</p>
                </div>
            </div>
        </div>
        <!--hình 2 -->
        <div class="col-md-4 pd-4 col-12">
            <div class="item text-center">
                <a href>
                    <h5>TABLETS & IPAD REPAIR</h5>
                </a>
                <div class="img">
                    <img src="images/2-1.jpg.webp" alt="">
                </div>
                <div class="text">
                    <p>If you are facing any problem with your Tablets / Ipads, Kindly pls go through the menttioned
                        catagories ...</p>
                </div>
            </div>
        </div>
        <!--hình 3 -->
        <div class="col-md-4 pd-4 col-12">
            <div class="item text-center">
                <a href>
                    <h5>DESKTOP & MAC REPAIR</h5>
                </a>
                <div class="img">
                    <img src="images/3-1.jpg.webp" alt="">
                </div>
                <div class="text">
                    <p>We specialist in providing On-Site Computer Desktop Repair Service and Network Support for all
                        sized business, On-Site Computer.</p>
                </div>
            </div>
        </div>
    </div>
</div>