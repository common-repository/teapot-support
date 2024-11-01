<?php
/*
Plugin Name: Teapot Support
Plugin URI: https://www.teapotcreative.co.uk/support/
Version: 1.7.5
Author: teapotcreative
Description: Help and support for your website
Changelog: readme.txt
*/

//add widget to dashboard
add_action('wp_dashboard_setup', 'teapot_support_custom_dashboard_widgets');
function teapot_support_custom_dashboard_widgets() {
  global $wp_meta_boxes;
    wp_add_dashboard_widget('custom_help_widget', 'Website Support from Teapot Creative', 'teapot_support_custom_dashboard_help');
  }
function teapot_support_custom_dashboard_help() {
  $html = '<img src="' . plugins_url( 'images/logo.png', __FILE__ ) . '" alt="Teapot Creative Ltd" /> ';
  $html .= '<p>If you need support with your website please click the following link and fill in the support form</p>';
  $html .= '<p><a href="https://www.teapotcreative.co.uk/support/submitticket.php?step=2&deptid=1">Click for Support</a>';

  echo $html;
}

/*** register and enqueue scripts and styles  */
function teapot_support_theme_stylesheets() {
    wp_register_style( 'style',  plugins_url( 'css/style.css', __FILE__ ), array(), null, 'all' );
    wp_enqueue_style( 'style' );
}
add_action( 'admin_enqueue_scripts', 'teapot_support_theme_stylesheets' );


//add teapot support menu item and load in iframe
add_action( 'admin_menu', 'teapot_support_admin_menu' );

function teapot_support_admin_menu() {
 $menu_icon = plugins_url( 'images/teapot-logo.png', __FILE__ );
 add_menu_page( 'Support', 'Teapot Support', 'manage_options', 'teapotsupport-admin-page.php', 'teapot_support_plugin_admin_page', $menu_icon , 999999 );
}
function teapot_support_plugin_admin_page(){
?>
<div class="teapot-pagewrap">
  <div class="container">
    <img src="<?php echo plugins_url( 'images/logo.png', __FILE__ ) ?>" alt="Teapot Creative Ltd" />
    <div class="row">
      <div class="col-sm-12 supportbar">
        <h2>Need Support?</h2>
        <p>If you need some WordPresss support please visit our support page
        <a href="https://www.teapotcreative.co.uk/support/cart.php?gid=6" target="_blank">click here</a></p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <h2>Resizing Images</h2>
      </div>
      <?php
      $i = 0; // counter
      $url = "https://www.teapotcreative.co.uk/blog/tag/image-optimisation/feed/"; // url to parse
      $rss = simplexml_load_file($url); // XML parser

      foreach($rss->channel->item as $item) {
      if ($i < 10) { // parse only 10 items
          print '<div class="col-sm-4">';
          print '<h2><a href="'.$item->link.'">'.$item->title.'</a></h2><br />';
          print ''.$item->description.'<br />';
          print '<a href="'.$item->link.'">read more</a>';
          print '</div>';
      }

      $i++;
      }
      ?>
    </div>


    <div class="row">
      <div class="col-sm-12">
        <h2>SEO</h2>
      </div>
      <?php
      $i = 0; // counter
      $url = "https://www.teapotcreative.co.uk/blog/tag/seo-tips/feed/"; // url to parse
      $rss = simplexml_load_file($url); // XML parser

      foreach($rss->channel->item as $item) {
      if ($i < 10) { // parse only 10 items
          print '<div class="col-sm-4">';
          print '<h2><a href="'.$item->link.'">'.$item->title.'</a></h2><br />';
          print ''.$item->description.'<br />';
          print '<a href="'.$item->link.'">read more</a>';
          print '</div>';
      }

      $i++;
      }
      ?>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <h2>E-Commerce</h2>
      </div>

      <?php
      $i = 0; // counter
      $url = "https://www.teapotcreative.co.uk/blog/tag/e-commerce-wordpress/feed/"; // url to parse
      $rss = simplexml_load_file($url); // XML parser

      foreach($rss->channel->item as $item) {
      if ($i < 10) { // parse only 10 items
          print '<div class="col-sm-4">';
          print '<h2><a href="'.$item->link.'">'.$item->title.'</a></h2><br />';
          print ''.$item->description.'<br />';
          print '<a href="'.$item->link.'">read more</a>';
          print '</div>';
      }

      $i++;
      }
      ?>
    </div>


    <div class="row">
      <div class="col-sm-12">
        <h2>Backups</h2>
      </div>

      <?php
      $i = 0; // counter
      $url = "https://www.teapotcreative.co.uk/blog/tag/backups/feed/"; // url to parse
      $rss = simplexml_load_file($url); // XML parser

      foreach($rss->channel->item as $item) {
      if ($i < 10) { // parse only 10 items
          print '<div class="col-sm-4">';
          print '<h2><a href="'.$item->link.'">'.$item->title.'</a></h2><br />';
          print ''.$item->description.'<br />';
          print '<a href="'.$item->link.'">read more</a>';
          print '</div>';
      }

      $i++;
      }
      ?>
    </div>


    <div class="row">
      <div class="col-sm-12">
        <h2>Plugins</h2>
      </div>
      <?php
      $i = 0; // counter
      $url = "https://www.teapotcreative.co.uk/blog/tag/wordpress-plugins/feed/"; // url to parse
      $rss = simplexml_load_file($url); // XML parser

      foreach($rss->channel->item as $item) {
      if ($i < 10) { // parse only 10 items
          print '<div class="col-sm-4">';
          print '<h2><a href="'.$item->link.'">'.$item->title.'</a></h2><br />';
          print ''.$item->description.'<br />';
          print '<a href="'.$item->link.'">read more</a>';
          print '</div>';
      }

      $i++;
      }
      ?>
    </div>



    <div class="row">
      <div class="col-sm-12">
        <h2>Content Creation</h2>
      </div>
      <?php
      $i = 0; // counter
      $url = "https://www.teapotcreative.co.uk/blog/tag/content-creation/feed/"; // url to parse
      $rss = simplexml_load_file($url); // XML parser

      foreach($rss->channel->item as $item) {
      if ($i < 10) { // parse only 10 items
          print '<div class="col-sm-4">';
          print '<h2><a href="'.$item->link.'">'.$item->title.'</a></h2><br />';
          print ''.$item->description.'<br />';
          print '<a href="'.$item->link.'">read more</a>';
          print '</div>';
      }
    }
  }

  //////////////////////////////////////
  // Important. Required for updating //
  //////////////////////////////////////
  /*require 'plugin-update-checker-master/plugin-update-checker.php';
  $myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
    'http://plugins.yourdevspace.co.uk/plugins/json/teapot-support.json',
    __FILE__,
    'teapot-support'
  );*/
