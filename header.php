<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title><?php bloginfo('name');?> &raquo; <?php is_front_page()? bloginfo('description'): wp_title('');?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php //$image = get_field('favicon', 'option');  ?>
  <!-- <link rel="icon" href="<?php //echo esc_url($image['url']); ?>" type="image/x-icon"/> -->
  <?php wp_head(); ?>
</head>
<body id="bg">
  <div class="page-wraper">
  <header class="<?php echo $class_header_bar; ?>">
    <div class="header_bar"> 
      <div class="container"> 
        <div class="row"> 
          <div class="col-md-12"> 
            <div class="nav_menu">
              <div class="logo"> 
                <a href="<?php echo get_bloginfo('url') ?>"> 
                  <?php $image = get_field('logo', 'option'); ?>
                  <img src="https://benhvienthammydiva.com/wp-content/uploads/2020/02/vien-tham-my-diva-logo-top.png" />
                </a> 
              </div> 
              <div class="nav_content">
                <nav class="nav-menu">
                  <?php
                  wp_nav_menu(
                    array(
                      'theme_location'     => "nav-main-menu",
                      'menu_class'        => "menu",
                      'container'         => "",
                      'menu_id'     => "menu",
                    )
                  );
                  ?>
              </nav>
              <div class="search_button"><i class="fas fa-search popup-search-btn"></i></div>
              </div>
            </div>
        </div> 
      </div> 
    </div> 
  </div>
</header>
<div class="popup-search" role="alert">
  <div class="popup-container">
    <form role="search" id="searchform" action="/search" method="get" class="radius-xl">
      <div class="input-group">
        <input type="hidden" name="post_type" value="post">
      <input type="text" name="s" class="search-text" placeholder="Tìm kiếm" required>
        <span class="input-group-btn"><button type="button" class="search-btn"><i class="fa fa-search"></i></button></span>
      </div>   
    </form>
  </div> 
</div> 