<?php
/**
 * The template for displaying search forms in Sparkling
 *
 * @package sparkling
 */
?>

<form method="get" class="form-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <div class="input-group">
    <input type="text" class="form-control search-query" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" id="s" placeholder="<?php echo esc_html__( 'Search...', 'sparkling' ); ?>">
    <span class="input-group-btn">
      <button type="submit" class="btn btn-default" name="submit" id="searchsubmit" value="<?php echo esc_html__( 'Search', 'sparkling' ); ?>"><span class="glyphicon glyphicon-search"></span></button>
    </span>
  </div>
</form>