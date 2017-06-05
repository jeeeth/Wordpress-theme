<form role="form" class="navbar-form navbar-right" action="<?php echo home_url( '/' ); ?>" method="get">
  <div class="input-group add-on">
    <input class="form-control" placeholder="" type="text" name="s" id="search" placeholder="<?php _e("","kural"); ?>" value="<?php the_search_query(); ?>">
    <div class="input-group-btn">
      <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i><?php _e("","Kural"); ?></button>
    </div>
  </div>
</form>
