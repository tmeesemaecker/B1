<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un coiffeur</title>
 </head>
 <body>
        <h1>Rechercher un coiffeur</h1>

            <form action="#" method="post">

                <input type="test" placeholder="Ajouter un coiffeur" name="coiffeur">
                <input type="submit" value="Ajouter" name="envoiadd">

            </form>
 <?php /*

     $coiffeurAjouter=$_POST["coiffeur"];
     $db = new PDO('mysql:host=exmachinefmci.mysql.db; dbname=exmachinefmci;charset=utf8', 'exmachinefmci', 'carp310M');
     $result = $db->prepare("INSERT INTO coiffeurMeesemaecker (coiffeur) VALUES(coiffeurAjouter");
     $result->execute(array('coiffeur' => $coiffeurAjouter)); */

 ?>

    <h2>Reservation</h2>

    <form action="#" method="post">
    <input type="date" value="Ajouter une reservation">

    <select name="Liste Coiffeur">
    <option value="">choisir un coiffeur</option>
    
</body>
 
</html>