<?php

// Default BTC/USD Pair
$url = file_get_contents("https://min-api.cryptocompare.com/data/price?fsym=BTC&tsyms=USD&e=Coinbase");
$prices = json_decode($url);
$value = $prices->USD;
$currency = "$";
$currency_pair = "BTC/USD";
$cryptocurrency_name = "Bitcoin";
$cryptocurrency_name_short = "BTC";
$exchange = "Coinbase";
$css = "html {background: #F2994A;background: -webkit-linear-gradient(to right, #F2C94C, #F2994A);background: linear-gradient(to right, #F2C94C, #F2994A);color: #FFFFFF;font-family: 'Karla', sans-serif;}";

// BTC/GBP Pair
if ($_SERVER['QUERY_STRING'] == "BTC-GBP-CB") {
	$url = file_get_contents("https://min-api.cryptocompare.com/data/price?fsym=BTC&tsyms=GBP&e=Coinbase");
	$prices = json_decode($url);
	$value = $prices->GBP;
	$currency = "£";
	$currency_pair = "BTC/GBP";
	$cryptocurrency_name = "Bitcoin";
	$cryptocurrency_name_short = "BTC";
	$exchange = "Coinbase";
	$css = "html {background: #F2994A;background: -webkit-linear-gradient(to right, #F2C94C, #F2994A);background: linear-gradient(to right, #F2C94C, #F2994A);color: #FFFFFF;font-family: 'Karla', sans-serif;}";
}

// ETH/USD Pair
if ($_SERVER['QUERY_STRING'] == "ETH-USD-CB") {
	$url = file_get_contents("https://min-api.cryptocompare.com/data/price?fsym=ETH&tsyms=USD&e=Coinbase");
	$prices = json_decode($url);
	$value = $prices->USD;
	$currency = "$";
	$currency_pair = "ETH/USD";
	$cryptocurrency_name = "Ethereum";
	$cryptocurrency_name_short = "ETH";
	$exchange = "Coinbase";
	$css = "html {background: #6190E8;background: -webkit-linear-gradient(to right, #A7BFE8, #6190E8);background: linear-gradient(to right, #A7BFE8, #6190E8);color: #FFFFFF;font-family: 'Karla', sans-serif;}";
}

// ETH/GBP Pair
if ($_SERVER['QUERY_STRING'] == "ETH-GBP-KR") {
	$url = file_get_contents("https://min-api.cryptocompare.com/data/price?fsym=ETH&tsyms=GBP&e=Kraken");
	$prices = json_decode($url);
	$value = $prices->GBP;
	$currency = "£";
	$currency_pair = "ETH/GBP";
	$cryptocurrency_name = "Ethereum";
	$cryptocurrency_name_short = "ETH";
	$exchange = "Kraken";
	$css = "html {background: #6190E8;background: -webkit-linear-gradient(to right, #A7BFE8, #6190E8);background: linear-gradient(to right, #A7BFE8, #6190E8);color: #FFFFFF;font-family: 'Karla', sans-serif;}";
}

?>
<!DOCTYPE HTML>
<html>
<head>
	<title><?php echo $currency_pair ?> - Current Price: <?php echo $currency.$value ?></title>
	<link rel="icon" type="image/ico" href="/cbp.ico" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="The Latest Coinbase Bitcoin and Ethereum Prices">
	<link href="https://fonts.googleapis.com/css?family=Karla" rel="stylesheet">
	<style>
	<?php echo $css ?>.cu-pairs{color:inherit;font-family:inherit;font-size:14.5px}.cu-name-full{color:inherit;font-family:inherit;font-family:35px;display:block}.cu-name-short{color:inherit;font-family:inherit;font-size:47px;display:block}.cn-current-value{color:inherit;font-family:inherit;font-size:112px;display:block}a{text-decoration:none;color:inherit}.spx-area-front{padding-bottom:115px}.txtc{text-align:center}
	</style>
</head>
<body>
	<span class="cu-pairs"><a href="/cbp.php">BTC/USD (Coinbase)</a> <a href="/cbp.php?BTC-GBP-CB">BTC/GBP (Coinbase)</a> <a href="/cbp.php?ETH-USD-CB">ETH/USD (Coinbase)</a> <a href="/cbp.php?ETH-GBP-KR">ETH/GBP (Kraken)</a></span>
	<div class="spx-area-front"></div>
	<div class="txtc">
	<span class="cu-name-short"><?php echo $cryptocurrency_name_short ?></span>
	<span class="cu-name-full">Current <?php echo $exchange . ' ' . $cryptocurrency_name ?> Price</p>
	<span class="cn-current-value"><?php echo $currency.$value ?></span>
	</div>
</body>
</html>