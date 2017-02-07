<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Егор</title>
	<!-- Put this script tag to the <head> of your page -->
	<script type="text/javascript" src="//vk.com/js/api/openapi.js?139"></script>

	<script type="text/javascript">
  	VK.init({apiId: 5863566});
	</script>
</head>
<body>
<?php 
/*class Person{
	public $name = "Джонниии";
	public $age = 25;
	public $job = "designer";

	public function greeting() {
		return "Hello, ".$this->name;
	}
}

$johnn = new Person();
echo $johnn->greeting();
*/
?>	
<!-- Put this div tag to the place, where Auth block will be -->
	<div id="vk_auth"></div>
	<script type="text/javascript">
	VK.Widgets.Auth("vk_auth", {width: "250px", authUrl: '/dev/Login'});	
	</script>
</body>
</html>