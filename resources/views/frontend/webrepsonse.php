<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | WebPay </title>
    <meta name="description" content="">
    <script src="<?=base_url('frontend/themekit/scripts/jquery.min.js'); ?>"></script>
    <script src="<?=base_url('frontend/themekit/scripts/main.js'); ?>"></script>
    <link rel="stylesheet" href="<?=base_url('frontend/themekit/css/bootstrap-grid.css'); ?>">
    <link rel="stylesheet" href="<?=base_url('frontend/themekit/css/style.css'); ?>">
    <link rel="stylesheet" href="<?=base_url('frontend/themekit/css/glide.css'); ?>">
    <link rel="stylesheet" href="<?=base_url('frontend/themekit/css/magnific-popup.css'); ?>">
    <link rel="stylesheet" href="<?=base_url('frontend/themekit/css/content-box.css'); ?>">
    <link rel="stylesheet" href="<?=base_url('frontend/themekit/css/contact-form.css'); ?>">
    <link rel="stylesheet" href="<?=base_url('frontend/themekit/css/social.css'); ?>">
    <link rel="stylesheet" href="<?=base_url('frontend/skin.css'); ?>">
    <link rel="icon" href="<?=base_url('frontend/media/favicon.png'); ?>">
    <link href="<?=base_url('fonts/css/font-awesome.min.css'); ?>" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
</head>

<body>
    <div id="preloader"></div>
    <nav class="menu-icon menu-fixed " data-menu-anima="fade-in">
        <div class="container">
            <div class="menu-brand">
                <a href="#">
                    <img class="logo-default scroll-hide" src="<?=base_url('frontend/media/logo.png'); ?>" alt="logo" />
                    <img class="logo-retina scroll-hide" src="<?=base_url('frontend/media/logo.png'); ?>" alt="logo" />
                    <img class="logo-default scroll-show" src="<?=base_url('frontend/media/logo.png'); ?>" alt="logo" />
                    <img class="logo-retina scroll-show" src="<?=base_url('frontend/media/logo.png'); ?>" alt="logo" />
                </a>
            </div>
            <i class="menu-btn"></i>
            <div class="menu-cnt">
                <ul id="main-menu">
                    <li class="">
                        <a href="<?=site_url('app/Frontend') ?>">Home</a>
                    </li>
                </ul>
                <div class="menu-right">
                    <!-- <form role="search" method="get" id="searchform" class="search-btn">
                        <div class="search-box-menu">
                            <input type="text" placeholder="Search ...">
                            <i></i>
                        </div>
                    </form> -->
                </div>
            </div>
        </div>
    </nav>
    <main>
        <section class="section-base">
            <div class="container" style="padding-bottom: 0px; padding-top:80px;">
            <?php if(!empty($errormsg)): ?>
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <?=$errormsg;?>
                        <input id="hdfredirect" name="hdfredirect" type="hidden" value="1" />
                    </div>
                </div>
            <?php else: ?>
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <input id="hdfredirect" name="hdfredirect" type="hidden" value="0" />
                        <hr class="space-xs" />
                        <h3 class="text-color-2">
                            Kaduna State Internal Revenue Service
                        </h3>
                        <hr class="space-xs" />
                        <div class="row">
                            <div class="col-lg-8">
                            <?php if(!empty($response_code) && $response_code == "00"): ?>
                                <p style="background: #0080FF; color:#FFF; text-align:center;padding-top:20px;padding-bottom:20px; font-family: 'Abel';">
                                    <span style="font-size: 3.5rem; line-height: 4rem;">Success</span>
                                    <br/>
                                    <span style="font-size: 2.5rem; line-height: 4rem;"><i class="fa fa-smile-o"></i></span>
                                </p>
                            <?php else: ?>
                                <p style="background: #F13648; color:#FFF; text-align:center;padding-top:20px;padding-bottom:20px; font-family: 'Abel';">
                                    <span style="font-size: 3.5rem; line-height: 4rem;">Failed</span>
                                    <br/>
                                    <span style="font-size: 2.5rem; line-height: 4rem;"><i class="fa fa-frown-o"></i></span>
                                </p>
                            <?php endif; ?>
                                <p style="background: #DCDCDC; color:#000; text-align:left; font-family: 'Abel'; font-weight: bold; font-size: 1.4rem; line-height: 2rem; margin-top:0px; vertical-align:middle; padding-top:7px; padding-bottom:7px;padding-left:10px; margin-bottom:20px;">Payment Information</p>
                                <table class="table table-striped responsive-utilities jambo_table bulk_action" style="font-family: 'Abel'; color:#000; font-size:1.1rem; line-height: 1.5rem; vertical-align:middle; text-align:left;">
                                    <tr>
                                        <td style="font-weight: bold;padding:10px;padding-left:20px;">Transaction Reference:</td>
                                        <td><?= $transaction_ref;?></td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: bold;padding:10px;padding-left:20px;">Payment Reference:</td>
                                        <td><?= $payment_ref;?></td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: bold;padding:10px;padding-left:20px;">Transaction Date:</td>
                                        <td><?= $transaction_date;?></td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: bold;padding:10px;padding-left:20px;">Transaction Amount:</td>
                                        <td><?= $amount_paid;?></td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: bold;padding:10px;padding-left:20px;">Response from Interswitch:</td>
                                        <td><?= $response_msg;?></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 hidden-md">
                        <br/>
                        <img src="<?=base_url('frontend/media/mk-1.png'); ?>" alt="" style="height:500px;width:auto;" />
                    </div>
                </div>
            </div>
            <?php endif;?>
        </section>
        <div class="row align-items-center">
            <div class="col-md-6 offset-md-4">
                <img src="<?=base_url('frontend/media/interswitch.png'); ?>" alt="Interswitch" style="height:25px;width:auto;" />
                <span style="display:inline-block; width:15px;"></span>
                <img src="<?=base_url('frontend/media/verve.png'); ?>" alt="Verve" style="height:25px;width:auto;" />
                <span style="display:inline-block; width:15px;"></span>
                <img src="<?=base_url('frontend/media/mastercard.png'); ?>" alt="Master Card" style="height:25px;width:auto;" />
                <span style="display:inline-block; width:15px;"></span>
                <img src="<?=base_url('frontend/media/visa.png'); ?>" alt="Visa" style="height:25px;width:auto;" />
            </div>
        </div>
    </main>
    <i class="scroll-top-btn scroll-top show"></i>
    <footer class="light">
        <div class="footer-bar">
            <div class="container">
                <span>© 2019 Powered by Voncap Limited and Kaduna Internal Revenue Service.</span>
                <span><a href="#">Contact us</a> | <a href="#">Privacy policy</a></span>
            </div>
        </div>
        <link rel="stylesheet" href="themekit/media/icons/iconsmind/line-icons.min.css">
        <script src="themekit/scripts/parallax.min.js"></script>
        <script src="themekit/scripts/glide.min.js"></script>
        <script src="themekit/scripts/imagesloaded.min.js"></script>
        <script src="themekit/scripts/progress.js"></script>
        <script src="themekit/scripts/tab-accordion.js"></script>
        <script src="themekit/scripts/magnific-popup.min.js"></script>
        <script src="themekit/scripts/pagination.min.js"></script>
        <script src="themekit/scripts/contact-form/contact-form.js"></script>

        <script type="text/javascript">
            $(function(){
                if($('#hdfredirect').val() == '1'){
                    var delay = 5000;
                    setTimeout(function() {
                        location.href="<?=site_url('app/Frontend') ?>";
                    }, delay);
                }
            });
        </script>
    </footer>
</body>
</html>