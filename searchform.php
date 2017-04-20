<?php
/**
 * The template for displaying search forms in _tk
 *
 * @package _tk
 */
?>
    <form role="search" method="get" class="search-form form-inline" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <div class="form-group">
            <label for="searchitem">
                <input id="searchitem" type="search" class="search-field form-control" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', '_tk' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php _ex( 'Search for:', 'label', '_tk' ); ?>"> </label>
            <button type="submit" class="search-submit btn btn-default">
                <?php echo esc_attr_x( 'Search', 'submit button', '_tk' ); ?>
            </button>
        </div>
    </form>