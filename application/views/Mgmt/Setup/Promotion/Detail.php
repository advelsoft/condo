<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div id="page-wrapper">
	<div class="row"></div>
	<div class="row">
		<div class="col-lg-12">
			<h4 class="page-top">
				<a href="<?php echo base_url()."index.php/Mgmt/Home/Index";?>">
					<span class="glyphicon glyphicon-arrow-left"></span>&nbsp;Back to List
				</a>
			</h4>
		</div>
	</div>
	<div class="row row-header">
		<div class="col-md-10">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4><?php echo $promoRecord[0]->Title; ?></h4>
				</div>
				<div class="panel-body">
					<dl class="dl-horizontal">
						<div class="col-md-2">Description</div>
						<div class="col-md-10"><?php echo $promoRecord[0]->Description; ?></div>
						<span class="text-danger"><?php echo form_error('Description'); ?></span>
					</dl>
				</div>
				<div class="panel-footer"></div>
			</div>
		</div>
	</div>
</div>