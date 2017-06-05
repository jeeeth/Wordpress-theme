<?php get_header(); ?>

<?php dynamic_carousal('slider'); ?>


<div class="clearfix">&nbsp;</div>
<div class="clearfix">&nbsp;</div>
<div class="container Services">
  <div class="row">
    <?php
    $query = new WP_Query( 'cat=5&showposts=-1&order=asc'  );
    $sno=1;
    if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
    ?>

    <div class="col-sm-3">
      <div style="text-align:center"><?php the_post_thumbnail(array(270,220)); ?></div>
      <h3 style="color:black;font-size:16px;font-weight:bold;text-align:center;padding-bottom:2px"> <?php the_title(); ?></h3>

      <div style="text-align:center" class="post-content"><?php the_content();  ?>
      </div>
      <div class="post-content-count" style="">
        <?php echo $sno; ?>
      </div>
    </div>

<?php $sno++; ?>
    <?php
  endwhile; endif;
  wp_reset_postdata();
  ?>
</div>
</div>
<div class="clearfix">&nbsp;</div>
<div class="clearfix">&nbsp;</div>

<div class="container">
  <p class="text-center"><i class="fa fa-sun-o fa-2x" style="color:#ccc"></i></p>
  <?php
  $query = new WP_Query( 'pagename=grey-matters' );
  if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
  ?>
  <div class="">
    <?php the_content();  ?>
  </div>
  <?php
endwhile; endif;
wp_reset_postdata();
?>
</div>
<div class="clearfix">&nbsp;</div>
<div class="">
  <?php
  $query = new WP_Query( 'pagename=no-reading' );
  if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
  ?>
  <div class="">
    <?php the_content();  ?>
  </div>
  <?php
endwhile; endif;
wp_reset_postdata();
?>
</div>
<div class="clearfix">&nbsp;</div>
<div class="clearfix">&nbsp;</div>
<div class="">
  <?php
  $query = new WP_Query( 'pagename=excellence-begets-success' );
  if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
  ?>
  <div class="">
    <?php the_content();  ?>
  </div>
  <?php
endwhile; endif;
wp_reset_postdata();
?>
</div>
<div class="container-fluid" style="background-color:#f6f6f6">
  <div class="container">
    <?php
    $query = new WP_Query( 'pagename=erp-services' );
    if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
    ?>
    <div class="">
      <?php the_content();  ?>
    </div>
    <?php
  endwhile; endif;
  wp_reset_postdata();
  ?>
</div>
</div>
<div class="clearfix">&nbsp;</div>
<div class="clearfix">&nbsp;</div>
<div class="clearfix">&nbsp;</div>
<div class="container">
  <?php
  $query = new WP_Query( 'pagename=training-and-upskilling' );
  if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
  ?>
  <div class="">
    <?php the_content();  ?>
  </div>
  <?php
endwhile; endif;
wp_reset_postdata();
?>
</div>
<div class="clearfix">&nbsp;</div>
<div class="clearfix">&nbsp;</div>
<div class="">
  <?php
  $query = new WP_Query( 'pagename=contact-us' );
  if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
  ?>
  <div class="">
    <?php the_content();  ?>
  </div>
  <?php
endwhile; endif;
wp_reset_postdata();
?>
</div>
<div class="clearfix">&nbsp;</div>
<div class="clearfix">&nbsp;</div>
<div class="clearfix">&nbsp;</div>
<div class="clearfix">&nbsp;</div>
<div class="">
  <?php
  $query = new WP_Query( 'pagename=canwe-add-value' );
  if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
  ?>
  <div class="">
    <?php the_content();  ?>
  </div>
  <?php
endwhile; endif;
wp_reset_postdata();
?>
</div>

<?php get_footer(); ?>
