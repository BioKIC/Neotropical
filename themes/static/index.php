<?php
//error_reporting(E_ALL);
include_once("config/symbini.php");
header("Content-Type: text/html; charset=".$CHARSET);
?>
<html>
<head>
	<title><?php echo $DEFAULT_TITLE?> Home</title>
	<link href="css/base.css?ver=<?php echo $CSS_VERSION; ?>" type="text/css" rel="stylesheet" />
	<link href="css/main.css<?php echo (isset($CSS_VERSION_LOCAL)?'?ver='.$CSS_VERSION_LOCAL:''); ?>" type="text/css" rel="stylesheet" />
	<meta name='keywords' content='' />
	<script type="text/javascript">
		<?php include_once('config/googleanalytics.php'); ?>
	</script>
</head>
<body>
	<?php
	$displayLeftMenu = "true";
	include($SERVER_ROOT."/header.php");
	?> 
        <!-- This is inner text! -->
        <div  id="innertext">
            <h1></h1>

            <div style="margin:20px;">
            	Description and introduction of project
            </div>
        </div>

	<?php
	include($SERVER_ROOT."/footer.php");
	?> 

</body>
</html>