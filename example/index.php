<?php
include('../engine.php');
$data["capitals"] = array(
	array("The Netherlands", "Amsterdam"),
	array("Belgium", "Brussels"),
	array("Sweden", "Stockholm"),
	array("Poland", "Warsaw"),
	array("Hungary", "Budapest"),
	array("USA", "Washington D.C.")
);
$View = new ViewRenderer('view.php', $data);
echo $View->render();
?>