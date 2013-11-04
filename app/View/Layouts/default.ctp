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
    <link href='http://fonts.googleapis.com/css?family=Montserrat:700,400' rel='stylesheet' type='text/css'>
        
   <!--  <script type="text/javascript" src="/js/jquery-1.8.3.js"></script> -->
   <script type="text/javascript" src="/js/jquery-1.9.1.js"></script>
    <!-- <script src="http://code.jquery.com/jquery-migrate-1.2.1.js"></script> -->
    <script type="text/javascript" src="/js/jquery.localscroll-1.2.7.js"></script>
    <script type="text/javascript" src="/js/jquery.scrollTo-1.4.3.1.js"></script>
    <script type="text/javascript" src="/js/scroll-manager.js"></script>
    <script type="text/javascript" src="/js/form-manager.js"></script>
    <script type="text/javascript" src="/js/bootstrap.js"></script>
    <script type="text/javascript" src="/js/jquery.jplayer.min.js"></script>
    

</head>

<body ><?php echo $this->fetch('content'); ?></body>
</html>