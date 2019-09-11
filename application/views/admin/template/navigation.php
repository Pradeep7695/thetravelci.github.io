<div class="page-sidebar">
	<!-- START X-NAVIGATION -->
	<ul class="x-navigation">
		<li class="xn-logo">
			<a href="<?= base_url('admin/dashboard')?>">The Travel Fare</a>
			<a href="#" class="x-navigation-control"></a>
		</li>
		<li class="xn-profile">
			<a href="#" class="profile-mini">
				<img src="<?= base_url('assets/admin/img/no-image.jpg')?>" alt="The Travel fare"/>
			</a>
			<div class="profile">
				<div class="profile-image">
					<img src="<?= base_url('assets/admin/img/no-image.jpg')?>" alt="The Travel fare"/>
				</div>
				<div class="profile-data">
					<div class="profile-data-name">Super Admin</div>
				</div>

			</div>
		</li>

		<li class="<?php if ($page=='dashboard'){echo 'active';}?>">
			<a href="<?= base_url('admin/dashboard')?>"><span class="fa fa-dashboard"></span> <span class="xn-text">Dashboard</span></a>
		</li>

		<li class="<?php if ($page=='slider'){echo 'active';}?> xn-openable">
			<a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">Slider</span></a>
			<ul>
				<li><a href="<?= base_url('dashboard/add_slider')?>">Add Slider</a></li>
				<li><a href="<?= base_url('dashboard/show_slider')?>">Show Slider</a></li>
				<li><a href="<?= base_url('dashboard/show_video_slider')?>">Show Video Slider</a></li>
			</ul>
		</li>

		<li class="<?php if ($page=='popular-tour'){echo 'active';}?> xn-openable">
			<a href="#"><span class="fa fa-plane"></span> <span class="xn-text">Most Popular Tours</span></a>
			<ul>
				<li><a href="<?= base_url('dashboard/add_popular_tour')?>">Add Popular Tour</a></li>
				<li><a href="<?= base_url('dashboard/show_popular_tour')?>">Show Popular Tour</a></li>
			</ul>
		</li>
		
	<!--	<li class="<?php if ($page=='tour-package'){echo 'active';}?> xn-openable">
			<a href="#"><span class="fa fa-plane"></span> <span class="xn-text">Tour Packages</span></a>
			<ul>
				<li><a href="<?= base_url('dashboard/add_tour_package')?>">Add Tour Packages</a></li>
				<li><a href="<?= base_url('dashboard/show_tour_package')?>">Show Tour Packages</a></li>
			</ul>
		</li>-->
		
		<li class="<?php if ($page=='domestic'){echo 'active';}?> xn-openable">
			<a href="#"><span class="fa fa-plane"></span> <span class="xn-text">Domestic Packages</span></a>
			<ul>
				<li><a href="<?= base_url('dashboard/add_domestic_package')?>">Add Domestic Packages</a></li>
				<li><a href="<?= base_url('dashboard/show_domestic')?>">Show Domestic Packages</a></li>
			</ul>
		</li>

		<li class="<?php if ($page=='international'){echo 'active';}?> xn-openable">
			<a href="#"><span class="fa fa-plane"></span> <span class="xn-text">International Packages</span></a>
			<ul>
				<li><a href="<?= base_url('dashboard/add_international_package')?>">Add International Packages</a></li>
				<li><a href="<?= base_url('dashboard/show_international_package')?>">Show International Packages</a></li>
			</ul>
		</li>

		<li class="<?php if ($page=='img'){echo 'active';}?> xn-openable">
			<a href="#"><span class="fa fa-image"></span> <span class="xn-text">Image Gallery</span></a>
			<ul>
				<li><a href="<?= base_url('dashboard/add_image')?>">Add Image</a></li>
				<li><a href="<?= base_url('dashboard/show_image')?>">Show Image</a></li>
			</ul>
		</li>
		
		<li class="<?php if ($page=='visa'){echo 'active';}?> xn-openable">
			<a href="#"><span class="fa fa-cc-visa"></span> <span class="xn-text">Visa</span></a>
			<ul>
				<li><a href="<?= base_url('dashboard/add_visa')?>">Add Visa</a></li>
				<li><a href="<?= base_url('dashboard/show_visa')?>">Show Visa</a></li>
			</ul>
		</li>
		
