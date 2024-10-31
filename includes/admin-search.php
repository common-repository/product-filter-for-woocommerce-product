<?php
$wpspf_search_pr_list_view      		= (get_option('wpspf_search_pr_list_view')) ? get_option('wpspf_search_pr_list_view') : 'both';
$wpspf_search_by_pr_title      			= (get_option('wpspf_search_by_pr_title')) ? get_option('wpspf_search_by_pr_title') : 'enable';
$wpspf_search_title_text                = (get_option('wpspf_search_title_text')) ? get_option('wpspf_search_title_text') : '';
$wpspf_search_min_typed_char_pr_title   = (get_option('wpspf_search_min_typed_char_pr_title')) ? get_option('wpspf_search_min_typed_char_pr_title') : 5;
$wpspf_search_by_pr_sku      			= (get_option('wpspf_search_by_pr_sku')) ? get_option('wpspf_search_by_pr_sku') : 'enable';
$wpspf_search_min_typed_char_pr_sku     = (get_option('wpspf_search_min_typed_char_pr_sku')) ? get_option('wpspf_search_min_typed_char_pr_sku') : 3;
$wpspf_search_title_text2               = (get_option('wpspf_search_title_text2')) ? get_option('wpspf_search_title_text2') : '';


$wpspf_search_pr_title_placeholder    		= (get_option('wpspf_search_pr_title_placeholder')) ? get_option('wpspf_search_pr_title_placeholder') : 'Type Product Name Here...';
$wpspf_search_pr_sku_placeholder      		= (get_option('wpspf_search_pr_sku_placeholder')) ? get_option('wpspf_search_pr_sku_placeholder') : 'Type Product SKU Here. Like sk01, sk02 etc.';
$wpspf_search_loader 						=  4;
$wpspf_search_cart_btn_bck_color      		= '#000';
$wpspf_search_cart_btn_txt_color      		= '#fff';
$wpspf_search_cart_btn_txt_hover_color  	= '#686857';
$wpspf_search_read_more_btn_bck_color      	= '#E8B26B';
$wpspf_search_read_more_btn_txt_color      	= '#fff';
$wpspf_search_read_more_btn_txt_hover_color = '#686857';
$wpspf_search_custom_css 					= '';

