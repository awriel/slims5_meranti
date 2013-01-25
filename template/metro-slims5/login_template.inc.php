<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title><?php echo $page_title; ?></title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="webicon.ico" type="image/x-icon" />
<link href="style.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/reset.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $sysconf['template']['css']; ?>" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/form.js"></script>
	<script type="text/javascript" src="js/gui.js"></script>
	<script type="text/javascript" src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/js/custom.js"></script>
</head>

<body>
	<div id="start">
		<a href="index.php"><img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/images/start.png" alt=""></a>
	</div>
	<div id="main">
		<div  class="nduwur">
			<a class="back" href="javascript: history.back();">
				<img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/images/back.png" alt="" width="40" height="40">
			</a>
			<span><?php echo __('Librarian LOGIN')?></span>
		</div>
		<div id="login">
			<img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/images/lock.png" alt="" width="130" height="130">
			<?php echo $main_content; ?>
		</div>	
	</div>
</body>
</html>
