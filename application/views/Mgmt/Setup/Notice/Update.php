<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div id="page-wrapper">
    <div class="row"></div>
	<div class="row">
		<div class="col-lg-12">
			<h4 class="page-top">
				<a href="<?php echo base_url()."index.php/Common/Notice/Index";?>">
					<span class="glyphicon glyphicon-arrow-left"></span>&nbsp;Back to List
				</a>
			</h4>
		</div>
	</div>
	<div class="row row-header">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4>Notice Board</h4>
				</div>	
				<?php $attributes = array("id" => "noticeform", "name" => "noticeform");
				echo form_open_multipart("index.php/Common/Notice/Update/".$noticeID, $attributes);?>
				<div class="panel-body">
					<div class="form-horizontal">
						<div class="form-group">
							<label for="Title" class="create-label col-md-2">Title</label>
							<div class="col-md-10">
								<input id="Title" name="Title" placeholder="Title" type="text" class="form-control" value="<?php echo $noticeRecord[0]->Title; ?>" />
								<span class="text-danger"><?php echo form_error('Title'); ?></span>
							</div>
						</div>
						<div class="form-group">
							<label for="NoticeDate" class="create-label col-md-2">Notice Date</label>
                            <div class="col-md-4">
								<input id="NoticeDate" name="NoticeDate" placeholder="Notice Date" type="text" class="form-control" value="<?php echo date("d/m/Y", strtotime($noticeRecord[0]->NoticeDate));?>" />
								<span class="text-danger"><?php echo form_error('NoticeDate'); ?></span>
							</div>
							<label for="DateTo" class="create-label col-md-2">Date To</label>
                            <div class="col-md-4">
								<input id="DateTo" name="DateTo" placeholder="Date To" type="text" class="form-control" value="<?php echo date("d/m/Y", strtotime($noticeRecord[0]->DateTo));?>" />
								<span class="text-danger"><?php echo form_error('DateTo'); ?></span>
							</div>
						</div>
						<div class="form-group">
							<label for="NewsType" class="create-label col-md-2">Summary *(Maxlength:300)</label>
							<div class="col-md-10">
								<textarea class="form-control" id="Summary" name="Summary" placeholder="Summary (Maxlength:300)" rows="4" maxlength="300"><?php echo $noticeRecord[0]->Summary?></textarea>
								<span class="text-danger"><?php echo form_error('Summary'); ?></span>
							</div>
						</div>
						<div class="form-group">
							<label for="NewsType" class="create-label col-md-2">Description</label>
							<div class="col-md-10">
								<textarea class="form-control" id="Description" name="Description" rows="4"><?php echo $noticeRecord[0]->Description?></textarea>
								<span class="text-danger"><?php echo form_error('Description'); ?></span>
							</div>
						</div>
					</div>
				</div>
				<div class="panel-footer">
					<input type="submit" value="Save" class="submit" />
				</div>
				<?php echo form_close(); ?>
				<?php echo $this->session->flashdata('msg'); ?>
			</div>
		</div>
	</div>
</div>
<script>
	$(function() {
		$('#Description').summernote({
			height: 250,   //set editable area's height
			codemirror: { // codemirror options
				theme: 'monokai'
			}
		});
    });
</script>