?>
<div id="tab1" class="tab active mCustomScrollbar" data-mcs-theme="dark">
    <div class="container-fluid">
        <div class="form-group row">
            <label for="wpspf_search_by_pr_title" class="col-sm-4 col-form-label col-form-label-sm">
                <?php _e('Search By Product Title','wpspf');?>
            </label>
            <div class="col-sm-8">
                <select name="wpspf_search_by_pr_title" class="col-sm-10 col-form-label col-form-label-sm">
                    <option value="enable" <?php if($wpspf_search_by_pr_title=='enable'){echo "selected";} ?>>Enable</option>
                    <option value="disable" <?php if($wpspf_search_by_pr_title=='disable'){echo "selected";} ?>>Disable</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="wpspf_search_title_text" class="col-sm-4 col-form-label col-form-label-sm">
                <?php _e('Title before product title search box.','wpspf'); ?>
            </label>
            <div class="col-sm-8">
                <input value="<?php echo $wpspf_search_title_text; ?>" name="wpspf_search_title_text" id="wpspf_search_title_text" class="form-control form-control-sm" type="text"/>
            </div>
        </div>
        <div class="form-group row">
            <label for="wpspf_search_min_typed_char_pr_title" class="col-sm-4 col-form-label col-form-label-sm">
                <?php _e('Minimum number of typed character to start product title search','wpspf');?>
            </label>
            <div class="col-sm-8">
                <input value="<?php echo $wpspf_search_min_typed_char_pr_title; ?>" name="wpspf_search_min_typed_char_pr_title" id="wpspf_search_min_typed_char_pr_title" class="form-control form-control-sm" type="number"/>
            </div>
        </div>
        <div class="form-group row">
            <label for="wpspf_search_by_pr_sku" class="col-sm-4 col-form-label col-form-label-sm">
                <?php _e('Search by product SKU','wpspf'); ?>
            </label>
            <div class="col-sm-8">
                <select name="wpspf_search_by_pr_sku" class="col-sm-10 col-form-label col-form-label-sm">
                    <option value="enable" <?php if($wpspf_search_by_pr_sku=='enable'){echo "selected";} ?>>Enable</option>
                    <option value="disable" <?php if($wpspf_search_by_pr_sku=='disable'){echo "selected";} ?>>Disable</option>
                </select>
                <div class="select__arrow"></div>
            </div>
        </div>
        <div class="form-group row">
            <label for="wpspf_search_title_text2" class="col-sm-4 col-form-label col-form-label-sm">
                <?php _e('Title before product SKU search box.','wpspf'); ?>
            </label>
            <div class="col-sm-8">
                <input value="<?php echo $wpspf_search_title_text2; ?>" name="wpspf_search_title_text2" id="wpspf_search_title_text2" class="form-control form-control-sm" type="text"/>
            </div>
        </div>
        <div class="form-group row">
            <label for="wpspf_search_min_typed_char_pr_sku" class="col-sm-4 col-form-label col-form-label-sm">
                <?php _e('Minimum number of typed character, to start product SKU search','wpspf'); ?>
            </label>
            <div class="col-sm-8">
                <input value="<?php echo $wpspf_search_min_typed_char_pr_sku; ?>" name="wpspf_search_min_typed_char_pr_sku" id="wpspf_search_min_typed_char_pr_sku" class="form-control form-control-sm" type="number"/>
            </div>
        </div>
        <div class="form-group row">
            <label for="wpspf_search_pr_list_view" class="col-sm-4 col-form-label col-form-label-sm">
                <?php _e('Product listing view','wpspf'); ?>
            </label>
            <div class="col-sm-8">
                <select name="wpspf_search_pr_list_view" class="col-sm-10 col-form-label col-form-label-sm">
                    <option value="none" <?php if($wpspf_search_pr_list_view=='none'){echo "selected";} ?>>None</option>
                    <option value="grid" <?php if($wpspf_search_pr_list_view=='grid'){echo "selected";} ?>>Grid</option>
                    <option value="list" <?php if($wpspf_search_pr_list_view=='list'){echo "selected";} ?>>List</option>
                    <option value="both" <?php if($wpspf_search_pr_list_view=='both'){echo "selected";} ?>>Grid - List Switcher</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="wpspf_search_pr_title_placeholder" class="col-sm-4 col-form-label col-form-label-sm">
                <?php _e('Placeholder of product title search box','wpspf'); ?>
            </label>
            <div class="col-sm-8">
                <input value="<?php echo $wpspf_search_pr_title_placeholder; ?>" name="wpspf_search_pr_title_placeholder" id="wpspf_search_pr_title_placeholder" class="col-sm-10 col-form-label col-form-label-sm" type="text"/>
            </div>
        </div>
        <div class="form-group row">
            <label for="wpspf_search_pr_sku_placeholder" class="col-sm-4 col-form-label col-form-label-sm">
                <?php _e('Placeholder of product SKU search box','wpspf'); ?>
            </label>
            <div class="col-sm-8">
                <input value="<?php echo $wpspf_search_pr_sku_placeholder; ?>" name="wpspf_search_pr_sku_placeholder" id="wpspf_search_pr_sku_placeholder" class="form-control form-control-sm" type="text"/>
            </div>
        </div>
        <div class="form-group row">
            <label for="wpspf_search_cart_btn_bck_color" class="col-sm-4 col-form-label col-form-label-sm">
                <?php _e('Add To Cart button background color','wpspf'); ?>
            </label>
            <div class="col-sm-8">
                <input value="<?php echo $wpspf_search_cart_btn_bck_color; ?>" name="wpspf_search_cart_btn_bck_color" id="wpspf_search_cart_btn_bck_color" class="color-field form-control form-control-sm" type="text"/>
                <span class="wpspf-buy-me"><?php _e('Available in ','wpspf'); ?> <a href="https://www.wpsuperiors.com/woocommerce-product-filter/" target="_blank"><?php _e('Premium Version','wpspf'); ?></a></span>
            </div>
        </div>
        <div class="form-group row">
            <label for="wpspf_search_cart_btn_txt_color" class="col-sm-4 col-form-label col-form-label-sm">
                <?php _e('Add To Cart button text color','wpspf'); ?>
            </label>
            <div class="col-sm-8">
                <input value="<?php echo $wpspf_search_cart_btn_txt_color; ?>" name="wpspf_search_cart_btn_txt_color" id="wpspf_search_cart_btn_txt_color" class="color-field form-control form-control-sm" type="text" />
                <span class="wpspf-buy-me"><?php _e('Available in ','wpspf'); ?> <a href="https://www.wpsuperiors.com/woocommerce-product-filter/" target="_blank"><?php _e('Premium Version','wpspf'); ?></a></span>
            </div>
        </div>
        <div class="form-group row">
            <label for="wpspf_search_cart_btn_txt_hover_color" class="col-sm-4 col-form-label col-form-label-sm">
                <?php _e('Add To Cart button text hover color','wpspf'); ?>
            </label>
            <div class="col-sm-8">
                <input value="<?php echo $wpspf_search_cart_btn_txt_hover_color; ?>" name="wpspf_search_cart_btn_txt_hover_color" id="wpspf_search_cart_btn_txt_hover_color" class="color-field form-control form-control-sm" type="text"/>
                <span class="wpspf-buy-me"><?php _e('Available in ','wpspf'); ?> <a href="https://www.wpsuperiors.com/woocommerce-product-filter/" target="_blank"><?php _e('Premium Version','wpspf'); ?></a></span>
            </div>
        </div>
        <div class="form-group row">
            <label for="wpspf_search_read_more_btn_bck_color" class="col-sm-4 col-form-label col-form-label-sm">
                <?php _e('Read More button background color','wpspf'); ?>
            </label>
            <div class="col-sm-8">
                <input value="<?php echo $wpspf_search_read_more_btn_bck_color; ?>" name="wpspf_search_read_more_btn_bck_color" id="wpspf_search_read_more_btn_bck_color" class="color-field form-control form-control-sm" type="text"/>
                 <span class="wpspf-buy-me"><?php _e('Available in ','wpspf'); ?> <a href="https://www.wpsuperiors.com/woocommerce-product-filter/" target="_blank"><?php _e('Premium Version','wpspf'); ?></a></span>
            </div>
        </div>
        <div class="form-group row">
            <label for="wpspf_search_read_more_btn_txt_color" class="col-sm-4 col-form-label col-form-label-sm">
                <?php _e('Read More button text color','wpspf'); ?>
            </label>
            <div class="col-sm-8">
                <input value="<?php echo $wpspf_search_read_more_btn_txt_color; ?>" name="wpspf_search_read_more_btn_txt_color" id="wpspf_search_read_more_btn_txt_color" class="color-field form-control form-control-sm" type="text"/>
                 <span class="wpspf-buy-me"><?php _e('Available in ','wpspf'); ?> <a href="https://www.wpsuperiors.com/woocommerce-product-filter/" target="_blank"><?php _e('Premium Version','wpspf'); ?></a></span>
            </div>
        </div>
        <div class="form-group row">
            <label for="wpspf_search_read_more_btn_txt_hover_color" class="col-sm-4 col-form-label col-form-label-sm">
                <?php _e('Read More button text hover color','wpspf'); ?>
            </label>
            <div class="col-sm-8">
                <input value="<?php echo $wpspf_search_read_more_btn_txt_hover_color; ?>" name="wpspf_search_read_more_btn_txt_hover_color" id="wpspf_search_read_more_btn_txt_hover_color" class="color-field form-control form-control-sm" type="text"/>
                 <span class="wpspf-buy-me"><?php _e('Available in ','wpspf'); ?> <a href="https://www.wpsuperiors.com/woocommerce-product-filter/" target="_blank"><?php _e('Premium Version','wpspf'); ?></a></span>
            </div>
        </div>
        <div class="form-group row">
            <label for="wpspf_search_read_more_btn_txt_hover_color" class="col-sm-4 col-form-label col-form-label-sm">
                <?php _e('Loader Image','wpspf'); ?>
            </label>
            <div class="form-check form-check-inline col-sm-8">
                <?php for($i=1; $i<=10; $i++){ ?>
                    <label class="control control--radio">
                        <input type="radio" name="wpspf_search_loader" value="<?php echo $i; ?>" <?php if($wpspf_search_loader==$i){echo 'checked';} ?> class="form-check-input"/>
                        <img src="<?php echo WPSPF_AST_PATH.'loader-'.$i.'.gif'; ?>" /> &nbsp;&nbsp;
                        
                    </label>
                <?php } ?>
                 <span class="wpspf-buy-me"><?php _e('Available in ','wpspf'); ?> <a href="https://www.wpsuperiors.com/woocommerce-product-filter/" target="_blank"><?php _e('Premium Version','wpspf'); ?></a></span>
            </div>
        </div>
        <div class="form-group row">
        	<div class="col-sm-6">
        		<input type="submit" name="submit" id="submit" class="btn btn-primary btn-lg submitbtn" value="Save changes">
        	</div>
        	<div class="col-sm-6">
        		<button type="button" class="btn btn-secondary btn-lg wpspf_search_reset">Reset settings</button>
        	</div>
        </div>
</div>


