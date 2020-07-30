<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | WebPay </title>
    <meta name="description" content="">
    <script src="('frontend/themekit/scripts/jquery.min.js')"></script>
    <script src="('frontend/themekit/scripts/main.js')"></script>
    <link rel="stylesheet" href="('frontend/themekit/css/bootstrap-grid.css')">
    <link rel="stylesheet" href="('frontend/themekit/css/style.css')">
    <link rel="stylesheet" href="('frontend/skin.css')">
    <link rel="icon" href="('frontend/media/favicon.png')">
</head>
<body>
    <div id="preloader"></div>
    <nav class="menu-icon menu-fixed " data-menu-anima="fade-in">
        <div class="container">
            <div class="menu-brand">
                <a href="#">
                    <img class="logo-default scroll-hide" src="('frontend/media/logo.png')" alt="logo" />
                    <img class="logo-retina scroll-hide" src="('frontend/media/logo.png')" alt="logo" />
                    <img class="logo-default scroll-show" src="('frontend/media/logo.png')" alt="logo" />
                    <img class="logo-retina scroll-show" src="('frontend/media/logo.png')" alt="logo" />
                </a>
            </div>
            <i class="menu-btn"></i>
            <div class="menu-cnt">
                <ul id="main-menu">
                    <li class="">
                        <!-- <a href="#">Home</a> -->
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
        <section class="section-image ken-burn-center" data-parallax="scroll" data-image-src="('frontend/media/hd-1.jpg')">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <hr class="space-xs" />
                        <h3 class="text-color-2">
                            Kaduna State Internal Revenue Service
                        </h3>
                       
                        <h1 class="text-uppercase">Stamp Duty/Capital Gain Tax Compliance</h1>
                        <!-- <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
                        </p> -->
                        <div class="row">
                            <div class="col-lg-12">
                                <form id="webpayform" method="post" action="https://sandbox.interswitchng.com/webpay/pay" class="form-box form-ajax">
                                    <div class="col-lg-6 row form-control">
                                        <input id="ref_code" name="ref_code" placeholder=" Enter your Payment/Reference Code" type="text" class="input-text" required>
                                    </div>
                                    <div class="col-lg-12 row form-control" id="ref_details" style="display:none;">
                                        <div class="boxed-area light">
                                            <ul class="text-list text-list-bold" style="line-height: 24px;font-size: 13px;">
                                                <li><b>Parties: </b><p id="ptag_parties"></p></li>
                                                <li><b>Description: </b><p id="ptag_instrument"></p></li>
                                                <li><b>Amount: </b><p id="ptag_amount"></p></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="col-lg-12 row form-control">
                                        <input name = "product_id" id = "product_id" type = "hidden" />
                                        <input name = "pay_item_id" id = "pay_item_id" type = "hidden" />
                                        <input name = "amount" id = "amount" type = "hidden" />
                                        <input name = "currency" id = "currency" type = "hidden" value="566" />
                                        <input name = "site_redirect_url" id = "site_redirect_url" type="hidden"/>
                                        <input name = "txn_ref" id = "txn_ref" type = "hidden" />
                                        <input name = "cust_id" id = "cust_id" type = "hidden" >
                                        <input name = "hash" id = "hash" type = "hidden" />
                                        <input name = "cust_name" id = "cust_name" type = "hidden" />
                                        <input name = "site_name" id = "site_name" type = "hidden" value="KADIRS - ERAMS" />
                                        <input name = "assess_no" id = "assess_no" type = "hidden" />
                                        <input name = "pending_paymnt" id = "pending_paymnt" type = "hidden" />
                                        <button type="submit" class="btn btn-xs" id="btnsubmit">Click Here to Pay</button>
                                    </div>
                                    <br/>
                                    <div class="col-lg-12 row form-control">
                                        <img src="('frontend/media/interswitch.png')" alt="Interswitch" style="height:25px;width:auto;" />
                                        <span style="display:inline-block; width:15px;"></span>
                                        <img src="('frontend/media/verve.png')" alt="Verve" style="height:25px;width:auto;" />
                                        <span style="display:inline-block; width:15px;"></span>
                                        <img src="('frontend/media/mastercard.png')" alt="Master Card" style="height:25px;width:auto;" />
                                        <span style="display:inline-block; width:15px;"></span>
                                        <img src="('frontend/media/visa.png')" alt="Visa" style="height:25px;width:auto;" />
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                        
                        <hr class="space-lg" />
                    </div>
                    <div class="col-lg-6 hidden-md">
                        <img src="('frontend/media/mk-1.png')" alt="" />
                    </div>
                </div>
            </div>
        </section>
        <!-- <div class="row align-items-center">
            <div class="col-md-6 offset-md-4">
                <img src="('frontend/media/interswitch.png'); ?>" alt="Interswitch" style="height:25px;width:auto;" />
                <span style="display:inline-block; width:15px;"></span>
                <img src="('frontend/media/verve.png'); ?>" alt="Verve" style="height:25px;width:auto;" />
                <span style="display:inline-block; width:15px;"></span>
                <img src="('frontend/media/mastercard.png'); ?>" alt="Master Card" style="height:25px;width:auto;" />
                <span style="display:inline-block; width:15px;"></span>
                <img src="('frontend/media/visa.png'); ?>" alt="Visa" style="height:25px;width:auto;" />
            </div>
        </div> -->
    </main>
    <!-- <i class="scroll-top-btn scroll-top show"></i> -->
    <footer class="light">
        <div class="footer-bar">
            <div class="container">
                <span>© <?=date("Y");?> Powered by Voncap Limited and Kaduna Internal Revenue Service</span>
                <span><a href="#"></a></span>
            </div>
        </div>
        <link rel="stylesheet" href="('frontend/themekit/media/icons/iconsmind/line-icons.min.css')">
        <script src="('frontend/themekit/scripts/parallax.min.js')"></script>
        <script src="('frontend/themekit/scripts/glide.min.js')"></script>
        <script src="('frontend/themekit/scripts/imagesloaded.min.js')"></script>

        <script type="text/javascript">
            $(function(){
                $('#ref_code').on('change', function () {
                    //$('#btnsubmit').attr('disabled','disabled');
                    $("#ref_details").css("display", "none");
                    $('#product_id').val("");
                    $('#pay_item_id').val("");
                    $('#amount').val("");
                    $('#site_redirect_url').val("");
                    $('#txn_ref').val("");
                    $('#assess_no').val("");
                    $('#hash').val("");
                    $('#cust_name').val("");
                    
                    $('#ptag_parties').text("");
                    $('#ptag_instrument').text("");
                    $('#ptag_amount').text("");

                    if($('#ref_code').val().trim() == "")
                    {
                        alert("Please enter your Payement/Reference Code");
                        return false;
                    }

                    $("#preloader").css("display", "block");
                    var ref_code = $('#ref_code').val().trim();
                    
                    $.ajax({
                        type:"POST",
                        url:("/app/Frontend/get_reference_details"),
                        data: {"ref_code":ref_code},
                        contentType:"application/x-www-form-urlencoded",
                        timeout: 180000,        
                        success: function(data){
                            $("#preloader").css("display", "none");
                            if(data.proccess_status == "error"){
                                alert("Payment/Reference Code does not exist");
                            }
                            else if(data.proccess_status == "expired"){
                                alert("Payment/Reference Code has expired");
                            }
                            else if(data.proccess_status == "missing"){
                                alert("Required Parameters are missing. Please try again later");
                            }
                            else{
                                //$('#btnsubbmit').removeAttr('disabled');
                                $('#product_id').val(data.productcode);
                                $('#pay_item_id').val(data.pay_item_id);
                                $('#amount').val(data.xpected_amount);
                                $('#cust_name').val(data.payer_name);
                                $('#site_redirect_url').val(data.site_url);
                                $('#txn_ref').val(data.reference);
                                $('#assess_no').val(data.assess_no);
                                $('#hash').val(data.hashed_var);

                                $("#ref_details").css("display", "block");
                                $('#ptag_parties').text(data.payer_name);
                                $('#ptag_instrument').text(data.instrument_descrp);
                                $('#ptag_amount').text(parseFloat(data.xpected_amount)/100);
                                $('#pending_paymnt').val(data.pending_paymnt);

                                if(data.pending_paymnt == "1"){
                                    $('#webpayform').attr('action', 'https://sandbox.interswitchng.com/webpay/api/v1/gettransaction.json');
                                    $('#webpayform').get(0).setAttribute('action', 'https://sandbox.interswitchng.com/webpay/api/v1/gettransaction.json');
                                }
                                else{
                                    $('#webpayform').attr('action', 'https://sandbox.interswitchng.com/webpay/pay');
                                    $('#webpayform').get(0).setAttribute('action', 'https://sandbox.interswitchng.com/webpay/pay');
                                }
                            }
                        },
                        error:function(x,y,z)
                        {
                            $("#preloader").css("display", "none");
                            $("#ref_details").css("display", "block");
                            //$('#ptag_amount').text(x.responseText);
                            if (y === 'timeout') {
                                alert('CONNECTION TIME OUT!PLEASE CHECK YOUR INTERNET CONNECTION AND TRY AGAIN!');
                            }
                            else
                            {
                                alert(x.responseText);
                                $('#ptag_parties').text(x.responseText);
                            }
                            return false;
                        }
                    });
                });

                $('#btnsubmit').on('click', function () {
                    
                    if($('#hash').val().trim() == ""){
                        return false;
                    }

                    if($('#ref_code').val().trim() == "")
                    {
                        alert("Please enter your Payement/Reference Code");
                        $('#ref_code').focus();
                        return false;
                    }

                    if($('#pending_paymnt').val() == "1"){
                        event.preventDefault();
                        window.location.href = "('app/Frontend/web_pay_requery')";
                    }
               });
            });
        </script>
    </footer>
</body>
</html>