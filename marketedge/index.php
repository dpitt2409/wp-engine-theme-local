<?php

// force 404 for things falling back to index.
// create actual templates for everything.
// ie. single.php, page.php, archive.php etc

// global $wp_query;

// $wp_query->set_404();
// status_header( 404 );
// nocache_headers();
// include( get_query_template( '404' ) );
// die();

// Redirect to the-atlas.com/request-a-demo so that collateral works before the site is live.
header('Location: https://the-atlas.com/request-a-demo?utm_campaign=redirect&utm_source=marketedge', true, 302);
exit;
