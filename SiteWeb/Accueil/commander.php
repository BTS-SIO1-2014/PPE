<!DOCTYPE html>
<?php
	$TITRE = "Commander";
	include("header.php");
?>
	<link href="css/dashboard.css" rel="stylesheet">
	<link href="css/tableauCSS.css" rel="stylesheet">
    <!-- Begin page content -->
    <div class="container">
      <div class="page-header">
	  </br>
	  </br>
	  </br>
	  </br>
        <h1>Bon de commande</h1>
      </div>
      <p class="lead">Récapitulation de la Commande</p>
	  <a class="btn btn-lg btn-success" href="CommandeValider.html" role="button">Valider La Commande</a>
	  <a class="btn btn-lg btn-success" href="../Accueil.html" role="button">Annuler</a>
		</br>
    </div>


<table id="MaTable" class="tabcenter">
    <tr>
       <th>Numero et date</th>
       <th>Produit</th>
       <th>Quantite</th>
	   <th>TVA</th>
	   <th>Prix</th>
	   <th>Date livraison Prevue</th>
	   <th>Durée</th>
   </tr>
   <tr>
       <td>..........</td>
       <td>..........</td>
       <td>..........</td>
	   <td>..........</td>
	   <td>..........</td>
	   <td>..........</td>
	   <td>..........</td>
   </tr>
   <tr>
       <td>..........</td>
       <td>..........</td>
       <td>..........</td>
	   <td>..........</td>
	   <td>..........</td>
	   <td>..........</td>
	   <td>..........</td>
   </tr>
   <tr>
       <td>..........</td>
       <td>..........</td>
       <td>..........</td>
	   <td>..........</td>
	   <td>..........</td>
	   <td>..........</td>
	   <td>..........</td>
   </tr>
   <tr>
       <td>..........</td>
       <td>..........</td>
       <td>..........</td>
	   <td>..........</td>
	   <td>..........</td>
	   <td>..........</td>
	   <td>..........</td>
   </tr>
</table>
<?php include("footer.php"); ?>
</html>