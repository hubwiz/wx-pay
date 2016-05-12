
<?php
    /** 请在下面设置你服务器的路径,默认是测试的，如果您没有自己的服务器，可以使用测试的 */
    $jsApiPay = "http://paysdk.weixin.qq.com/example/jsapi.php";
    /** 刷卡支付 */
    $micropyPay = "http://paysdk.weixin.qq.com/example/micropay.php";
    /** 扫码支付 */
    $nativePay = "http://paysdk.weixin.qq.com/example/native.php";
    /** 订单查询 */
    $orderQuery = "http://paysdk.weixin.qq.com/example/orderquery.php";
    /** 退款 */
    $refundPay = "http://paysdk.weixin.qq.com/example/refund.php";
    /** 退款查询 */
    $refundQueryPay = "http://paysdk.weixin.qq.com/example/refundquery.php";
?>

<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/> 
    <title>微信支付样例</title>
    <style type="text/css">
        ul {
            margin-left:10px;
            margin-right:10px;
            margin-top:10px;
            padding: 0;
        }
        li {
            width: 32%;
            float: left;
            margin: 0px;
            margin-left:1%;
            padding: 0px;
            height: 100px;
            display: inline;
            line-height: 100px;
            color: #fff;
            font-size: x-large;
            word-break:break-all;
            word-wrap : break-word;
            margin-bottom: 5px;
        }
        a {
            -webkit-tap-highlight-color: rgba(0,0,0,0);
        	text-decoration:none;
            color:#fff;
        }
        a:link{
            -webkit-tap-highlight-color: rgba(0,0,0,0);
        	text-decoration:none;
            color:#fff;
        }
        a:visited{
            -webkit-tap-highlight-color: rgba(0,0,0,0);
        	text-decoration:none;
            color:#fff;
        }
        a:hover{
            -webkit-tap-highlight-color: rgba(0,0,0,0);
        	text-decoration:none;
            color:#fff;
        }
        a:active{
            -webkit-tap-highlight-color: rgba(0,0,0,0);
        	text-decoration:none;
            color:#fff;
        }
    </style>
</head>
<body>
	<div align="center">
        <ul>

            <li style="background-color:#FF7F24"><a href="<?php echo $jsApiPay ?>"> JSAPI支付</a></li>
            <li style="background-color:#698B22"><a href="<?php echo $micropyPay ?>">刷卡支付</a></li>
            <li style="background-color:#8B6914"><a href="<?php echo $nativePay ?>">扫码支付</a></li>
            <li style="background-color:#CDCD00"><a href="<?php echo $orderQuery ?>">订单查询</a></li>
            <li style="background-color:#CD3278"><a href="<?php echo $refundPay ?>">订单退款</a></li>
            <li style="background-color:#848484"><a href="<?php echo $refundQueryPay ?>">退款查询</a></li>
            <li style="background-color:#8EE5EE"><a href="http://paysdk.weixin.qq.com/example/download.php">下载订单</a></li>
        </ul>
	</div>
</body>
</html>