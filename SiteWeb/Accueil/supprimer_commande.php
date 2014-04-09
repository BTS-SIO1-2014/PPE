<?php
include("header.php");
?>

    <!-- Begin page content -->

    <div class="container-fluid">
      <div class="row">
        
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Toujours à votre service</h1>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="fonts/aquitaine.jpg"  class="img-responsive"  alt="Generic placeholder thumbnail">
              <h4>Aquitaine</h4>
              <span class="text-muted"> une région d'une incroyable diversité </span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="fonts/salle.png" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Des belles salles</h4>
              <span class="text-muted">  Nous assurons votre confort</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="fonts/image.jpg.jpg" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Livraison sur site</h4>
              <span class="text-muted">remise en main personnalisée</span>
            </div>
            
          </div>

          <h2 class="sub-header">Voulez vous supprimer des commandes?</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>DATE</th>
                  <th>COMMANDE</th>
                  <th>PRIX UNITAIRE</th>
                  <th>QUANTITE</th>
                  <th>PRIX</th>
				  <th>SUPPRIMER</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>02/04/2014</td>
                  <td>commande1</td>
                  <td>50</td>
                  <td>2</td>
                  <td>100</td>
				  <td><li><a href="#"><img src="fonts/corb.jpg"  class="img-responsive"  alt="Generic placeholder thumbnail"></a></li></td>
				  
                </tr>
                <tr>
                  <td>05/04/2014</td>
                  <td>commande2</td>
                  <td>45</td>
                  <td>1</td>
                  <td>45</td>
				 <td><li><a href="#"><img src="fonts/corb.jpg"  class="img-responsive"  alt="Generic placeholder thumbnail"></a></li></td>
                </tr>
                <tr>
                  <td>09/04/2014</td>
                  <td>commande3</td>
                  <td>20</td>
                  <td>5</td>
                  <td>100</td>
				  <td><li><a href="#"><img src="fonts/corb.jpg"  class="img-responsive"  alt="Generic placeholder thumbnail"></a></li></td>
                </tr>
                <tr>
                  <td>10/04/2014</td>
                  <td>commande4</td>
                  <td>100</td>
                  <td>2</td>
                  <td>200</td>
				  <td><li><a href="#"><img src="fonts/corb.jpg"  class="img-responsive"  alt="Generic placeholder thumbnail"></a></li></td>
                </tr>
                
                
               
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
  <?php 

include("footer.php");
?>
