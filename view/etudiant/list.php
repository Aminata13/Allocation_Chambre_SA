<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Joeurs</title>

    
    <link rel="stylesheet" href="public/css/font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body>
    <h1 class="h3 mb-0 text-gray-800">Etudiants</h1>
        <div class="card shadow list-card mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Liste des étudiants</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                              <label>
                                Rechercher:
                                <input class="form-control form-control-sm" type="search" name="search" id="search">
                              </label>
                            </div>
                        </div>
                        <div class="row">
                            <table class="table table-bordered" id="dataTable" aria-describedby="liste des joueurs">
                                <thead>
                                <tr>
                                    <th scope="col">Matricule</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Prénom</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Téléphone</th>
                                    <th scope="col">Date de Naissance</th>
                                    <th scope="col">Profil</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Chambre</th>
                                    <th scope="col">Modifier</th>
                                    <th scope="col">Bloquer</th>
                                </tr>
                                </thead>
                                <tbody>
                                   <tr>
                                    <td>0000 44 67 1111</td>
                                    <td>BA</td>
                                    <td>Aminata</td>
                                    <td>n.minakey@gmail.com</td>
                                    <td>77 602 46 32</td>
                                    <td>13/08/1998</td>
                                    <td>Bousier</td>
                                    <td>Demi bourse</td>
                                    <td>001-2908</td>
                                    <td><i class="fa fa-edit"></i></td>
                                    <td><i class="fa fa-lock"></i></td>
                                  </tr>
                                   <tr>
                                    <td>0000 44 67 1111</td>
                                    <td>BA</td>
                                    <td>Aminata</td>
                                    <td>n.minakey@gmail.com</td>
                                    <td>77 602 46 32</td>
                                    <td>13/08/1998</td>
                                    <td>Bousier</td>
                                    <td>Demi bourse</td>
                                    <td>001-2908</td>
                                    <td><i class="fa fa-edit"></i></td>
                                    <td><i class="fa fa-lock"></i></td>
                                  </tr>
                                   <tr>
                                    <td>0000 44 67 1111</td>
                                    <td>BA</td>
                                    <td>Aminata</td>
                                    <td>n.minakey@gmail.com</td>
                                    <td>77 602 46 32</td>
                                    <td>13/08/1998</td>
                                    <td>Bousier</td>
                                    <td>Demi bourse</td>
                                    <td>001-2908</td>
                                    <td><i class="fa fa-edit"></i></td>
                                    <td><i class="fa fa-lock"></i></td>
                                  </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                  <th scope="col">Matricule</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Prénom</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Téléphone</th>
                                    <th scope="col">Date de Naissance</th>
                                    <th scope="col">Profil</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Chambre</th>
                                    <th scope="col">Modifier</th>
                                    <th scope="col">Bloquer</th>
                                </tr>
                                </tfoot>
                                <tbody id="tbody">
                                </tbody>
                            </table>
                        </div> 
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modifier Joueur</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    </div>
                    <div id="edit-text" class="modal-body">
                        <form method="post" id="edit-form" action="javascript:void(0)" enctype="multipart/form-data" novalidate>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input required type="text" name="surname" class="form-control form-control-user" id="surname" autocomplete="lastname" placeholder="Nom">
                                </div>
                                <div class="col-sm-6">
                                    <input required type="text" name="firstname" class="form-control form-control-user" id="firstname" autocomplete="firstname" placeholder="Prénom">
                                </div>
                            </div>
                            <div class="form-group">
                                <input required type="number" name="score" class="form-control form-control-user" id="score" autocomplete="score" placeholder="Score">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="lockModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <i class="fa fa-check-circle-o fa-3x" aria-hidden="true"></i>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    </div>
                    <div id="lock-text" class="modal-body"></div>
                </div>
            </div>
        </div>

        <!-- <script src="public/js/listPlayers.js"></script> -->
    
</body>
</html>