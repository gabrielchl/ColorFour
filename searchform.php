<?php
/**
 * The template for displaying search forms in _tk
 *
 * @package _tk
 */
?>
    <form class="form-inline" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <div class="form-group">
            <input type="search" name="s" class="form-control" id="search"> </div>
        <button type="submit" class="btn btn-default">Search</button>
    </form>