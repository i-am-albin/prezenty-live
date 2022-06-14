
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Summary</title>
</head>

<body>
    <div class="row mt-5" style="padding: 10px; ">
        <div class="col-lg-12 col-12 col-xl-7 col-sm-11 mx-auto" style="    border-style: groove;
        padding: 20px;">

  <table style="width:100%" >
    <tbody>
  <tr>
    <th style="text-align: left;"><b>Daily Summary</b></th>
    <th style="text-align: right;"><img src="https://prezenty.in/prezenty/backend/web/logo.png" alt="" height=80 width=80></img> </th>
  </tr>
  </tbody>
  </table>
<table>
  <tr>
    <p>Dear Sir,</p>
    <p>
    Following are the Prezenty summary for the day <?php echo $mailData[0]['e_date']; ?> </p>

  </tr>
</table>
<table style="margin-top: 15px;border-top: solid;" border="1">
  <tr>
    <th style="width: 21%;">SI No</th>
    <th style="width: 42%;">Particulars</th>
    <th style="width: 42%;">Date</th>
    <th style="width: 20%;">Amount</th>
  </tr>
  <tr style="line-height:38px;border-top: solid;border-right: solid;">
    <td>1</td>
    <td>Food Voucher Sent</td>
    <td><?php echo date("d-m-Y"); ?></td>
    <td> ₹<?php echo $mailData[0]['sumUpiFood']; ?></td>
  </tr>
  <tr style="line-height:38px;border-top: solid;">
    <td>2</td>
    <td>Gift Amount Received</td>
    <td><?php echo date("d-m-Y"); ?></td>
    <td> ₹<?php echo $mailData[0]['sumUpiGift']; ?></td>
  </tr>
  <tr style="line-height:38px;border-top: solid;">
    <td>1</td>
    <td>Gift Amount Redeemed</td>
    <td><?php echo date("d-m-Y"); ?></td>
    <td> ₹<?php echo $mailData[0]['sumRedeem']; ?></td>
  </tr>

</table>
<br>
<br>
<table style="margin-top: 15px;border-top: solid;" border="1">
  <tr>
    <th style="width: 21%;">SI No</th>
    <th style="width: 42%;">Particulars</th>
    <th style="width: 42%;">Date</th>
    <th style="width: 20%;">Nos</th>
  </tr>
  <tr style="line-height:38px;border-top: solid;border-right: solid;">
    <td>1</td>
    <td>Events Created</td>
    <td><?php echo date("d-m-Y"); ?></td>
    <td> ₹<?php echo $mailData[0]['eventCount']; ?></td>
  </tr>
  <tr style="line-height:38px;border-top: solid;">
    <td>2</td>
    <td>Order Placed</td>
    <td><?php echo date("d-m-Y"); ?></td>
    <td> ₹<?php echo $mailData[0]['orderCount']; ?></td>
  </tr>
</table>
<br>
<br>
<table style="margin-top: 15px;border-top: solid;" border="1">
  <tr>
    <th style="width: 21%;">SI No</th>
    <th style="width: 42%;">Particulars</th>
    <th style="width: 42%;">Date</th>
    <th style="width: 20%;">Amount</th>
  </tr>
  <tr style="line-height:38px;border-top: solid;">
    <td>3</td>
    <td>Account Balance</td>
    <td><?php echo date("d-m-Y"); ?></td>
    <td> ₹<?php echo $mailData[0]['accBalance']; ?></td>
  </tr>
  <tr style="line-height:38px;border-top: solid;">
    <td>4</td>
    <td>Amount Transferred</td>
    <td><?php echo date("d-m-Y"); ?></td>
    <td> ₹<?php echo $mailData[0]['transfer']; ?></td>
  </tr>  

  <tr style="line-height:38px;border-top: solid;">
    <td></td>
    <td></td>
    <td></td>
    <td> ₹<?php echo ($mailData[0]['accBalance']-$mailData[0]['transfer']); ?></td>
  </tr>  
</table>
<br>
<br>
<table style="width: 100%;">
  <tr>
	<td style="width: 50%;float:'left">
	  Registered Address<br>
Prezenty Infotech Private Limited<br>
26 S R T Road, Shivajinagar, Bangalore<br>
Karnataka, India-560062<br>
GST NO: 29AAMCP2658N1ZK<br>
CIN: U72900KA2021PTC151471
	</td>
  </tr>
  <tr>
	<td style="width:100%;"><br><p style="text-align: right;">Thank you for the order & business with Prezenty!</p></td>
  </tr>
  <tr>
	<td style="width:100%;"><br><p style="text-align: left; font-size:12;">* Terms & conditions apply</p></td>
  </tr>
</table>
<hr>
<table style="width:100%">
        <tbody>
        <tr>
            <td style="text-align:center;">
                <p>Email: support@prezenty.in |&nbsp;</span><span>&copy; 2022 prezenty.in. All rights reserved.</span>
                </p>
            </td>
        </tr>
        </tbody>
    </table>
</div> </div>
</div>

</body>

</html>
<style>
  th{
    font-size: 13px;

  }

</style>