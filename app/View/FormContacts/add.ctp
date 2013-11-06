<nav class="navbar navbar-default navbar-fixed-top hidden-xs" role="navigation " id="p-menu">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header localscroll">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand " href="#page1" alt="Mr. Miyagi">&nbsp;</a>
	</div>

	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse localscroll" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">
			<li class="active"><a href="#page2" style="color: #262624">JAPANESE FOOD &amp; LIQUOR</a></li>
			<!-- <li ><a href="#page2" >SUNTORY</a></li> -->
			<li ><a id="menu-link-foodmenu" href="#page3" class="menu-menu " >MENU</a></li>
			<li class="navbar-dot">&#8226;</li>
			<li ><a id="menu-link-photos" href="#page4" >PHOTOS</a></li>
		 <li class="navbar-dot">&#8226;</li>
			<li ><a id="menu-link-contactus" href="#page5" >INFO</a></li>
		</ul>
	</div><!-- /.navbar-collapse -->
	
</nav>
<div  id="p-menu-mobile" class="navbar-fixed-top visible-xs">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header localscroll">
		<a class="navbar-brand " href="#page1" alt="Mr. Miyagi">&nbsp;</a>
	</div>

	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class=" localscroll" id="asdf">
		<ul class="">
			<!-- <li ><a href="#page2" >SUNTORY</a></li> -->
			<li ><a id="menu-link-foodmenu" href="#page3" class="menu-menu " >MENU</a></li>
			<li ><a id="menu-link-photos" href="#page4" >PHOTOS</a></li>
			<li ><a id="menu-link-contactus" href="#page5" >INFO</a></li>
		</ul>
	</div><!-- /.navbar-collapse -->
	
</div>

<div class="navbar navbar-default navbar-fixed-top" id="food-subnav" style="margin-top:-100px;">
	<ul  class="nav navbar-nav" id="food-nav-background">
		<?php
			for($i=0;$i<count($foodImages);$i++){
				if($i==0) $active = 'active';
				else $active='';
				echo '<li ><a data-target="#carousel-food" href="#page6" data-slide-to="'.$i.'" class="submenu-item '.$active.'">';
				echo strtoupper($foodImages[$i]['FoodImage']['title'] );
				echo '</a></li>';
				if($i+1<count($foodImages)){
					echo '<li class="navbar-dot">&#8226;</li>';
				}
			}
		?>

	</ul>
</div>
<style type="text/css">
html, body, #images, #gif-test{ width: 100% }
</style>
<div id="images">
	<div class="pageblock" id="page1" style="height:1200px;"></div>
	<div class="pageblock" id="page2" style="height:700px; ">
		<div id="gif-test" style="width: 100%;  height: 700px; overflow: hidden; text-align: center;">
			<img src="/img/bg2.gif" style="width:100%;">
		</div>
	</div>
	<div class="pageblock" id="page3" style="height:1500px;"></div>
	<div class="pageblock" id="page4" style="height:1000px;"></div>
	<div class="pageblock" id="page5" style="height:1200px;"></div>
	<div class="pageblock" id="page6" style="height:1200px;"></div>
</div>

