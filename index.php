<?php

$vars = array_values( array_filter( explode( '/', $_SERVER['REQUEST_URI'] ) ) );

if( count( $vars ) % 2 )
{
  $page = $vars[0].'.php';
  array_shift( $vars );
}
else $page = 'index.php';

for( $i = 0; $i < count( $vars ); $i += 2 )
{
  $_GET[$vars[$i]] = $vars[$i+1];
}

define( 'WEB_ROOT', $_SERVER['DOCUMENT_ROOT'] );

include( WEB_ROOT.'/includes/config.php' );

include( WEB_ROOT.'/views/'.$page );
