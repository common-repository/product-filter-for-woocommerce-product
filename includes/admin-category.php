<?php
	$wpspf_filter_by_pr_cat  	   = (get_option('wpspf_filter_by_pr_cat')) ? get_option('wpspf_filter_by_pr_cat') : 'enable';
	$wpspf_cat_title_text    	   = (get_option('wpspf_cat_title_text')) ? get_option('wpspf_cat_title_text') : '';
	$wpspf_filter_by_pr_cat_style  = 'hierchical';
	$wpspf_filter_by_pr_cat_empty  = (get_option('wpspf_filter_by_pr_cat_empty')) ? get_option('wpspf_filter_by_pr_cat_empty') : 'yes';
	$wpspf_filter_by_pr_cat_count  = 'yes';

	$wpspf_filter_by_pr_cat_order_by   = 'default';
	$wpspf_filter_by_pr_cat_order      = 'default';

?>
<div id="tab3" class="tab">
    <div class="container-fluid">
    	<div class="form-group row">
    		<label for="wpspf_filter_by_pr_cat" class="col-sm-4 col-form-label col-form-label-sm">
                <?php _e('Filter By Product Category','wpspf'); ?>
            </label>
           
    		<div class="col-sm-8">
                <select name="wpspf_filter_by_pr_cat" class="col-sm-10 col-form-label col-form-label-sm">
                    <option value="enable" <?php if($wpspf_filter_by_pr_cat=='enable'){echo "selected";} ?>>Enable</option>
                    <option value="disable" <?php if($wpspf_filter_by_pr_cat=='disable'){echo "selected";} ?>>Disable</option>
                </select>

            </div>
        </div>
        <div class="form-group row">
            <label for="wpspf_cat_title_text" class="col-sm-4 col-form-label col-form-label-sm">
                <?php _e('Title, before product category listings','wpspf'); ?>
            </label>
            <div class="col-sm-8">
                <input value="<?php echo $wpspf_cat_title_text; ?>" name="wpspf_cat_title_text" id="wpspf_cat_title_text" class="form-control form-control-sm" type="text"/>
            </div>
        </div>
        <div class="form-group row">
        	<label for="wpspf_filter_by_pr_cat_style" class="col-sm-4 col-form-label col-form-label-sm">
                <?php _e('Display type','wpspf'); ?>
            </label>
            
        	<div class="col-sm-8">
                <select name="wpspf_filter_by_pr_cat_style" class="col-sm-10 col-form-label col-form-label-sm">
                    <option value="hierchical" <?php echo "selected"; ?>>Hierchical</option>
                    <option value="list">List</option>
                    <option value="dropdown">Dropdown</option>
                </select>
                <span class="wpspf-buy-me"><?php _e('Available in ','wpspf'); ?> <a href="https://www.wpsuperiors.com/woocommerce-product-filter/" target="_blank"><?php _e('Premium Version','wpspf'); ?></a></span>
            </div>
        </div>
        <div class="form-group row">   
            <label for="wpspf_filter_by_pr_cat_empty" class="col-sm-4 col-form-label col-form-label-sm">
                <?php _e('Hide empty category','wpspf'); ?>
            </label>
    		<div class="col-sm-8">
                <select name="wpspf_filter_by_pr_cat_empty" class="col-sm-10 col-form-label col-form-label-sm">
                    <option value="yes" <?php if($wpspf_filter_by_pr_cat_empty=='yes'){echo "selected";} ?>>Yes</option>
                    <option value="no" <?php if($wpspf_filter_by_pr_cat_empty=='no'){echo "selected";} ?>>No</option>
                </select>
            </div>
        </div>
        <div class="form-group row"> 
            <label for="wpspf_filter_by_pr_cat_count" class="col-sm-4 col-form-label col-form-label-sm">
                <?php _e('Show product count','wpspf'); ?>
            </label>
    		<div class="col-sm-8">
                <select name="wpspf_filter_by_pr_cat_count" class="col-sm-10 col-form-label col-form-label-sm">
                    <option value="yes" <?php echo "selected"; ?>>Yes</option>
                    <option value="no">No</option>
                </select>
                <span class="wpspf-buy-me"><?php _e('Available in ','wpspf'); ?> <a href="https://www.wpsuperiors.com/woocommerce-product-filter/" target="_blank"><?php _e('Premium Version','wpspf'); ?></a></span>
            </div>
        </div>
        <div class="form-group row">
            <label for="wpspf_filter_by_pr_cat_order_by" class="col-sm-4 col-form-label col-form-label-sm">
                <?php _e('Order by','wpspf'); ?>
            </label>
    		<div class="col-sm-8">
                <select name="wpspf_filter_by_pr_cat_order_by" class="col-sm-10 col-form-label col-form-label-sm">
                    <option value="default" <?php echo "selected"; ?>>Default</option>
                    <option value="name">Name</option>
                    <option value="ID">ID</option>
                </select>
                <span class="wpspf-buy-me"><?php _e('Available in ','wpspf'); ?> <a href="https://www.wpsuperiors.com/woocommerce-product-filter/" target="_blank"><?php _e('Premium Version','wpspf'); ?></a></span>
            </div>
        </div>
        <div class="form-group row">
            <label for="wpspf_filter_by_pr_cat_order" class="col-sm-4 col-form-label col-form-label-sm">
                <?php _e('Order','wpspf'); ?>
            </label>
    		<div class="col-sm-8">
                <select name="wpspf_filter_by_pr_cat_order" class="col-sm-10 col-form-label col-form-label-sm">
                    <option value="default" <?php echo "selected"; ?>>Default</option>
                    <option value="ASC">Ascending</option>
                    <option value="DSC">Desecnding</option>
                </select>
                <span class="wpspf-buy-me"><?php _e('Available in ','wpspf'); ?> <a href="https://www.wpsuperiors.com/woocommerce-product-filter/" target="_blank"><?php _e('Premium Version','wpspf'); ?></a></span>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-6">
                <input type="submit" name="submit" id="submit" class="btn btn-primary btn-lg submitbtn" value="Save changes">
            </div>
            <div class="col-sm-6">
                <button type="button" class="btn btn-secondary btn-lg wpspf_cat_reset">Reset settings</button>
            </div>
        </div>
    </div>
</div>
