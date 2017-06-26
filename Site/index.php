<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

    <head>
        <title>Expense Manager</title>
        <meta charset="UTF-8">
        <link href="css/desktop.css" rel="stylesheet" type="text/css"/>
        <link href="css/mobile.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
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
            <button type="button" class="button">Demander une demo</button>
          </div>
        </div>
    </div>
  </div>


        <div id="sectionSliders" class="carousel slide" data-ride="carousel">
            <div class="slider">
                <ol class="carousel-indicators">
                    <li data-target="#sectionSliders" data-slide-to="0" class="active inactive"></li>
                    <li data-target="#sectionSliders" data-slide-to="1" class="inactive"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="carouselInnerImg1"><img src="images/devices.png" title="Gestionnaire des frais" class="img-responsive center-block" alt="img_devices_gestionnaire_des_frais"/></div>
                    </div>

                    <div class="item">
                        <div class="carousel-inner-img2"><img src="images/Desktop.png" title="Gestionnaire des frais" class="img-responsive center-block" alt="img_desktop_gestionnaire_des_frais"></div>
                    </div>

                </div>


                <!-- Controls -->
                <a class="left carousel-control" href="#sectionSliders" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#sectionSliders" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>




        <div id="sectionCards">
            <div class="container-fluid">
                <div class="row">
                    <h2 class="text-center"><img src="images/flèche.png" alt="fleche" style="margin-right:10px;" />CE QUE EXPENSE MANAGER PEUT FAIRE POUR VOUS</h2>
                </div>
            </div>

            <div class="row center-block">
                <div class="col-lg-4 col-sm-4">
                <div class="imagehautDroite"><img src="images/biseau-h-d-bleu.png" alt=""/></div>
                    <div class="tabTop-1">
                        <h3 class="text-center"><i class="fa fa-refresh fa-2x"></i>Automatisez l’enregistrement des dépenses</h3>
                        <p class="text-center ">Transformez les reçus dans les entrées de dépenses automatiquement. Regroupez-les et soumettez un rapport de dépenses en ligne en un seul clic</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <div class="tabTop-2">
                        <h3 class="text-center"><i class="fa fa-credit-card fa-2x"></i>Importer des transactions par carte.</h3>
                        <p class="text-center">Capturez les opérations de débit et de carte de crédit, puis transformez-les en entrées de frais.</p>
                    </div>
                    <div class="imagehautDroite"><img src="images/biseau-b-g-bleu.png" alt=""/></div>
                </div>
                <div class="col-lg-4 col-sm-4">
                     <div class="imagehautDroite"><img src="images/biseau-h-g-bleu.png" alt=""/></div>
                    <div class="tabTop-3">
                        <img class="fa" alt=""/>
                        <h3 class="text-center"><i class="fa fa-file fa-2x"></i>Envoyer des rapports de dépenses sur la route.</h3>
                        <p class="text-center">Enregistrez les dépenses où que vous soyez et soumettez un rapport complet à l’aide de vtre smartphone.</p>
                    </div>
                </div>
            </div>


            <div class="row center-block rowSeparator">
                <div class="col-lg-4 col-sm-4">
                     <div class="imagehautDroite"><img src="images/biseau-h-g-bleu.png" alt=""/></div>
                    <div class="tabBottom-1">
                        <h3 class=text-center><i class="fa fa-eur fa-2x"></i>Contrôlez vos dépenses.</h3>
                        <p class=text-center>Plus de confusion concernant les dépenses autorisé ou les limites de dépenses. Regroupez-les et soumettez un rapport de dépenses en ligne en un seul clic</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4">
                     <div class="imagehautDroite"><img src="images/biseau-h-d-bleu.png" alt=""/></div>
                    <div class="tabBottom-2">
                        <h3 class="text-center"><i class="fa fa-eur fa-2x"></i>Simplifiez le processus d’approbation.</h3>
                        <p class="text-center">Rendez la vie facile avec des approbations et des rappels instantanés pour les rapports de dépenses en attente</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <div class="tabBottom-3">
                        <h3 class="text-center"><i class="fa fa-road fa-2x"></i>Envoyer des rapports de dépenses sur la route.</h3>
                        <p class="text-center">Gérer les dépenses pour rendre votre entreprise plus efficace. Afficher les rapports en fonction de la catégorie de dépenses,des violations des règles et plus encore...</p>
                    </div>
                    <div class="imagehautDroite"><img src="images/biseau-b-g-bleu.png" alt=""/></div>
                </div>
            </div>
        </div>

        <div id="distance"></div>

        <div id="sectionProfiles">
            <div class="container-fluid offset">
                <div class="row center-block">
                    <div class="col-lg-4 col-md-4 offset-0">
                        <div class="sectionProfilesLight">
                            <div class="imgProfiles"><img src="images/commercial.png" alt="Gestionnaire_des_frais_Commercial" class="center-block"/></div>
                            <div class="sectionProfilesElements">
                                <h3 class="text-center">DAVID LACOURTE</h3>
                                <p class="text-center">Commercial</p>

                                <div class="sectionProfilesImgGuillements"><img src="images/guillemets-ouvrants-bleu.png"/></div>
                                <p class="text-justify">Il faut à mes collègues moins de cinq minutes pour télécharger les reçus, créer des rapports de dépenses et les soumettre pour approbation.</p>
                                <div class="sectionProfilesImgGuillements"><img src="images/guillemets-fermants-bleu.png" class="pull-right"/></div>
                            </div>
                        </div>
                    </div>


                        <div class="col-lg-4 col-md-4 offset-0">
                             <div class="secstionProfilesStrong">
                                 <div class="imgProfiles"><img src="images/manager.png" alt="Gestionnaire_des_frais_Manager" class="center-block"/></div>
                                 <div class="sectionProfilesElements">
                            <h3 class="text-center">CYNTHIA REINHARDT</h3>
                            <p class="text-center managerColor">Manager</p>

                             <div class="sectionProfilesImgGuillements"><img src="images/guillemets-ouvrants-blanc.png"/></div>
                             <p class="text-justify">Avoir un système qui peut contrôler et gérer les rapports, les envoyer pour approbation et suivre cette progression de l’employé à la comptabilité est beaucoup plus facile et plus fiable que l’envoi d’emails et de pièces jointes autour de l’organisation.</p>
                             <div class="sectionProfilesImgGuillements"><img src="images/guillemets-fermants-blanc.png" class="pull-right"/></div>
                        </div>
                            </div>
                    </div>
                    <div class="col-lg-4 col-md-4 offset-0">
                        <div class="sectionProfilesLight">
                            <div class="imgProfiles"><img src="images/comptable.png" alt="Gestionnaire_des_frais_Comptable" class="center-block"/></div>
                            <div class="sectionProfilesElements">
                            <h3 class="text-center">MICKAEL DUPRAT</h3>
                            <p class="text-center">Comptable</p>

                             <div class="sectionProfilesImgGuillements"><img src="images/guillemets-ouvrants-bleu.png" /></div>
                             <p class="text-justify">Il faut à mes collègues moins de cinq minutes pour télécharger les reçus, créer des rapports de dépenses et les soumettre pour approbation.</p>
                             <div class="sectionProfilesImgGuillements"><img src="images/guillemets-fermants-bleu.png" class="pull-right"/></div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php include("include/footer.php"); ?>


         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </body>
</html>
