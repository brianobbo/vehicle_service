<?php
// $dev_data = array('id'=>'-1','firstname'=>'Developer','lastname'=>'','username'=>'dev_oretnom','password'=>'5da283a2d990e8d8512cf967df5bc0d0','last_login'=>'','date_updated'=>'','date_added'=>'');
// if(!defined('base_url')) define('base_url','http://localhost/vehicle_service/');
// if(!defined('base_app')) define('base_app', str_replace('\\','/',__DIR__).'/' );
// if(!defined('dev_data')) define('dev_data',$dev_data);
// if(!defined('DB_SERVER')) define('DB_SERVER',"localhost");
// if(!defined('DB_USERNAME')) define('DB_USERNAME',"root");
// if(!defined('DB_PASSWORD')) define('DB_PASSWORD',"mCz@SaoydK8S!Sdy");
// if(!defined('DB_NAME')) define('DB_NAME',"vehicle_service_db");
?>

<?php
$dev_data = array(
    'id' => '-1',
    'firstname' => 'Developer',
    'lastname' => '',
    'username' => 'dev_oretnom',
    'password' => '5da283a2d990e8d8512cf967df5bc0d0',
    'last_login' => '',
    'date_updated' => '',
    'date_added' => ''
);

if(!defined('base_url')) define('base_url','http://localhost/vehicle_service/');
if(!defined('base_app')) define('base_app', str_replace('\\','/',__DIR__).'/');
$GLOBALS['dev_data'] = $dev_data; // Use global variable
if(!defined('DB_SERVER')) define('DB_SERVER',"localhost");
if(!defined('DB_USERNAME')) define('DB_USERNAME',"root");
if(!defined('DB_PASSWORD')) define('DB_PASSWORD',"mCz@SaoydK8S!Sdy");
if(!defined('DB_NAME')) define('DB_NAME',"vehicle_service_db");
?>
