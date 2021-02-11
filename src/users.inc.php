<?php
$host = 'localhost';
$dbname = 'client';
$username = 'root';
$password = '';
/*
C
R
U
D
*/ 

if(isset($_POST['send'])){
    
    if(!$_POST['nom']){
        print "<p> Champs vide</p>";
    }
    else{
    
        try{
            $pdo = new PDO("mysql:host=$host;dbname=$dbname","$username","$password");
        }
        catch(Exception $e){
            die("Erreur : ".$e->getMessage());
        }
        //update
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
        //test pour la mis à jour
        /*if($stmt){
            print "<p>Les données ont bien été enregistrées</p>";
        }
        else{
            print "<p>Une erreur est survenue</p>";
        }*/
        //ternaire
    $stmt ? print "<p>Les données ont bien été enregistrées</p>" : print "<p>Une erreur est survenue</p>";
    }
}


?>