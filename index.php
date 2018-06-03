<!DOCTYPE html>
<html lang="fr-FR">
  <head>
    <title> Le Resto'-test git </title>
    <meta charset="utf-8">
    <meta name="description" content="venez découvrir les <strong>recettes</strong> des <strong>spécialités</strong> 
	de notre <strong>restaurant</strong> situé en centre ville d'<strong>Orléans</strong>.">
  </head>
  <body>
    <header>
      <h1> <strong>Le Resto'</strong> </h1>
    </header>
    <article> <!--Article d'introduction-->
      <p> venez découvrir les <strong>recettes</strong> des <strong>spécialités</strong> de notre <strong>restaurant</strong> 
        situé en centre ville d'<strong>Orléans</strong>,
	    Notre carte est élaborée avec le plus grand soin, et nous sommes intransigeants sur la qualité et l’origine des produits. 
        Sélection rigoureuse, contrôle des saveurs et élaboration de recettes spécifiques sont le travail quotidien de passionnés à votre 
        service. 
      <br/><br/>
      <img src="img/resto.jpg" width="100" height="80" alt="photo resto"> 
      <p/>
	  <p>
	  <h3> Découvrez les recettes de nos spécialités :<br/> </h3>
	  <?php

        include ("inc/connexion.php");

        /*Appel des éléments de la base de données*/
        $req = $conn->query('SELECT recette_nom, recette_ingredients FROM recette JOIN categorie ON recette.recette_categorie = categorie.categorie_ordre ORDER BY categorie_ordre, recette_nom');
        while($donnees = $req -> fetch()) {
        echo $donnees['recette_nom'].':<br/>'.$donnees['recette_ingredients'].'<br/><br/>';
          }
       ?>
	   <p/>
    </article>
    <footer>
      <p>Copyright 2018 - Toute reproduction interdite  
      </p>
    </footer>
  </body>
  </html>
  