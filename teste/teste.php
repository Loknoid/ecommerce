<?php 

	$conn = oci_connect("FJV", "tr4n21t", "sculptor.transit.spo.br/itcprd01.transit.spo.br");
	if (!$conn) {
		$e = oci_error();
		trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
	}

 ?>