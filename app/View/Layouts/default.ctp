<!DOCTYPE html>
<html lang="en">
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<head >
    <title>Mr Miyagi's Japanese Food &amp; LIQUOR</title>
<?php
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
?>
    <link rel="stylesheet" href="/css/bootstrap.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="/css/style.css" type="text/css" media="screen" />
    <!-- <link href='http://fonts.googleapis.com/css?family=Montserrat:700,400' rel='stylesheet' type='text/css'> -->
        
    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/jquery.localscroll.js"></script>
    <script type="text/javascript" src="/js/jquery.scrollTo.js"></script>
    <script type="text/javascript" src="/js/scroll-manager.js"></script>
    <script type="text/javascript" src="/js/form-manager.js"></script>

</head>

<body ><?php echo $this->fetch('content'); ?></body>
</html>