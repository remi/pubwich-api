<?php

	header('Content-type: text/xml; charset=UTF-8');
	require( dirname(__FILE__).'/../lib/functions.php' );

	$min = intval( $_GET['min'] );
	$max = intval( $_GET['max'] );

	if ( !$min || !$max ) {
		throw new PubwichAPIError('Missing parameters');
	}

	$data = array();
	$data[] = rand( $min, $max );

	echo ArrayToXML::toXML( $data, 'number' );	

