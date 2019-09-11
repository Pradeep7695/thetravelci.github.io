<?php $page = 'dashboard'; include APPPATH ."views/admin/template/head.php";?>

<?php include APPPATH ."views/admin/template/navigation.php";?>

<?php include APPPATH ."views/admin/template/header.php";?>

<!-- ------------------maine content start here --------------- -->

<ul class="breadcrumb">
	<li><a href="#">Home</a></li>
	<li class="active">Dashboard</li>
</ul>

<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-4">

            <!-- START WIDGET MESSAGES -->
            <div class="widget widget-default widget-item-icon">
                <div class="widget-item-left">
                    <span class="fa fa-beach"></span>
                </div>
                <div class="widget-data">
                    <div class="widget-int num-count">48</div>
                    <div class="widget-title">Most Popular Tour</div>
                </div>
                <div class="widget-controls">
                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                </div>
            </div>
            <!-- END WIDGET MESSAGES -->

        </div>
        <div class="col-md-4">

            <!-- START WIDGET REGISTRED -->
            <div class="widget widget-default widget-item-icon">
                <div class="widget-item-left">
                    <span class="fa fa-plane"></span>
                </div>
                <div class="widget-data">
                    <div class="widget-int num-count"><?= $this->db->count_all('domestic_package')?></div>
                    <div class="widget-title">Domestic Tour Package</div>
                </div>
                <div class="widget-controls">
                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                </div>
            </div>
            <!-- END WIDGET REGISTRED -->

        </div>

        <div class="col-md-4">

            <!-- START WIDGET MESSAGES -->
            <div class="widget widget-default widget-item-icon">
                <div class="widget-item-left">
                    <span class="fa fa-plane"></span>
                </div>
                <div class="widget-data">
                    <div class="widget-int num-count">48</div>
                    <div class="widget-title">International Tour Package</div>
                </div>
                <div class="widget-controls">
                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                </div>
            </div>
            <!-- END WIDGET MESSAGES -->

        </div>

    </div>
</div>


<!-- ---------------..//end main content ----------------- -->

<?php include APPPATH ."views/admin/template/footer.php";?>
