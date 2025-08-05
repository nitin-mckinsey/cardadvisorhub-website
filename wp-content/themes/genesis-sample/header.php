<?php
/**
 * Custom Header for Genesis Sample Theme with Top Menu in Title Bar
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
<style>
.site-header-custom {
  background: #fff;
  border-bottom: 1px solid #e5e5e5;
  padding: 0;
  margin-bottom: 2rem;
  box-shadow: 0 2px 8px rgba(0,0,0,0.03);
}
.site-header-bar {
  display: flex;
  align-items: center;
  justify-content: space-between;
  max-width: 1200px;
  margin: 0 auto;
  padding: 0.5rem 2rem;
}
.site-title {
  font-size: 2rem;
  font-weight: 700;
  color: #2E7D32;
  margin: 0;
  letter-spacing: 1px;
}
.site-nav {
  display: flex;
  gap: 2rem;
}
.site-nav a {
  color: #333;
  font-weight: 500;
  text-decoration: none;
  font-size: 1.1rem;
  padding: 0.5rem 1rem;
  border-radius: 20px;
  transition: background 0.2s, color 0.2s;
}
.site-nav a:hover, .site-nav .current-menu-item > a {
  background: #e8f5e9;
  color: #2E7D32;
}
@media (max-width: 768px) {
  .site-header-bar {
    flex-direction: column;
    align-items: flex-start;
    padding: 1rem;
  }
  .site-title {
    font-size: 1.5rem;
    margin-bottom: 0.5rem;
  }
  .site-nav {
    gap: 1rem;
    flex-wrap: wrap;
  }
}
</style>

<header class="site-header-custom">
  <div class="site-header-bar">
    <div class="site-title">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="color: #2E7D32; text-decoration: none;">CardAdvisorHub</a>
    </div>
    <nav class="site-nav" role="navigation" aria-label="Top Menu">
      <?php
        wp_nav_menu( array(
          'theme_location' => 'top-menu',
          'container' => false,
          'menu_class' => '',
          'fallback_cb' => false,
          'depth' => 2,
          'items_wrap' => '%3$s',
          'walker' => new class extends Walker_Nav_Menu {
            function start_lvl( &$output, $depth = 0, $args = null ) {
              $output .= '';
            }
            function end_lvl( &$output, $depth = 0, $args = null ) {
              $output .= '';
            }
            function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
              $classes = empty( $item->classes ) ? array() : (array) $item->classes;
              $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
              $output .= '<a href="' . esc_url( $item->url ) . '" class="' . esc_attr( $class_names ) . '">' . apply_filters( 'the_title', $item->title, $item->ID ) . '</a>';
            }
            function end_el( &$output, $item, $depth = 0, $args = null ) {
              $output .= '';
            }
          }
        ) );
      ?>
    </nav>
  </div>
</header>
