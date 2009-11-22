<?php

	header('Content-type: text/xml; charset=UTF-8');
	require( dirname(__FILE__).'/../lib/functions.php' );

	$total = intval( $_GET['total'] );

	if ( $total <= 0 ) {
		throw new PubwichAPIError('Missing parameters');
	}

	$data = array();
	$compteur = 0;
	while ( $compteur <= $total ) {
		$timestamp = strtotime( '+'.$compteur.' day' );
		$data[] = array(
					'year' => date( 'Y', $timestamp ),
					'month' => date( 'm', $timestamp ),
					'day' => date( 'd', $timestamp ),
				);
		$compteur++;
	}

	echo ArrayToXML::toXML( $data, 'days' );	

