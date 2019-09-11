<div class="navigation-menu">
	<div class="container">
		<div class="menu-mobile-effect navbar-toggle button-collapse" data-activates="mobile-demo">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</div>
		<div class="width-logo sm-logo">
			<a href="<?= base_url('/')?>" title="Travel" rel="home">
				<img src="<?= base_url('assets/front/images/logo/home-travel-logo.png')?>" alt="Logo" class="logo_transparent_static">
				<img src="<?= base_url('assets/front/images/logo/home-travel-logo.png')?>" alt="Sticky logo" class="logo_sticky">
			</a>
		</div>
		<nav class="width-navigation tp-bar">
			<ul class="nav navbar-nav menu-main-menu side-nav" id="mobile-demo">
			
				<li class="<?php if ($page == 'home'){echo 'current-menu-ancestor';}?> current-menu-parent">
					<a href="<?= base_url('/')?>">Home</a>
				</li>
			
			<li class="<?php if ($page == 'about'){echo 'current-menu-ancestor';}?>"><a href="<?= base_url('about_us')?>">About Us</a></li>
				
				<li class="<?php if ($page == 'domestic'){echo 'current-menu-ancestor';}?> menu-item-has-children">
					<a href="#">Packages</a>
					<ul class="sub-menu">
						<li ><a href="<?= base_url('domestic_package')?>"><i class="fa fa-angle-right"></i> Domestic Packages</a></li>
						<li><a href="<?= base_url('international_package')?>"><i class="fa fa-angle-right"></i> International Packages</a></li>
					</ul>
				</li>
                <li class="<?php if ($page == 'service'){echo 'current-menu-ancestor';}?> menu-item-has-children">
                    <a href="#">Our services</a>
                    <ul class="sub-menu">
                        <li ><a href="<?= base_url('visa')?>"><i class="fa fa-angle-right"></i> Visa</a></li>
                        <li><a href="<?= base_url('online_booking')?>"><i class="fa fa-angle-right"></i> flight, Hotel, Railway, Bus</a></li>
                        <li><a href="<?= base_url('contact_us')?>"><i class="fa fa-angle-right"></i> Car on rent</a></li>
                        <li><a href="<?= base_url('contact_us')?>"><i class="fa fa-angle-right"></i> Foreign exchange</a></li>
                        <li><a href="<?= base_url('contact_us')?>"><i class="fa fa-angle-right"></i> Travel Insurance</a></li>
                    </ul>
                </li>
				<li class="<?php if ($page == 'gallery'){ echo 'current-menu-ancestor';}?>"><a href="<?= base_url('gallery')?>">Gallery</a></li>
				


				<li class="<?php if ($page == 'contactus'){echo 'current-menu-ancestor';}?>"><a href="<?= base_url('contact_us')?>">Contact Us</a></li>

			</ul>
		</nav>
	</div>
  </div>
</header>
