
<?php
	
	
	$fornavn = htmlspecialchars($_POST['fornavn']);
	$etternavn = htmlspecialchars($_POST['etternavn']);
	$epost = htmlspecialchars($_POST['e-post']);
	$postnummer = htmlspecialchars($_POST['postnummer']);
	
	//Lage PDO
	$db = new PDO(
         'mysql:host=localhost;'
       . 'dbname=test;charset=UTF-8',
         'root', '');
		 
	// $db->setAttribute(PDO::ATTR_ERRMODE,
                  // PDO::ERRMODE_EXCEPTION);

	// $db->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND,
                  // "SET NAMES utf8");	
	
	// INSERT**********
	$stmt = $db->prepare(
         "INSERT INTO kunde (fornavn, etternavn, ePost, postnummer) "
       . "VALUES(:fornavn, :etternavn, :e-post, :postnummer)");
	   
	// $stmt->bindParam(':fornavn'		, $_POST['fornavn'], PDO::PARAM_STR, 128);
	// $stmt->bindParam(':etternavn'	, $_POST['etternavn'], PDO::PARAM_STR, 128);
	// $stmt->bindParam(':e-post'		, $_POST['e-post'], PDO::PARAM_STR, 128);
	// $stmt->bindParam(':postnummer'	, $_POST['postnummer'], PDO::PARAM_INT);
	
	// $stmt->execute();
	
	// $stmt->execute(array(	':fornavn' 		=> $_POST['fornavn'],
							// ':etternavn'	=> $_POST['etternavn'],
							// ':e-post' 		=> $_POST['e-post'],
							// ':postnummer' 	=> $_POST['postnummer']));
							
							
	$stmt->execute(array(	':fornavn' 		=> $fornavn,
							':etternavn'	=> $etternavn,
							':e-post' 		=> $epost,
							':postnummer' 	=> $postnummer));
	
	// Hente ut igjen kundeID fra den nye kunden
	// $newID = db->lastInsertId();
	// echo "KundeID: " . $newID;
	
 
?>
