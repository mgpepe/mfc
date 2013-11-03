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
			<li ><a id="menu-link-contactus" href="#page5" >CONTACT US</a></li>
		 <li class="navbar-dot">&#8226;</li>
			<li ><a id="menu-link-about" href="#page6" >ABOUT</a></li>
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
			<li ><a id="menu-link-contactus" href="#page5" >CONTACT</a></li>
			<li ><a id="menu-link-about" href="#page6" >ABOUT</a></li>
		</ul>
	</div><!-- /.navbar-collapse -->
	
</div>

<div class="navbar navbar-default navbar-fixed-top" id="food-subnav" style="margin-top:-100px;">
	<ul  class="nav navbar-nav" id="food-nav-background">
		<?php
			for($i=0;$i<count($foodImages);$i++){
				if($i==0) $active = 'active';
				else $active='';
				echo '<li ><a id="menu-link-about" data-target="#carousel-food" href="#page6" data-slide-to="'.$i.'" class="'.$active.'">';
				echo strtoupper($foodImages[$i]['FoodImage']['title'] );
				echo '</a></li>';
				if($i+1<count($foodImages)){
					echo '<li class="navbar-dot">&#8226;</li>';
				}
			}
		?>
		<!-- <li ><a id="menu-link-about" href="#page6" >DINNER</a></li>
		<li class="navbar-dot">&#8226;</li>
		<li ><a id="menu-link-about" href="#page6" >LATE NIGHT</a></li>
		<li class="navbar-dot">&#8226;</li>
		<li ><a id="menu-link-about" href="#page6" >COCKTIALS</a></li> -->
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
	<div class="pageblock" id="page6" style="height:1000px;"></div>
</div>

<div id="wrapper">

	<div id="home-wrapper">
		<div id="home-text" class="localscroll">
			<br/>
		MR. M WANTS <br/>
		YOU TO GO DOWN... <br/>
		...FOR RELAXING TIMES.<br/><br/>
		<div style="height: 100px; position:relative">
		<a href="#page2" id="the-down-arrow" ><img style="margin: 0" id="therowimage" src="/img/arrow-home-page.png"/></a>
		</div>
		</div>


			<div id="social-bar" class="pull-left">
				<div id="social-bar-text" style="">99 CHAPEL ST, Windsor, 3181 &#8226; 9529 9999 &#8226; EMAIL US &#8226; JOBS </div>
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

					<div id="carousel-food" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<?php for($i=0;$i<count($foodImages);$i++){
								if($i==0) $active = 'active';
								else $active='';
								echo '<li data-target="#carousel-food" data-slide-to="'.$i.'" class="'.$active.'"></li>';
							} ?>
						</ol>

						<div class="carousel-inner">
							<?php
							$i=0;
							foreach ($foodImages as $image){
								if($i==0) $active = 'active';
								else $active='';
								echo '<div class="item '.$active.'">';
								echo '<img data-src="/img/foods/'.$image['FoodImage']['filename'].'" alt="900x500" src="/img/foods/'.$image['FoodImage']['filename'].'" style="margin:0 auto;">';
								echo '  </div>';
								$i++;
							} ?>
						</div>
					</div>
				</div>
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



			<div id="el-image"></div>
			<div id="left-arrow"><a href="#carousel-example-captions" data-slide="prev" class=""><img src="/img/left-arrow-gallery.png"/></a></div>
			<div id="right-arrow"><a href="#carousel-example-captions" data-slide="next" class=""><img src="/img/right-arrow-gallery.png"/></a></div>

			
		</div>

		<div id="form-wrapper">
			<div id="form-text">
				MR. M ALWAYS HAS TIME FOR YOU. PUT YOURSELF IN HIS LITTLE BACK BOOK HERE.
			</div>
			<div id="form-expect">
				EXPECT DRUNK EMAILS.
			</div>

			<div id="form-form">
				<?php
				echo $this->Form->create('FormContact', array(
					'id'=>'cform',
				));
				echo $this->Form->input('name', array(
					'id'=>'theformname',
					'label'=>false,
					'placeholder'=>'NAME GOES HERE.',
					'style'=>'width: 840px; margin-bottom: 15px; padding: 10px 20px;',
					'class'=>'inputx'			
				));
				echo $this->Form->input('email', array(
					'label'=>false,
					'placeholder'=>'EMAIL GOES HERE.',
					'type'=>'text',
					'style'=>'width: 840px; margin-bottom: 15px; margin-left: 88px;padding: 10px 20px;',
					'class'=>'required input email'
				));
				echo $this->Form->input('message', array(
					'label'=>false,
					'placeholder'=>'HAPPY WORDS GO HERE.',
					'style'=>'width: 840px; margin-bottom: 15px; margin-left: 25px; height: 260px;padding: 10px 20px;',
					'class'=>'inputx'			
				));
				echo $this->Form->submit('GO', array(
					'label'=>false, 
					'class'=>'',
					'style'=>'width: 700px; background-color: #EC2F95; margin-left: 100px; border: 0;',
				));
				echo $this->Form->end();
				?>
				</div>
		</div>

		<div id="about-wrapper">
			<div id="about-text">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus cursus, lectus in luctus rutrum, ligula velit mollis quam, ut porta orci orci sed metus. Integer ac eleifend tellus, eget molestie elit. Pellentesque volutpat nunc eu purus ullamcorper placerat. Sed tempor sapien et nunc faucibus, in cursus massa aliquet. Integer ut velit ut lectus tempus aliquam vitae ac nunc. Suspendisse viverra, ligula in faucibus tempor, massa nulla egestas ligula, a viverra nisl nisi quis purus. Sed eu magna metus. Sed convallis rhoncus dui in scelerisque. Morbi gravida molestie orci, vitae gravida nibh. Integer a adipiscing dui. Cras quis ornare augue, in ullamcorper dui. Suspendisse ac augue faucibus mauris pellentesque euismod. Phasellus non est velit. Aliquam erat volutpat.

Fusce quis nisl id ligula congue sollicitudin. Suspendisse sit amet ultrices sem, ut aliquet sem. Aliquam eu nulla lacinia, tempus lorem ac, malesuada diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dignissim pharetra est, ac eleifend nunc consequat et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam faucibus magna eu eros pellentesque, eget rhoncus quam pharetra. Cras vehicula, lacus nec molestie blandit, ligula eros elementum tortor, ac malesuada velit risus ut erat. Nulla facilisi. Etiam a interdum risus. Nullam id faucibus urna, sagittis feugiat dolor. Suspendisse sem quam, semper suscipit auctor eget, auctor id dui. Phasellus faucibus neque metus, vel placerat sem cursus condimentum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed quis purus quis lacus vehicula viverra. Donec vel libero molestie, commodo nibh in, pulvinar urna.


			</div>
		</div>
</div>

<script>
// $('.carousel').carousel();
$(function(){
	
});

</script>