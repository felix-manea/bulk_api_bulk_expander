<?php
/*
Plugin Name: Bulk URL expander
Plugin URI: https://github.com/felix-manea/bulk_api_bulk_expander
Description: Expand URLs in bulk (a single request with many URLs to expand).
Version: 1.0
Author: Felix Manea
Author URI: http://www.ever.ro
*/

// No direct call
if( !defined( 'YOURLS_ABSPATH' ) ) die();

yourls_add_action('api', 'bulk_api_bulkexpander');

function bulk_api_bulkexpander($action) {
    if ($action[0] != 'bulkexpander') {
        return;
    }

    if (!isset($_REQUEST['urls'])) {
        $return = array(
            'errorCode' => 400,
            'message' => 'bulkexpander: missing URLS parameter',
            'simple' => 'bulkexpander: missing URLS parameter',
        );
        echo $return['errorCode'] . ": " . $return['simple'];
        die();
    }

    $urls = (isset($_REQUEST['urls']) ? $_REQUEST['urls'] : array());
    
    foreach ($urls as $url) {
        $return = yourls_api_expand($url);
        echo $return['longurl'] . "\n";
    }
    
    die();
}
