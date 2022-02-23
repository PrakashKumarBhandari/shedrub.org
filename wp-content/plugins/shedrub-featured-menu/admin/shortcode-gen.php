<?php 
function header_showhidetoggle_menu($atts) {
    global $wpdb;
    $menu_lists = 'SELECT * from '.$wpdb->prefix . 'featured_menu where 1=1 and status = 1 order by menu_order asc';
    $result = $wpdb->get_results( $menu_lists );
	$Content .= '';	
    
    if( $result ) {
    $Content .= '<div id="category-navigation" class="site-header__category-navigation">
            <div class="container">
                <a href="javascript:void(0)" class="close-category-item">
                    <svg width="19" height="19" viewBox="0 0 19 19" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="01-LP-Alt" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="01_LandingPage_1024_OldLogo_HeaderOpen" transform="translate(-992 -13)"><g id="Navigation-Kategorien"><g id="category-nav-header-close" transform="translate(993 14)"><circle id="Oval-16" stroke="#E6E6E6" cx="8.5" cy="8.5" r="8.5"/><path d="M12.645 3.94l.415.415-8.705 8.705-.415-.415 8.705-8.705z" id="Rectangle-207" fill="#FAFAFA"/><path d="M3.94 4.355l.415-.415 8.705 8.705-.415.415L3.94 4.355z" id="Rectangle-207-Copy" fill="#FAFAFA"/></g></g></g></g></svg>
                </a>
                <ul class="nav nav-tabs" id="categoryTab" role="tablist">';
                foreach( $result as $menu ) {
                $Content .= '<li class="nav-item" role="presentation">
                        <a class="nav-link" id="monks-and-nuns-tab" data-bs-toggle="tab" data-bs-target="#menu_'.$menu->id.'" type="button" role="tab" aria-controls="#menu_'.$menu->id.'" aria-selected="true">
                            <i>'.$menu->svg_img.'</i>
                            <span>'.$menu->title.'</span>
                        </a>
                    </li>';
                }       
                $Content .='</ul>';

                $Content .='<div class="tab-content" id="categoryTabContent">';
                $counter = 1;
                foreach( $result as $menu ) {
                    $class_active = ''; 
                    if($counter == 1){ $class_active = 'active'; }
                    $Content .='<div class="tab-pane fade show '.$class_active.'" id="#menu_'.$menu->id.'" role="tabpanel" aria-labelledby="#menu_'.$menu->id.'-tab">
                        <div class="category-item">
                            <div class="row gx-5">
                                <div class="col-md-4">
                                    <p>'.$menu->short_detail.'</p>
                                </div>
                                <div class="col-md-8">
                                    <div class="sites d-flex">';                                    
                                    $get_submenu = 'SELECT * from '.$wpdb->prefix . 'featured_menu_child where parent_id='.$menu->id.' and status = 1  order by menu_order asc';
                                    $sub_items = $wpdb->get_results( $get_submenu );
                                    foreach( $sub_items as $sub_menu_item ) {
                                        $Content .='<div class="site">
                                                <h3>'.$sub_menu_item->title.'</h3>
                                                <a href="" target="_blank">MonksAndNuns.org</a>
                                                </div>';
                                    }
                                    $Content .='</div>
                                </div>
                            </div>
                        </div>
                    </div>';
                    $counter++;
                    }
                    
                    $Content .='</div></div></div>'; 
    }
    return $Content;
}

function featured_toggle_display_content($atts) {
	$Content .= '<h3 class="demoClass">This is Featured list of menu item!</h3>';	
    $Content .= '<svg width="100" height="100">
        <circle cx="50" cy="50" r="40" stroke="green" stroke-width="4" fill="yellow" />
        Sorry, your browser does not support inline SVG.
        </svg> 
        <svg width="300" height="110">
        <rect width="300" height="100" style="fill:rgb(0,0,255);stroke-width:3;stroke:rgb(0,0,0)" />
        </svg> 
        <svg height="100" width="100">
        <circle cx="50" cy="50" r="40" stroke="black" stroke-width="3" fill="red" />
        </svg> ';
    
    return $Content;
}
add_shortcode('FEATURED_MENU_TOP_HEADER', 'header_showhidetoggle_menu');
add_shortcode('FEATURED_LIST_TOGGLE','featured_toggle_display_content');