

	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<?php echo form_open_multipart('frontend/service', array('class'=>'form-horizontal padding-15', 'id' => 'add-service-form'), array('item_id' => $item_id, 'duration' => $duration, 'booking_id' => $booking_id, 'return' => $_SERVER['HTTP_REFERER']));?>
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Book Now</h4>
			</div>
			<div class="modal-body">
				
				
				
				<strong class="headling"><?php echo $title;?></strong>
				<?php echo $description;?>
				<p>Price : <b>&#8369;<?php echo $amount;?></b></p>
				<p>Duration : <b><?php echo $duration;?> minutes</b></p>
				<p>
					<div class="alert alert-warning" role="alert">
						<b><i class="fa fa-exclamation"></i> EXTRA CHARGES APPLIES!</b>
					</div>
				</p>
				<div class="form-group bg-success" style="padding: 10px;">
					<div class="rows">
						<div class="col-lg-6 col-md-6 col-xs-6 col-sm-6">
							<?php echo form_dropdown('date', $dates, '', 'class="form-control required"');?>
						</div>
						<div class="col-lg-6 col-md-6 col-xs-6 col-sm-6">
							<?php echo form_dropdown('time', array(), '', 'class="form-control required"');?>
						</div>
					</div>
				</div>
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-success" name="add-service-confirm">Confirm</button>
			</div>
			<?php echo form_close();?>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->