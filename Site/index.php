<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
  <head>
    <title>Expense Manager</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <link href="css/desktop.css" rel="stylesheet" type="text/css"/>
    <link href="css/mobile.css" rel="stylesheet" type="text/css"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <?php include("include/nav.php"); ?>


    <div id="header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-lg-push-3">
            <h1>VOTRE ÉQUIPE PASSE-T-ELLE TROP DE TEMPS SUR LES RAPPORTS DE DÉPENSES ?</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 col-lg-push-2">
            <p>De la saisie des justificatifs jusqu’au remboursement des frais, chaque étape du processus peut être traitée depuis votre smartphone ou tablette. Expense manager simplifie la tâche des employés et des responsables en leur permettant de de gérer les notes de frais lorsqu'ils sont en déplacement.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <button type="button" class="button">Large button</button>
          </div>
        </div>
      </div>
    </div>
    <div id="sectionSliders">
      <div class="slider">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="..." alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="..." alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="..." alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
    <div id="sectionCards">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-lg-push-3">
            <img src="" alt=""/><h2>CE QUE EXPENSE MANAGER PEU FAIRE POUR VOUS</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <div class="tabTop-1">
            <img class="fa" alt=""/>
            <h3>Automatisez l’enregistrement des dépenses</h3>
            <p>Transformez les reçus dans les entrées de dépenses automatiquement. Regroupez-les et soumettez un rapport de dépenses en ligne en un seul clic</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="tabTop-2">
            <img class="fa" alt=""/>
            <h3>Importer des transactions par carte.</h3>
            <p>Capturez les opérations de débit et de carte de crédit, puis transformez-les en entrées de frais.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="tabTop-3">
            <img class="fa" alt=""/>
            <h3>Envoyer des rapports de dépenses sur la route.</h3>
            <p>Enregistrez les dépenses où que vous soyez et soumettez un rapport complet à l’aide de votre smartphone.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <div class="tabBottom-1">
            <img class="fa" alt=""/>
            <h3>Contrôlez vos dépenses.</h3>
            <p>Plus de confusion concernant les dépenses autorisé ou les limites de dépenses. Regroupez-les et soumettez un rapport de dépenses en ligne en un seul clic</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="tabBottom-2">
            <img class="fa" alt=""/>
            <h3>Simplifiez le processus d’approbation.</h3>
            <p>Rendez la vie facile avec des approbations et des rappels instantanés pour les rapports de dépenses en attente</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="tabBottom-3">
            <img class="fa" alt=""/>
            <h3>Envoyer des rapports de dépenses sur la route.</h3>
            <p>Gérer les dépenses pour rendre votre entreprise plus efficace. Afficher les rapports en fonction de la catégorie de dépenses,des violations des règles et plus encore...</p>
          </div>
        </div>
      </div>
    </div>
    <div id="sectionProfiles">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-md-4">
            <div class="sectionProfilesLight">
              <!-- IMG -->
              <h3>DAVID LACOURTE</h3>
              <p>Commercial</p>
              <div class="sectionProfilesImgGuillements"></div>
              <p>Il faut à mes collègues moins de cinq minutes pour télécharger les reçus, créer des rapports de dépenses et les soumettre pour approbation.</p>
              <div class="sectionProfilesImgGuillements"></div>
            </div>
          </div>
          <div class="secstionProfilesStrong">
            <div class="col-lg-4 col-md-4">
              <h3>CYNTHIA REINHARDT</h3>
              <p>Manager</p>
              <div class="sectionProfilesImgGuillements"></div>
              <p>Avoir un système qui peut contrôler et gérer les rapports, les envoyer pour approbation et suivre cette progression de l’employé à la comptabilité est beaucoup plus facile et plus fiable que l’envoi d’emails et de pièces jointes autour de l’organisation.</p>
              <div class="sectionProfilesImgGuillements"></div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4">
            <div class="sectionProfilesLight">
              <!-- IMG -->
              <h3>MICKAEL DUPRAT</h3>
              <p>Comptable</p>
              <div class="sectionProfilesImgGuillements"></div>
              <p>Il faut à mes collègues moins de cinq minutes pour télécharger les reçus, créer des rapports de dépenses et les soumettre pour approbation.</p>
              <div class="sectionProfilesImgGuillements"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include("include/footer.php"); ?>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  </body>
</html>
