<?php
class WPSPF_Admin{
    public function __construct()
    {
        add_action('admin_menu', array($this,'add_settings_page'));
        add_action("admin_init", array($this,"register_filter_settings"));
        add_action( 'admin_enqueue_scripts', array($this,'selectively_enqueue_admin_script' ));
    }
    public static function selectively_enqueue_admin_script( $hooks ){
    	if( $hooks != 'product_page_wpspf-product-filters' )
    		return;
    	wp_register_style( 'WPS_PFS_ADMIN_CSS', WPSPF_AST_PATH . '/admin-style.css', false, '1.0.0' );
        wp_enqueue_style( 'WPS_PFS_ADMIN_CSS' );

        wp_register_style( 'WPS_PFS_ADMIN_CSS_BTS', WPSPF_AST_PATH . '/bootstrap.css', false, '1.0.0' );
    	wp_enqueue_style( 'WPS_PFS_ADMIN_CSS_BTS' );

    	wp_register_script('WPS_PFS_ADMIN_JS', WPSPF_AST_PATH.'/admin-js.js', array('jquery'),'1.1', true);
		wp_enqueue_script('WPS_PFS_ADMIN_JS');

    }
    

    public static function add_settings_page()
    {
        add_submenu_page('edit.php?post_type=product', __('Search & Filter Settings', 'wpspf'), __('Search & Filter Settings', 'wpspf'), 'manage_options', 'wpspf-product-filters', array('WPSPF_Admin', 'settings_page'));
    }

    public static function register_filter_settings()
    {
        add_settings_section("wpspf-product-filters-section", "Search & Filter Settings", null, "wpspf-product-filters");

        /* Filter By Search */
        register_setting("wpspf-product-filters-section", "wpspf_search_pr_list_view");
        register_setting("wpspf-product-filters-section", "wpspf_search_by_pr_title");
        register_setting("wpspf-product-filters-section", "wpspf_search_title_text");
        register_setting("wpspf-product-filters-section", "wpspf_search_title_text2");
        register_setting("wpspf-product-filters-section", "wpspf_search_by_pr_sku");
        register_setting("wpspf-product-filters-section", "wpspf_search_min_typed_char_pr_title");
        register_setting("wpspf-product-filters-section", "wpspf_search_min_typed_char_pr_sku");

        /* Filter By Attribute */
        register_setting("wpspf-product-filters-section", "wpspf_filter_by_pr_attr");
        register_setting("wpspf-product-filters-section", "wpspf_attr");

        /* Filter By Category */
        register_setting("wpspf-product-filters-section", "wpspf_filter_by_pr_cat");
        register_setting("wpspf-product-filters-section", "wpspf_cat_title_text");
        register_setting("wpspf-product-filters-section", "wpspf_filter_by_pr_cat_empty");

        /* Custom CSS*/
        register_setting("wpspf-product-filters-section", "wpspf_custom_css");
    }

    public static function settings_page()
    {
        ?>
        <form method="post" action="options.php" class="wpspf-admin-form">
        	<div class="container-fluid">
				<div class="row">
					<?php
		            settings_fields("wpspf-product-filters-section");
		            do_settings_sections("wpspf-product-filters"); 
		            settings_errors();
		            ?>
			        <div class="col-sm-11 bhoechie-tab-container">
			            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
			              <div class="list-group">
			                <a href="#" class="list-group-item active text-center" style="padding-top: 103px; padding-bottom: 103px;">
			                  <h4 class="glyphicon glyphicon-search"></h4><br/>Search
			                </a>
			                <a href="#" class="list-group-item text-center" style="padding-top: 103px; padding-bottom: 103px;">
			                  <h4 class="glyphicon glyphicon-tags"></h4><br/>Attribute
			                </a>
			                <a href="#" class="list-group-item text-center" style="padding-top: 103px; padding-bottom: 103px;">
			                  <h4 class="glyphicon glyphicon-list"></h4><br/>Category
			                </a>
			                <a href="#" class="list-group-item text-center" style="padding-top: 103px; padding-bottom: 103px;">
			                  <h4 class="glyphicon glyphicon-pencil"></h4><br/>Custom CSS
			                </a>
			              </div>
			            </div>
			            <div class="col-lg-10 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">
			                <div class="bhoechie-tab-content active">
			                    <center>
			                      <?php require WPSPF_INC_PATH.'admin-search.php'; ?>
			                    </center>
			                </div>
			                <div class="bhoechie-tab-content">
			                    <center>
			                      <?php require WPSPF_INC_PATH.'admin-attribute.php'; ?>
			                    </center>
			                </div>
			                <div class="bhoechie-tab-content">
			                    <center>
			                      <?php require WPSPF_INC_PATH.'admin-category.php'; ?>
			                    </center>
			                </div>
			                <div class="bhoechie-tab-content">
			                    <center>
			                      <?php require WPSPF_INC_PATH.'admin-css.php'; ?>
			                    </center>
			                </div>
			                
			            </div>
			        </div>
			  	</div>
			</div>
        </form>
            
        <?php
    }

}new WPSPF_Admin;


 ?>