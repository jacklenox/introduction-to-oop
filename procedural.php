<?php
if ( isset( $_POST['name'] ) ) {

	$name = $_POST['name'];

	if ( strlen( $name ) < 6 ) {
		echo 'Name not long enough';
		exit;
	}

}
