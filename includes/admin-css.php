<?php $wpspf_custom_css 	= (get_option('wpspf_custom_css')) ? get_option('wpspf_custom_css') : ''; ?>
<div id="tab5" class="tab">
	<div class="container-fluid" style="text-align:center;">
    	<div class="form-group row">
		    <label for="wpspf_custom_css" class="col-sm-12 col-form-label col-form-label-sm">
		    	<?php _e('Additional CSS, no need to put \'style\' tag.','wpspf'); ?>
			</label>
			
		    <div class="col-sm-12">
		        <textarea rows="10" cols="100" name="wpspf_custom_css"><?php echo $wpspf_custom_css; ?></textarea>
		    </div>
		</div>
		<div class="form-group row">
            <div class="col-sm-4">
                <input type="submit" name="submit" id="submit" class="btn btn-primary btn-lg submitbtn" value="Save changes">
			</div>
			<div class="col-sm-8"></div>
        </div>
	</div>
</div>


