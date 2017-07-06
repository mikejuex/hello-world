<?php 
	
	header("Content-Type:text/html;charset=gbk");

	$db = new PDO("mysql:host=127.0.0.1;dbname=ceshi","root","root");

	$sql = "select * from web_members";

	$data = $db->query($sql);

	$data = $data->fetchAll();

	print_r($data);die;
	// try {
	//     $dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
	//     foreach($dbh->query('SELECT * from FOO') as $row) {
	//         print_r($row);
	//     }
	//     $dbh = null;
	// } catch (PDOException $e) {
	//     print "Error!: " . $e->getMessage() . "<br/>";
	//     die();
	// }
