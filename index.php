<?php 
function getBaseUrl(){
  $currentPath = $_SERVER['PHP_SELF'];$pathInfo = pathinfo($currentPath);$hostName = $_SERVER['HTTP_HOST'];$protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https://'?'https://':'http://';
  return $protocol.$hostName."/classing/";
}



include_once 'classes/person.php';
$person = new Person();
//echo $person->name;

$requestURI = explode('/', $_SERVER['REQUEST_URI']);
$scriptName = explode('/',$_SERVER['SCRIPT_NAME']);
     
for($i= 0;$i < sizeof($scriptName);$i++){
	if ($requestURI[$i]==$scriptName[$i]){
		unset($requestURI[$i]);
    }
}
     
$command = array_values($requestURI);

if (!empty($command[0])&&$command[0]=='daftar') {
	
	if (isset($_POST['data'])){
		echo $_POST['data']['nama'];	
	}
	echo "<html>";
	include_once 'view/header.php';
	include_once 'view/coba.php';
	echo "</html>";
}else{
	
}

//print_r($requestURI);
?>