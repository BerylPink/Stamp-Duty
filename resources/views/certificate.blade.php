<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Stamp Duty Certificate</title>
        <link rel="stylesheet" href="{{ asset('assets/template/css/bootstrap.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/template/css/font-awesome.min.css') }}">


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css">
        <style type="text/css">
            #loaderdiv {
                width: 100%;
                height: 1500px;
                /*min-height: 1500px;*/
                overflow: hidden; 
                position: absolute;
                object-fit: fill;
                left: 0px;
                top: 0px;
                background-color: lightgray;
                opacity: 0.7;
                filter: alpha(opacity=70); /* For IE8 and earlier */
                z-index:1000;
                visibility: hidden;
            }

            #loaderdiv img {
                position: absolute;
                top: 40%;
                left: 50%;
            }
        </style>
        <style type="text/css" media="print">
            #innerresult {
                box-shadow:none;
                -webkit-print-color-adjust: exact  !important; 
                print-color-adjust: exact !important;
            }

            #loaderdiv {
                display: none;
            }
            #btntable{
                display: none;
            }
            .x_title{
                display: none;
            }
            .x_content, .row, .nav-md, #result{
                margin:0px;
                padding:0px;
            }
        </style>
    </head>
    <body class="nav-md" style="border:none; background-color:#FFF;"> 
        <div class="x_title" style="border:none; margin: 0 auto">
            <h2 style=" width:100%; text-align: center;">Stamp Duty Certificate</h2>
            <div class="clearfix"></div>
        </div>
    
            <div id='result' style='width:26cm; height: 8cm;margin: 0 auto;'>
                <div id="innerresult" style="width:25.5cm; height: 18cm; border-radius:10px; box-shadow:inset 0 0 10px #0084b3; padding:10px; position: relative; background: #ffffff url({{asset('uploads/stampduty.jpg')}}) no-repeat !important; background-size: cover  !important; color:#000 !important;margin-left:6px;">

                    <table cellspacing='0' style='width:100%;table-layout:fixed;font-size:12px;font-family:Century Gothic'>
                        <tr style='font-weight:bold;font-style:verdana'>
                            <!-- <td valign='top' style="text-transform: uppercase;">
                                <h6 style="font-size: 13px; font-weight: bold; text-align:right;">Certificate NO: {{ $stampDutyInvoice->certificate_no }}  </h6>
                            </td> -->
                           
                        </tr>
                       
                    </table>

                <p class="fieldvalues text-center" style="position: absolute;top: 235px; left: 80px; width: 770px; font-size:16px; ">This is to certify that this Instrument was duly stamped by the Kaduna State Government on {{ \Carbon\Carbon::today()->isoFormat('MMMM Do YYYY')}}. </p>
                <p style="position: absolute;top: 285px;left: 80px; font-size:15px;"><b>CERTIFICATE NO.:</b> <span class="rowvalues"> {{ $stampDutyInvoice->certificate_no }}</span></p>
                <p style="position: absolute;top: 295px;left: 80px; border-bottom:1px solid #000;width:780px;">&nbsp;</p>
                <p style="position: absolute;top: 330px;left: 80px;"><b>ISSUED TO:</b> <span class="rowvalues">{{ strtoupper($stampDutyInvoice->party_a_name) }} >> {{ strtoupper($stampDutyInvoice->party_b_name) }}</span></p>
                <p style="position: absolute;top: 330px;right: 80px;"><b>REFERENCE No.:</b> <span class="rowvalues">{{ $stampDutyInvoice->reference_no }}</span></p>
                <p style="position: absolute;top:365px; left: 80px;"><b>INSTRUMENT TYPE:</b> <span class="rowvalues">{{ strtoupper($stampDutyDetails->name) }}</span></p>
                <p style="position: absolute;top:395px; left: 80px; word-wrap: break-word; text-align: left; width: 750px;"><b>INSTRUMENT DESCRIPTION:</b> <span class="rowvalues">{{ strtoupper($stampDutyDetails->name) }} TRANSACTION BETWEEN {{ strtoupper($stampDutyInvoice->party_a_name) }} AND {{ strtoupper($stampDutyInvoice->party_b_name) }}</span></p>
                <p style="position: absolute;top: 445px;left: 80px;"><b>TRANSACTION DATE:</b> <span class="rowvalues"> {{ \Carbon\Carbon::parse($stampDutyInvoice->created_at , 'UTC')->isoFormat('MMMM Do YYYY')}}</span></p>
                <p style="position: absolute;top: 475px; left: 80px; word-wrap: break-word; text-align: left; width: 750px;"><b>AMOUNT PAID:</b> <span class="rowvalues"><span style='color:#000'>&#x20A6;</span> {{ number_format($stampDutyAmount) }}</span></p>
                <div class="fieldvalues" id="boardsign" style="position: absolute; top: 485px; left: 80px; padding-left:0px; color:#000; font-weight:18px; text-transform:uppercase; width:400px;  text-align:center;">
                    <img src="{{ asset('uploads/duty_comm_sign.png') }}" style="height:65px;width:auto;display:block; margin:0 auto; ">
                    <span style="font-weight: bolder;">__________________________________</span>
                    <br/>
                    <span style="font-weight:bold; font-size:13px; ">AWOYEMI B.M.</span>
                    <br/>
                    <span style="font-weight:bold; font-size:13px;">Commissioner For Stamp Duty</span>
                </div>
                <div style="position: absolute; right:80px; bottom: 80px; width:100px; height:100px"><img class="img-responsive" style="position:relative; display: block; max-width: 100%; height: auto;z-index:100000 !important; -webkit-print-color-adjust: exact !important" src="{{ asset('uploads/barcode.png') }}"  /></div>
            </div>
            <br/>
            
            <div class="container">
            <a href="javascript:history.go(-1);" class="btn btn-danger">Back</a>
                <button type="button" class="btn btn-success align-content-center" onclick="window.print();return false;">Print</button>
            </div>

    </body>
</html>
    