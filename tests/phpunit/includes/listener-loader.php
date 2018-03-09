<?php

if ( class_exists( 'PHPUnit\Runner\Version' ) && version_compare( PHPUnit\Runner\Version::id(), '7.0', '>=' ) ) {
	require dirname( __FILE__ ) . '/phpunit7/speed-trap-listener.php';
} else {
	require dirname( __FILE__ ) . '/speed-trap-listener.php';
}
