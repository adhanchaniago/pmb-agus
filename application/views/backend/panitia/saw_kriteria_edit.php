<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title">
            		<i class="entypo-plus-circled"></i>
					add_librarian
            	</div>
            </div>

			<div class="panel-body">
				
                <?php echo form_open(site_url('panitia/librarian/create') , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
                    
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">name</label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="name" data-validate="required" data-message-required="value_required"  autofocus
                            	value="">
						</div>
					</div>
                    
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">email</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="email" value="" data-validate="required" data-message-required="value_required">
						</div>
					</div>
                    
                    <div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-info">submit</button>
						</div>
					</div>

                <?php echo form_close();?>

            </div>
        </div>
    </div>
</div>