<?php
if ( ! defined( 'ABSPATH' ) )
     exit;
    
$settings_saved = 0;


if ( isset( $_POST[ 'tb_refresh' ] ) && wp_verify_nonce( $_POST['tb_refresh'],'tb-refresh' ) && current_user_can( 'manage_options' ) ) {

    update_option('blmw_active', sanitize_text_field($_POST['blmw_active']));
    update_option('blmw_message', sanitize_text_field($_POST['blmw_message']));

    $settings_saved = 1;

}

wp_enqueue_style('blacklivesmatter',plugins_url( '/style.css', __FILE__ ));

?>

<div class="wrap">
    <h1 class="title"><?php _e( 'Black Lives Matter Widget', 'black-lives-matter' ); ?></h1>
    <div>
        <?php _e( 'Floating Widget for solidarity with Black Lives Matter Campaign', 'black-lives-matter' ) ?>
    </div>
    

    <?php if ( $settings_saved > 0 ) : ?>
        <div id="message" class="updated fade">
            <p><strong><?php _e( "Settings Saved", 'black-lives-matter' ) ?></strong></p>
        </div>
    <?php endif ?>

        <hr/>

    <div class="top-sharebar">
        <a class="share-btn rate-btn" href="https://wordpress.org/support/plugin/black-lives-matter/reviews/?filter=5#new-post" target="_blank" title="Please rate 5 stars if you like Black Lives Matter Widget"><span class="dashicons dashicons-star-filled"></span> Rate 5 stars</a>
        <a class="share-btn twitter" href="https://twitter.com/intent/tweet?text=%23WordPress%20plugin%20that%20shows%20a%20widget%20on%20WordPress%20Website%20in%20solidarity%20with%20%23BlackLivesMatter%20campaign%20very%20easily.&amp;tw_p=tweetbutton&amp;url=https://wordpress.org/plugins/black-lives-matter/&amp;via=atiqsamtia" target="_blank"><span class="dashicons dashicons-twitter"></span> Tweet about Black Lives Matter Widget</a>
    </div>


    <form method="post" action="">

        <table class="form-table">

            <tr valign="top">
                <th scope="row"><label for="distribute"><?php _e( 'Active', 'black-lives-matter' ); ?></label></th>
                <td>
                    <label for="yes"><?php _e( 'Yes', 'black-lives-matter' ); ?></label>
                    <input id="yes" name="blmw_active" type="radio" value="1" <?php checked( '1', get_option( 'blmw_active', 1 ) ); ?> />
                    <!-- <br/> -->
                    <label for="yes"><?php _e( 'No', 'black-lives-matter' ); ?></label>
                    <input id="no" name="blmw_active" type="radio" value="0" <?php checked( '0', get_option( 'blmw_active', 1 ) ); ?> />
                </td>
            </tr>
            <tr id="range_row" valign="top" >
                <th scope="row"><label for="message"><?php _e( 'Message', 'black-lives-matter' ); ?></label></th>
                <td>

                    <input type="text" id="message" name="blmw_message" value="<?php echo get_option( 'blmw_message', 'Black Lives Matter' ) ?>" />
                
                </td>
            </tr>

        </table>

        <p class="submit">
            <input name="tb_refresh" type="hidden" value="<?php echo wp_create_nonce('tb-refresh'); ?>" />
            <input class="button-primary" name="do" type="submit" value="<?php _e( 'Update Post Dates', 'black-lives-matter' ) ?>" />
        </p>
    </form>
</div>



<div class="coffee-box">
    <div class="coffee-amt-wrap">
    
        <a class="button button-primary buy-coffee-btn" style="margin-left: 2px;" href="https://www.fiverr.com/atiqsamtia/code-or-fix-php-html-css-jquery-mysql-or-wordpress" target="_blank">Buy me a coffee!</a>
    </div>
    <span class="coffee-heading">Buy me a coffee!</span>
    <p style="text-align: justify;">Thank you for using <strong>Black Lives Matter Widget</strong>. If you found the plugin useful buy me a coffee! Your donation will motivate and make me happy for all the efforts. You can donate via Fiverr.</p>
    <p style="text-align: justify; font-size: 12px; font-style: italic;">Developed with <span style="color:#e25555;">♥</span> by <a href="https://atiqsamtia.com" target="_blank" style="font-weight: 500;">Atiq Samtia</a> | <a href="https://github.com/atiqsamtia/black-lives-matter-wordpress-widget" target="_blank" style="font-weight: 500;">GitHub</a> | <a href="https://wordpress.org/support/plugin/black-lives-matter" target="_blank" style="font-weight: 500;">Support</a> | <a href="https://translate.wordpress.org/projects/wp-plugins/black-lives-matter" target="_blank" style="font-weight: 500;">Translate</a> | <a href="https://wordpress.org/support/plugin/black-lives-matter/reviews/?rate=5#new-post" target="_blank" style="font-weight: 500;">Rate it</a> (<span style="color:#ffa000;">★★★★★</span>) on WordPress.org, if you like this plugin.</p>
</div>