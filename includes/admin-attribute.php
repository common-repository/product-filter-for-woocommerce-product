<?php
global $wpdb;
$attribute_taxonomies = $wpdb->get_results( "SELECT * FROM " . $wpdb->prefix . "woocommerce_attribute_taxonomies WHERE attribute_name != '' ORDER BY attribute_name ASC;" );
if(!empty($attribute_taxonomies))
{
	$wpspf_filter_by_pr_attr  = (get_option('wpspf_filter_by_pr_attr')) ? get_option('wpspf_filter_by_pr_attr') : 'enable';
	$wpspf_attrs = get_option('wpspf_attr') ? get_option('wpspf_attr') : '';
	?>
	<link rel='stylesheet' href='<?php echo WPSPF_AST_PATH.'bootstrap.css';?>'>
    <script type='text/javascript' src='<?php echo WPSPF_AST_PATH.'bootstrap.js'; ?>'></script>
	<div id="tab2" class="tab">
		<div class="container-fluid">
			<input type="hidden" id="wpspf_number_of_taxonomy" value="<?php echo count($attribute_taxonomies); ?>"/>
		    <div class="container-fluid">
		    	<div class="form-group row">
    				<label for="wpspf_filter_by_pr_attr" class="col-sm-4 col-form-label col-form-label-sm">
		    			<?php _e('Filter By Product Attribute','wpspf'); ?>
		    		</label>
		    		<div class="col-sm-8">
		                <select name="wpspf_filter_by_pr_attr" class="col-sm-10 col-form-label col-form-label-sm">
		                    <option value="enable" <?php if($wpspf_filter_by_pr_attr=='enable'){echo "selected";} ?>>Enable</option>
		                    <option value="disable" <?php if($wpspf_filter_by_pr_attr=='disable'){echo "selected";} ?>>Disable</option>
		                </select>
		                <div class="select__arrow"></div>
		            </div>
		        </div>
		        <div class="form-group row">
		        	<label for="wpspf_filter_attr_title" class="col-sm-4 col-form-label col-form-label-sm">
		            	<?php _e('Attribute Settings','wpspf'); ?>
		            </label>
		            <div class="col-sm-8" id="wpspf_filter_attr_txt" style="text-align: left;">
						<a id="add_one_attr"><?php _e('Add one attribute','wpspf'); ?></a> into filter sidebar.<br/>
						<a id="add_all_attr"><?php _e('Add all attributes','wpspf'); ?></a> into filter sidebar. <span class="wpspf-buy-me"><?php _e('Available in ','wpspf'); ?> <a href="https://www.wpsuperiors.com/woocommerce-product-filter/" target="_blank"><?php _e('Premium Version','wpspf'); ?></a></span>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-2"></div>
					<div class="col-sm-8">
						<span id="wps_pf_wait_message" style="display:none;">
							<?php _e('Please wait your attribute settings are opening...','wpspf'); ?>
							</span>
						<div class="panel-group" id="wpspf_attr_filters" role="tablist" aria-multiselectable="true">
							<?php $counter = 1; ?>
							<?php if($wpspf_attrs != ''){ ?>
								<?php foreach($wpspf_attrs as $attr){ ?>
									<?php
										global $wpdb;
	    								$attribute_taxonomies = $wpdb->get_results( "SELECT * FROM " . $wpdb->prefix . "woocommerce_attribute_taxonomies WHERE attribute_name != '' ORDER BY attribute_name ASC;" );
										foreach($attribute_taxonomies as $atrr_tax){
											if($attr['tax_id'] == $atrr_tax->attribute_id){
												$name = $atrr_tax->attribute_label;
											}
										}
									?>
									<div class="col-sm-12" style="margin-bottom: 0;">
										<div class="panel panel-default" id="panel<?php echo $counter;?>">
											<div class="panel-heading" role="tab" id="heading<?php echo $counter;?>">
												<h4 class="panel-title">
													<a class="collapsed" id="panel-lebel<?php echo $counter;?>" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $counter;?>" aria-expanded="false" aria-controls="collapse<?php echo $counter;?>">Attribute: <?php echo $name; ?></a>
													<div class="actions_div" style="position: relative; top: -26px;">
														<a href="javascript:void(0)" accesskey="<?php echo $counter;?>" class="remove_ctg_panel exit-btn pull-right"><span class="glyphicon glyphicon-remove"></span></a>
													</div>
												</h4>
											</div>
											<div id="collapse<?php echo $counter;?>" class="panel-collapse collapse"role="tabpane<?php echo $counter;?>" aria-labelledby="heading<?php echo $counter;?>">
												<div class="panel-body">

													<div class="form-group row">
														<label class="col-sm-2 col-form-label col-form-label-sm">
															<?php _e('Status','wpspf'); ?>
														</label>
													    <div class="col-sm-6">
													        <select name="wpspf_attr[<?php echo $counter;?>][status]" class="col-sm-10 col-form-label col-form-label-sm">
													            <option value="enable" <?php if($attr['status']=='enable'){echo 'selected';} ?>>Enable</option>
													            <option value="disable" <?php if($attr['status']=='disable'){echo 'selected';} ?>>Disable</option>
													        </select>
													    </div>
													</div>

													<div class="form-group row">
												    	<label class="col-sm-2 col-form-label col-form-label-sm">
												    		<?php _e('Reset','wpspf'); ?>
												    	</label>
													    <div class="col-sm-6">
													        <select name="wpspf_attr[<?php echo $counter;?>][reset]" class="col-sm-10 col-form-label col-form-label-sm">
													            <option value="enable" <?php if($attr['reset']=='enable'){echo 'selected';} ?>>Enable</option>
													            <option value="disable" <?php if($attr['reset']=='disable'){echo 'selected';} ?>>Disable</option>
													        </select>
													    </div>
													</div>

													<div class="form-group row">
												    	<label class="col-sm-2 col-form-label col-form-label-sm">
												    		<?php _e('Title','wpspf'); ?>
												    	</label>
													    <div class="col-sm-4">
													        <input type="text" name="wpspf_attr[<?php echo $counter;?>][title]" value="<?php echo $attr['title'];?>"/>
													    </div>
													</div>

												    <div class="form-group row">
												    	<label class="col-sm-2 col-form-label col-form-label-sm">
												    		<?php _e('Attribute','wpspf'); ?>
												    	</label>
													    <div class="col-sm-6">
													        <select name="wpspf_attr[<?php echo $counter;?>][tax_id]" onchange="set_terms_color_fields(<?php echo $counter; ?>)" id="wpspf_tax_<?php echo $counter; ?>" class="col-sm-10 col-form-label col-form-label-sm">
													            <?php foreach($attribute_taxonomies as $tax){?>
													                <option value="<?php echo $tax->attribute_id; ?>" <?php if($attr['tax_id']==$tax->attribute_id){echo 'selected';} ?>><?php echo $tax->attribute_label; ?></option>
													            <?php } ?>
													        </select>
													    </div>
													</div>

													<div class="form-group row">
													    <label class="col-sm-2 col-form-label col-form-label-sm">
													    	<?php _e('Type','wpspf'); ?>
													    </label>

													    <div class="col-sm-6">
													        <select name="wpspf_attr[<?php echo $counter;?>][tax_type]" onchange="set_terms_color_fields(<?php echo $counter; ?>)" id="wpspf_tax_type_<?php echo $counter; ?>" class="col-sm-10 col-form-label col-form-label-sm">
													            <option value="checkbox" <?php if($attr['tax_type']=='checkbox'){echo 'selected';} ?>>CheckBox</option>
													            <option value="dropdown" <?php if($attr['tax_type']=='dropdown'){echo 'selected';} ?>>DropDown</option>
													            <option value="radio" <?php if($attr['tax_type']=='radio'){echo 'selected';} ?>>RadioButton</option>
													            <option value="color" <?php if($attr['tax_type']=='color'){echo 'selected';} ?>>Colour / Color Field</option>
													        </select>
													    </div>
													</div>
													<br/>

												    <div class="wpspf_assign_color_feld_<?php echo $counter; ?>" <?php if($attr['tax_type']=='color'){echo 'style="display:block;"';}else{echo 'style="display:none;"';} ?>>
											        <h4><?php _e('Assign color field','wpspf'); ?></h4>
											        <?php $cv_counter = 1; ?>
											        <?php foreach($attribute_taxonomies as $tax){?>
											        <div id="pa_<?php echo $tax->attribute_id; ?>_<?php echo $counter; ?>" <?php if($attr['tax_id']==$tax->attribute_id){echo 'style="display:block;"';}else{echo 'style="display:none;"';} ?> class="wpspf_tax_color_field_<?php echo $counter; ?>">
											            <?php
											                $terms = get_terms( array(
											                    'taxonomy' => 'pa_'.$tax->attribute_name,
											                    'hide_empty' => false,
											                ) );
											                //print_r($terms);
											                
											                foreach($terms as $term){
											            ?>
											                   	<div class="form-group row">
												                    <label class="col-sm-2 col-form-label col-form-label-sm">
												                    	<?php echo $term->name; ?>
												                    </label>

												                    <input type="hidden" name="wpspf_attr[<?php echo $counter;?>][color_value][<?php echo $cv_counter;?>][term_id]" value="<?php echo $term->term_id; ?>"/>
												                    <input type="hidden" name="wpspf_attr[<?php echo $counter;?>][color_value][<?php echo $cv_counter;?>][term_name]" value="<?php echo $term->name; ?>"/>
												                    <div class="col-sm-6"> 
												                        <input type="text" name="wpspf_attr[<?php echo $counter;?>][color_value][<?php echo $cv_counter;?>][term_value]" class="wpspf_terms_assign_color color-field" value="<?php echo $attr['color_value'][$cv_counter]['term_value']; ?>" />
												                    </div>
												                </div>
											                <?php $cv_counter++; ?>
											            <?php } ?>
											        </div>
											        <?php } ?>
											    </div>
											</div>
										</div>
										</div>
									</div>
									<?php $counter++; ?>
								<?php } ?>
							<?php } ?>
							<input type="hidden" id="wpspf_latest_counter" value="<?php echo $counter; ?>" />
						</div>
					</div>
					<div class="col-sm-2"></div>
				</div>
				<div class="form-group row">
		            <div class="col-sm-6">
		                <input type="submit" name="submit" id="submit" class="btn btn-primary btn-lg submitbtn" value="Save changes">
		            </div>
		            <div class="col-sm-6">
		                <button type="button" class="btn btn-secondary btn-lg wpspf_attr_reset">Reset settings</button>
		            </div>
		        </div>
			</div>
	</div>
	<?php 
}
else{
	_e("<div id='tab2' class='tab'><h3 style='color:red;'>No product attributes found. Please create product attributes.</h3></div>", 'wpspf');
}
?>