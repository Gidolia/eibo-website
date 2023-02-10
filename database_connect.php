<?php
//error_reporting(E_ERROR | E_PARSE);
$host="localhost";
$username="eibo_new";
$pass="507501866";
$db_name="eibo";

/////////////////connection
$con=new MySQLi($host, $username, $pass, $db_name);

if($con->connect_error){
	die("connection failed: " . $con->connect_error);

}
else
date_default_timezone_set('Asia/Calcutta');
$time=date("H:i:s");
$date=date("Y-m-d");
function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
$ipad=get_client_ip();
$url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

$site_open_info="INSERT INTO `eibo_site_open_info` (`esoi_id`, `url`, `date`, `time`, `ip_addreass`) VALUES (NULL, '$url', '$date', '$time', '$ipad');";

$con->query($site_open_info);

?>