<!-- -----------pages ------- -->

		<!--<li class="<?php if ($page=='about'){echo 'active';}?> xn-openable">
			<a href="#"><span class="fa fa-edit"></span> <span class="xn-text">About Us</span></a>
			<ul>
			<!--	<li><a href="<?= base_url('dashboard/add_aboutUs')?>">Add About Us</a></li>-->
			<!--	<li><a href="<?= base_url('dashboard/show_aboutUs')?>">Show About Us</a></li>
			</ul>
		</li>-->

		<li class="<?php if ($page=='contact'){echo 'active';}?> xn-openable">
			<a href="#"><span class="fa fa-location-arrow"></span> <span class="xn-text">Contact Us</span></a>
			<ul>
			<!--	<li><a href="<?= base_url('dashboard/add_contactUs')?>">Add Contact Us</a></li>-->
				<li><a href="<?= base_url('dashboard/show_contactUs')?>">Show Contact Us</a></li>
			</ul>
		</li>


		<li class="<?php if ($page=='testimonial'){echo 'active';}?> xn-openable">
			<a href="#"><span class="fa fa-microphone"></span> <span class="xn-text">Testimonial</span></a>
			<ul>
				<!--<li><a href="<?= base_url('dashboard/add_testimonial')?>">Add Testimonial</a></li>-->
				<li><a href="<?= base_url('dashboard/show_testimonial')?>">Show Testimonial</a></li>
			</ul>
		</li>

	

		<!--<li class="<?php /*if ($page=='car'){echo 'active';}*/?> xn-openable">
			<a href="#"><span class="fa fa-car"></span> <span class="xn-text">Car Rent</span></a>
			<ul>
				<li><a href="<?/*= base_url('dashboard/add_car')*/?>">Add Car</a></li>
				<li><a href="<?/*= base_url('dashboard/show_car')*/?>">Show Car</a></li>
			</ul>
		</li>

		<li class="<?php /*if ($page=='foreign'){echo 'active';}*/?> xn-openable">
			<a href="#"><i class="fa fa-retweet"></i> <span class="xn-text">Foreign exchange</span></a>
			<ul>
				<li><a href="<?/*= base_url('dashboard/add_foreignExchange')*/?>">Add Foreign exchange</a></li>
				<li><a href="<?/*= base_url('dashboard/show_foreignExchange')*/?>">Show Foreign exchange</a></li>
			</ul>
		</li>

		<li class="<?php /*if ($page=='travel'){echo 'active';}*/?> xn-openable">
			<a href="#"><span class="fa fa-tag"></span> <span class="xn-text">Travel Insurance</span></a>
			<ul>
				<li><a href="<?/*= base_url('dashboard/add_travel_Insurance')*/?>">Add Travel Insurance</a></li>
				<li><a href="<?/*= base_url('dashboard/showTravelInsurance')*/?>">Show Travel Insurance</a></li>
			</ul>
		</li>
-->
		<li class="<?php if ($page=='privacy'){echo 'active';}?> xn-openable">
			<a href="#"><i class="fa fa-shield"></i> <span class="xn-text">Privacy Policy</span></a>
			<ul>
				<!--<li><a href="<?= base_url('dashboard/add_privacy_policy')?>">Add Privacy Policy</a></li>-->
				<li><a href="<?= base_url('dashboard/show_privacy_policy')?>">Show Privacy Policy</a></li>
			</ul>
		</li>

		<li class="<?php if ($page=='term'){echo 'active';}?> xn-openable">
			<a href="#"><i class="fa fa-pencil"></i> <span class="xn-text">Terms & Condition</span></a>
			<ul>
				<!--<li><a href="<?= base_url('dashboard/add_term_condition')?>">Add Terms & Condition</a></li>-->
				<li><a href="<?= base_url('dashboard/show_term_condition')?>">Show Terms & Condition</a></li>
			</ul>
		</li>










	</ul>
	<!-- END X-NAVIGATION -->
</div>
