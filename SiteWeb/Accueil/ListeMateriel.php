
<?php
	$TITRE = "Liste du matériel";
	include ("header.php");
?>

<link href="css/dashboard.css" rel="stylesheet">

    <!-- Begin page content -->
<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Categories :</a></li>
            <li><a href="#">Audio</a></li>
            <li><a href="#">Video</a></li>
            <li><a href="#">Lumière</a></li>
			<li><a href="#">Décors</a></li>
			<li><a href="#">Costume</a></li>
			
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Modifier</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Tout afficher</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		</br>
		</br>
          <h1 class="page-header">Liste du matériel</h1>

          <h6 class="sub-header">Responsable: Monsieur Dupont</h6>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Désignation</th>
                  <th>État</th>
                  <th>Quantité</th>
                  <th>Salle</th>
                  <th>Dernier Utilisateur</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Machine à fumée</td>
                  <td>Disponible</td>
                  <td>4</td>
                  <td>Numéro 21</td>
                  <td>Mr Gilles</td>
                </tr>
                <tr>
                  <td>Ordinateur</td>
                  <td>Non disponible</td>
                  <td>5</td>
                  <td>Numéro 14</td>
                  <td>Mme Sophie</td>
                </tr>
                <tr>
                  <td>Stromboscope</td>
                  <td>Disponible</td>
                  <td>5</td>
                  <td>Numéro 14</td>
                  <td>Mr Philippe</td>
                </tr>
                <tr>
                  <td>Enceintes</td>
                  <td>Disponible</td>
                  <td>10</td>
                  <td>Numéro 15</td>
                  <td>Mme Jeanne</td>
                </tr>
                <tr>
                  <td>Lumière rouge</td>
                  <td>Non disponible</td>
                  <td>3</td>
                  <td>Numéro 16</td>
                  <td>Mr Eric</td>
                </tr>
                <tr>
                  <td>Projecteur de scène</td>
                  <td>Non disponible</td>
                  <td>3</td>
                  <td>Numéro 2</td>
                  <td>Mme Valérie</td>
                </tr>
                <tr>
                  <td>Paires de rideaux</td>
                  <td>Disponible</td>
                  <td>6</td>
                  <td>Numéro 18</td>
                  <td>Mr Jacques</td>
                </tr>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>


<?php
include("footer.php");
?>