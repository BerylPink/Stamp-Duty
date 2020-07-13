<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css">
    <title>Stamp Duty Invoice</title>
    
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

      #result {
        box-shadow: none;
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
      table{
        border:none;
      }
    </style>
  </head>
  <body class="nav-md" style="border:none;"> 
    <div class="container">
        <div class="row" style="border:none;">
          <div class="col-md-12 col-sm-12 col-xs-12" style="border:none;">
            <div class="x_panel" style="border:none;">
              <div class="x_title">
                <nav class="navbar navbar-default">
                <h2  class="navbar-header" style=" width:100%; text-align: center;">Stamp Duty Invoice</h2>
                </nav>
                <div class="clearfix"></div>
              </div>
              <div class="x_content" style="border:none;">
                <div id='result' style='width:21cm;border-radius:10px;box-shadow:inset 0 0 10px #0084b3;padding:10px; margin: 0 auto;'>
                  <table style='width:100%'>
                    <tr>
                      <td class='sets2' colspan='2' > 
                        <div id='printduplex' style='border:1px solid #0084b4'> 
                          <div id="result0" style="padding:10px;">
                            <table style="table-layout:fixed;width:100%;border-collapse:collapse;font-family:Century Gothic;font-size:12px; color:#000 !important;">
                              <tbody>
                                <tr>
                                  <td colspan="2">
                                    <table cellspacing='0' style='width:100%;table-layout:fixed;font-size:12px;font-family:Century Gothic'>
                                      <tr style='font-weight:bold;font-style:verdana'>
                                        <td valign='top' style="text-transform: uppercase;">
                                          <h6 style="font-size: 13px; font-weight: bold; text-align:left;">Certificate NO: {{ $stampDutyInvoice->certificate_no }}  </h6>
                                          <!-- <h6 style="font-size: 13px; font-weight: bold;">Assessed by: </h6> -->
                                        </td>
                                        <td align='center' >
                                        <img src= "{{ asset('uploads/statelogo.png') }}" style='height:100px;width:105px;' />
                                        </td>
                                        <td align='right' valign='top' id="errortxt" style="text-transform: uppercase;">
                                        <!-- 3rd July, 2020 -->
                                        </td>
                                      </tr>
                                      <tr>
                                        <td colspan='3' ALIGN='center' valign='top' style='font-size:22px;font-weight:bold'>KADUNA STATE BOARD OF INTERNAL REVENUE SERVICE</td>
                                      </tr>
                                    </table>
                                    <br/>
                                  </td>
                                </tr>
                                <tr>
                                  <td align='left' style="font-size: 13px;">
                                  <strong>PARTY A: </strong>{{ strtoupper($stampDutyInvoice->party_a_name) }}<br/> 
                                  <strong>PHONE NO.: </strong>{{ $stampDutyInvoice->party_a_phone_no }}<br/>   
                                    <strong>PARTY B:</strong>{{ strtoupper($stampDutyInvoice->party_b_name) }}<br/> 
                                    <strong>PHONE NO.: </strong>{{ $stampDutyInvoice->party_b_phone_no }}<br/>                                                                                    </td> 
                                  <td align='right'><strong>TRANSACTION DATE: </strong>
                                    {{ \Carbon\Carbon::parse($stampDutyInvoice->created_at , 'UTC')->isoFormat('MMMM Do YYYY')}}
                                    <br/> 
                                    <strong>PRINT DATE: </strong>This is to certify that this Instrument was duly stamped by the Kaduna State Government on the {{ \Carbon\Carbon::today()->isoFormat('MMMM Do YYYY')}}<br/> </td>
                                </tr>

                                <tr>
                                    <td colspan='2' align='center' style='font-size:18px;font-weight:bold'> <br/> STAMP DUTY ASSESSMENT <br/></td>
                                </tr>
                                <tr>
                                  <td colspan='2' style="font-size:13px;"> You may find below fees payable to the Kaduna State Government in respect of the items listed below:<br/></td>
                                </tr>
                                <tr>
                                  <td colspan='2' style="font-size:12px;"><strong>TRANS DESCRIPTION: </strong>CERTIFICATE OF OCCUPANCY TRANSACTION BETWEEN OLUMUYIWA OLUMIDE ADENOLA AND KADUNA STATE GOVERNMENT</td>
                                </tr>
                                
                                <tr>
                                  <td colspan="2">
                                    <table class="table table-striped table-bordered" style="margin-top: 10;margin-bottom: 0;width:100%;table-layout:fixed;border: 1px solid #ddd !important;border-spacing: 0;border-collapse: collapse;font-size: 12px;font-family:Century Gothic">
                                      <thead>
                                        <tr style="background:#00aeef;font-weight:bold;border: 1px solid #ddd !important;">
                                          <th width="5%" align="center" style="padding: 4px;background:#00aeef !important; text-align: center; vertical-align: middle;border: 1px solid #ddd !important;font-size: 12px;">S/N</th>
                                          <th width="15%" align="center" style="padding: 4px;background:#00aeef !important; text-align: center; vertical-align: middle;border: 1px solid #ddd !important;font-size: 12px;">REVENUE CODE</th>
                                          <th width="60%" align="left" style="padding: 4px; padding-left:5px; background:#00aeef !important; text-align: left; vertical-align: middle;border: 1px solid #ddd !important;font-size: 12px;">SERVICE</th>
                                          <th width="20%" align="right" style="padding: 4px;background:#00aeef !important; text-align: center; vertical-align: middle;border: 1px solid #ddd !important;font-size: 12px;">TAX(<span style='color:#000'>&#x20A6;</span>)</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr style="border: 1px solid #ddd !important;">
                                          <td align="center" style="padding: 4px;vertical-align: middle;border: 1px solid #ddd !important;font-size: 12px;">1</td>
                                          <td align="center" style="padding: 4px;vertical-align: middle;border: 1px solid #ddd !important;font-size: 12px;">4020007</td>
                                          <td align="left" style="padding: 4px;vertical-align: middle;border: 1px solid #ddd !important;font-size: 12px;"><span class="rptamount">STAMP DUTY ( {{ $stampDutyDetails->name }} )</span></td>
                                        <td align="right" style="padding: 4px;vertical-align: middle;background:#effbff !important;border: 1px solid #ddd !important;font-size: 12px; "><span class="rptamount"> {{ number_format($stampDutyAmount) }} </td>
                                        </tr>
                                            <tr>
                                          <td colspan="3" align="right" style="font-size: 13px; color:#000; font-weight: 700; padding: 4px;vertical-align: middle;border: 1px solid #ddd !important;" >AMOUNT DUE</td>
                                          <td align="right" style="font-size: 13px; color:#000; font-weight: 700;padding: 4px;vertical-align: middle;background:#effbff !important;border: 1px solid #ddd !important;" >{{ number_format($stampDutyAmount) }}</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </td>
                                </tr>
                                
                                <tr>
                                  <td style="font-size: 12px; text-transform:uppercase;" align='center' colspan="2">
                                    <div style="position:relative; text-align:center; width:500px;margin-top:10px;">
                                      <img src="#" style="height:80px;width:auto;">
                                      <br/>
                                      <span>_________________________________</span>
                                      <br/>
                                      <span style="font-weight:bold;font-size: 14px;">AWOYEMI B.M.</b></span>
                                      <br/>
                                      <span style="font-weight:bold;font-size: 14px;">Commissioner For Stamp Duty and Capital Gain Tax</b></span>
                                    </div>
                                  </td>
                                </tr>
                                
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </table>
                  </div>
                  <br/>
                  
                        
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
            
              </div>
              
            </div>
        </div>
        <div class="container">
        <a href="{{ url('/stamp-duty-history') }}" class="btn btn-danger">Back</a>
          <button type="button" class="btn btn-success align-content-center" onclick="window.print();return false;">Print</button>
        </div>
    </div>
  </body>
  </html>
     
  
  