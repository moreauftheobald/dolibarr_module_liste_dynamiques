<?php
$res = @include '../../main.inc.php'; // For root directory
if (! $res)
	$res = @include '../../../main.inc.php'; // For "custom" directory
if (! $res)
	die("Include of main fails");

global $db, $user;

$table = GETPOST('table_ajax');

$form = new Form($db);

$champs =$db->DDLInfoTable($table);

$fields = array();

foreach ($champs as $champ){
	$fields[]= $champ[0] . '</br>';
}

$return = $form->selectarray('field2', $fields,'field2',1,0,1,'',0,0,0,'','',1);

echo 'ca marche';