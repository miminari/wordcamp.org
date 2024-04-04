<?php
namespace WordCamp\WCPT\Tests;
namespace WordCamp\CustomThemeJSON;

if ( 'cli' !== php_sapi_name() ) {
	return;
}

/**
 * Load the plugins that we'll need to be active for the tests
 */
function manually_load_plugins() {
}

tests_add_filter( 'muplugins_loaded', __NAMESPACE__ . '\manually_load_plugins' );
