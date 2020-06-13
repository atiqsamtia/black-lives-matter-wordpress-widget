<?php
    if ( ! defined( 'ABSPATH' ) )
         exit;
?>
<style>
    #blmw{
        position: fixed;
        right:0;
        bottom:0;
        background-color: #F1E829;
    }
    #blmw p {
        margin: 7px 15px;
        font-size: 18px;
        font-weight: 900;
        text-transform: uppercase;
    }
</style>

<div id="blmw">
    <p><?php echo $blmw_message?></p>
</div>