<div id="wrapper">

	<div id="home-wrapper">
		<div id="home-text" class="localscroll">
		MR. M WANTS <br/>
		YOU TO GO DOWN... <br/>
		...FOR RELAXING TIMES.<br/><br/>
		<div style="height: 100px; position:relative">
		<a href="#page2" id="the-down-arrow" ><img style="margin: 0" id="therowimage" src="/img/arrow-home-page.png"/></a>
		</div>
		</div>


			<div id="social-bar" class="pull-left">
				<div id="social-bar-text" style="">99 CHAPEL ST, Windsor, 3181 &#8226; 9529 5999  </div>
				<div class="social-icon" ><a target="_blank" href="http://instagram.com/mrmiyagimelbourne"><img src="/img/social-instagram.png"></a></div>
				<div class="social-icon"><a target="_blank" href="https://twitter.com/MrMiyagiMelb"><img src="/img/social-twitter.png"></a></div>
				<div class="social-icon"><a target="_blank" href="https://www.facebook.com/MrMiyagiMelbourne"><img src="/img/social-facebook.png"></a></div>

			</div>


		</div>
		
		<div id="suntory-wrapper">
			<div id="suntory-text">
				For relaxing times, make it Suntory time...
			</div>

			<div id="suntory-logo">
				<img src="/img/suntory-logo.png">
			</div>
		</div>

		<div id="menu-wrapper">
		
				<div id="menu-image">

					<div id="carousel-food" class="carousel slide" data-ride="carousel" data-interval="">
						<ol class="carousel-indicators">
							<?php for($i=0;$i<count($foodImages);$i++){
								if($i==0) $active = 'active';
								else $active='';
								echo '<li data-target="#carousel-food" data-slide-to="'.$i.'" class=" '.$active.' "></li>';
							} ?>
						</ol>

						<div class="carousel-inner">
							<?php
							$i=0;
							foreach ($foodImages as $image){
								if($i==0) $active = 'active';
								else $active='';
								echo '<div class="item '.$active.'" data-id="'.$i.'">';
								echo '<img data-src="/img/foods/'.$image['FoodImage']['filename'].'" alt="900x500" src="/img/foods/'.$image['FoodImage']['filename'].'" style="margin:0 auto;">';
								echo '  </div>';
								$i++;
							} ?>
						</div>
					</div>
				</div>
<script type="text/javascript">
$("#carousel-food").on('slide.bs.carousel', function (event) {
	var active = $(event.target).find('.carousel-inner > .item.active');
	var from = active.index();
	var next = $(event.relatedTarget);
	var to = next.index();
	var direction = event.direction;
	setSubmenuTo(next.attr('data-id'));
});
function setSubmenuTo(id){
	$('.submenu-item').removeClass('active');
	$('.submenu-item[data-slide-to="'+id+'"]').addClass('active');
}
</script>
		</div>
		
		<div id="photo-wrapper">




<div id="carousel-example-captions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
<?php for($i=0;$i<count($galleryImages);$i++){
	if($i==0) $active = 'active';
		else $active='';
	echo '<li data-target="#carousel-example-captions" data-slide-to="'.$i.'" class="'.$active.'"></li>';
} ?>
        </ol>
        <div class="carousel-inner">
<?php
	$i=0;
	foreach ($galleryImages as $image){
		if($i==0) $active = 'active';
		else $active='';
		echo '<div class="item '.$active.'">';
		echo '<img data-src="/img/hearts/'.$image['GalleryImage']['filename'].'" alt="900x500" src="/img/hearts/'.$image['GalleryImage']['filename'].'" style="margin:0 auto;">';
		echo '  </div>';
		$i++;
	} ?>


          
        </div>
<!--         <a class="left carousel-control" href="#carousel-example-captions" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-captions" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a> -->
      </div>



			<div id="left-arrow"><a href="#carousel-example-captions" data-slide="prev" class=""><img src="/img/left-arrow-gallery.png"/></a></div>
			<div id="right-arrow"><a href="#carousel-example-captions" data-slide="next" class=""><img src="/img/right-arrow-gallery.png"/></a></div>

			
		</div>

		<div id="form-wrapper">
			<div id="form-text">
				<span class="blue-text">JAPANESE FOOD &amp; LIQUOR</span><br/>
				DINNER WED TO SUN<br/>
				<a href="tel:+1-800-555-5555" style="color: #fff;">(03) 9529 5999</a><br/>
				<a href="mailto:info@mrmiyagi.com.au" style="color: #fff;">INFO@MRMIYAGI.COM.AU</a><br/>
				<a href="http://maps.google.com/maps?hl=en&amp;q=99+CHAPEL+ST.+WINDSOR,+3181+australia" style="color: #fff;">99 CHAPEL ST. WINDSOR, 3181</a><br/>
				<span class="blue-text">STAY IN TOUCH WITH MR. M. <BR>PUT YOURSELF IN HIS LITTLE <BR> BLACK BOOK HERE:</span>
			</div>
			<div id="form-expect">
				EXPECT DRUNK EMAILS.
			</div>

			<div id="form-form">
				<?php
				echo $this->Form->create('FormContact', array(
					'id'=>'cform',
				));

				echo $this->Form->input('email', array(
					'label'=>false,
					'placeholder'=>'EMAIL ADDRESS HERE.',
					'type'=>'text',
					'div'=>false,
					'style'=>'width: 740px; margin-bottom: 15px; padding: 10px 20px;',
					'class'=>'required input email',
					'id'=>'fieldEmail',
				));

				echo $this->Form->submit('GO', array(
					'label'=>false, 
					'class'=>'',
					'div'=>false,
					'style'=>'background-color: #00D9FF; margin-left: 12px; padding: 10px; border: 0;',
				));
				echo $this->Form->end();
				?>
				</div>
		</div>

		<div id="about-wrapper">
			<div id="about-text">


