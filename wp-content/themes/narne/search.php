<?php get_header(); ?>
<div class="BodyContainer">
<div class="cd-tabs">
<ul class="cd-tabs-content">
<li data-content="cmd" class="selected" style="color:#fff;">
<div class="InnerSearchPageTabedBodyPannel">
<div class="InnerPagerTabbedHeader">
<div class="InnerPagerTabbedHeaderContent">
<?php if ( have_posts() ) : ?>
 <h1 class="TitleInnerpage"><?php printf( __( 'Search Results for: %s', 'sirioverseas_theme_test' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
 <?php while ( have_posts() ) : the_post(); ?>
   <p class="listStyleHeading" style="margin-bottom:17px;"><span class="HeadingTitle"><a href="<?php echo esc_url( home_url( '/' ) );?><?php the_title(); ?>/"><?php search_title_highlight(); ?></a></span></p>
  <?php search_excerpt_highlight();?>
  <?php endwhile;?>
   <?php else : ?>
  <p class="listStyleHeading" style="margin-bottom:17px;"><span class="HeadingTitle"><?php _e( 'Nothing Found', 'Narne' ); ?></span></p>
   <p><?php _e( 'Sorry, there were no matches for your search criteria. Please try again with different keywords.', 'Educationpoland_theme' ); ?></p>
    <?php endif; ?>

</div></div></div>
</li>

	</ul> <!-- cd-tabs-content -->
</div>

    </div>
<?php get_footer(); ?>


