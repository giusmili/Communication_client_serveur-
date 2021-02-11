<?php
$host = 'localhost';
$dbname = 'client';
$username = 'root';
$password = '';

if(isset($_POST['send'])){
  try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname","$username","$password");
  } catch(Exception $e){

    die('Erreur : '.$e->getMessage());
  }

$sql = "UPDATE utilisateurs SET nom = :nom, 
          age = :age, 
          civilite = :civilite 
          WHERE id = :id";
      
$stmt = $pdo->prepare($sql);                                  
$stmt->bindParam(':nom', $_POST['nom'], PDO::PARAM_STR);     
$stmt->bindParam(':age', $_POST['age'], PDO::PARAM_INT);    
$stmt->bindParam(':civilite', $_POST['civilite'], PDO::PARAM_STR);
$stmt->bindParam(':id', $_POST['id'], PDO::PARAM_INT);   
$stmt->execute();

  // vérifier si la requête d'insertion a réussi
  if($stmt){
    echo '<p>Les données ont bien été insérés</p>';
  }else{
    echo "<p>Une erreur est survenue !</p>";
  }
}
?>