<div id="jquery_jplayer_1" class="jp-jplayer" style="display:none;"></div>
  <div id="jp_container_1" class="jp-audio" style="display:none;">
    <div class="jp-type-single">
      <div class="jp-gui jp-interface">
        <ul class="jp-controls">
          <li><a href="javascript:;" class="jp-play" tabindex="1">play</a></li>
          <li><a href="javascript:;" class="jp-pause" tabindex="1">pause</a></li>
          <li><a href="javascript:;" class="jp-stop" tabindex="1">stop</a></li>
          <li><a href="javascript:;" class="jp-mute" tabindex="1" title="mute">mute</a></li>
          <li><a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute">unmute</a></li>
          <li><a href="javascript:;" class="jp-volume-max" tabindex="1" title="max volume">max volume</a></li>
        </ul>
        <div class="jp-progress">
          <div class="jp-seek-bar">
            <div class="jp-play-bar"></div>
          </div>
        </div>
        <div class="jp-volume-bar">
          <div class="jp-volume-bar-value"></div>
        </div>
        <div class="jp-time-holder">
          <div class="jp-current-time"></div>
          <div class="jp-duration"></div>
          <ul class="jp-toggles">
            <li><a href="javascript:;" class="jp-repeat" tabindex="1" title="repeat">repeat</a></li>
            <li><a href="javascript:;" class="jp-repeat-off" tabindex="1" title="repeat off">repeat off</a></li>
          </ul>
        </div>
      </div>
      <div class="jp-title">
        <ul>
          <li>Bubble</li>
        </ul>
      </div>
      <div class="jp-no-solution">
        <span>Update Required</span>
        To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
      </div>
    </div>
  </div>

			</div>
		</div>
		
</div>

<script type="text/javascript">


    $(document).ready(function(){
    	// DETECT SAFARI
var ua = navigator.userAgent.toLowerCase();
if(ua.indexOf('ipod')!=-1 || ua.indexOf('ipad')!=-1 || ua.indexOf('iphone')!=-1){
	$('#jquery_jplayer_1').remove();
}else{
	var obj = {oga: "/img/yamanote.ogg"};
var ext = 'oga';
if (ua.indexOf('safari')!=-1){ 
	obj={mp3: "/img/yamanote.mp3"}
	var ext = 'mp3';
}
// DETECT IE
var ie = (function(){
    var undef,
        v = 3,
        div = document.createElement('div'),
        all = div.getElementsByTagName('i');
    while (
        div.innerHTML = '<!--[if gt IE ' + (++v) + ']><i></i><![endif]-->',
        all[0]
    );
    return v > 4 ? v : undef;
}());
if(ie===undefined){}else{
	obj={mp3: "/img/yamanote.mp3"}
	var ext = 'mp3';
}
      $("#jquery_jplayer_1").jPlayer({
        ready: function () {

          $(this).jPlayer("setMedia", obj).jPlayer("play");
        },
        swfPath: "/js",
        supplied: ext
      });
      $("#jquery_jplayer_1").jPlayer( "play");
}

    });
  </script>

