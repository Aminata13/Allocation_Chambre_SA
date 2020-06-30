<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Joeurs</title>


    <link rel="stylesheet" href="public/css/font-awesome-4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- odcccccccccccccccccccccccccccccccc -->
    <!-- Edit Modal HTML -->
    <div id="editEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Modifier Chambre</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Id Chambre</label>
                            <input type="text" class="form-control" id="id_chambre" placeholder="" value="" readonly
                                required>
                        </div>
                        <div class="form-group">
                            <label>Numero Chambre</label>
                            <input type="text" class="form-control" id="num_chambre" placeholder="" value="" readonly
                                required>
                        </div>
                        <div class="form-group">
                            <label>Numero Batiment</label>
                            <input type="text" class="form-control" id="num_batiment" required>
                        </div>

                        <div class="form-group">
                            <label>Type Chambre</label>
                            <input type="text" class="form-control" id="type_chambre" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-info btn_save" value="Save">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Delete Modal HTML -->
    <div id="deleteEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Supprimé Chambre</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>
                            Voulez-vous vraiment supprimer ces enregistrements?</p>
                        <p class="text-warning"><small>Cette action ne peut pas être annulée.</small></p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-danger confirm_delete" value="Delete">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- odcccccccccccccccccccccccc -->
    <h1 class="h3 mb-0 text-gray-800">Chambres</h1>
    <div class="card shadow list-card mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Liste des chambres</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTable_length" id="dataTable_length">
                                <label for="">
                                    Montrer
                                    <select name="dataTable_length" aria-controls="dataTable"
                                        class="custom-select custom-select-sm form-control form-control-sm" id="">
                                        <option value="10">10</option>
                                        <option value="15">15</option>
                                        <option value="25">25</option>
                                    </select>
                                    Chambres
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row test">
                        <table class="table table-bordered" id="dataTable" aria-describedby="liste des joueurs">
                            <!-- tp odddddddddddddddcc -->
                            <thead>
                                <tr>
                                   <th scope="col">Id</th>
                                    <th scope="col">Numéro</th>
                                    <th scope="col">Batiment</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Modifier</th>
                                    <th scope="col">Supprimer</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                        foreach ($chambres as $key =>$chambre) {?>
                                <tr>
                                    <td><?=$chambre->getId()?></td>
                                    <td><?=$chambre->getNumero()?></td>
                                    <td><?=$chambre->getBatiment()?></td>
                                    <td><?=$chambre->getType()?></td>
                                    <td><a href="#editEmployeeModal" id_chambre="<?=$chambre->getId()?>"
                                            num_chambre="<?=$chambre->getNumero()?>"
                                            num_batimen="<?=$chambre->getNumero()?>"
                                            type_chambr="<?=$chambre->getType()?>" class="btn btn-primary modifi"
                                            data-toggle="modal">Modifier</a></td>

                                    <td><a href="#deleteEmployeeModal" id_chambre="<?=$chambre->getId()?>"
                                            num_chambre="<?=$chambre->getNumero()?>"
                                            num_batimen="<?=$chambre->getNumero()?>"
                                            type_chambr="<?=$chambre->getType()?>" class="btn btn-danger delete"
                                            data-toggle="modal">Supprimer</a></td>
                                </tr><?php
                                    }
                                ?>
                            </tbody>
                            <tbody id="tbody">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <button id="previous" type="button" class="btn btn-previous">Précédent</button>
                </div>
                <div class="col-sm-12 col-md-6">
                    <button id="next" type="button" class="btn btn-next">Suivant</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modifier Joueur</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div id="edit-text" class="modal-body">
                    <form method="post" id="edit-form" action="javascript:void(0)" enctype="multipart/form-data"
                        novalidate>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input required type="text" name="surname" class="form-control form-control-user"
                                    id="surname" autocomplete="lastname" placeholder="Nom">
                            </div>
                            <div class="col-sm-6">
                                <input required type="text" name="firstname" class="form-control form-control-user"
                                    id="firstname" autocomplete="firstname" placeholder="Prénom">
                            </div>
                        </div>
                        <div class="form-group">
                            <input required type="number" name="score" class="form-control form-control-user" id="score"
                                autocomplete="score" placeholder="Score">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
                    <button class="btn btn-warning" form="edit-form" type="submit">Mettre à jour</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="lockModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="public/js/modifier_supprimer.js"></script>


    <!-- odccccccccccccccccccccccccccccccccc -->
    <script>
    $(document).ready(function() {


        $('.modifi').on("click", function() {
            $id = $(this).attr("id_chambre");
            $("#id_chambre").val($id);
            $numero = $(this).attr("num_chambre");
            $("#num_chambre").val($numero);

            $('.btn_save').on('click', function() {
                $batiment = $("#num_batiment").val();
                $type = $("#type_chambre").val();
                $url = `modifierChambre`;
                $.ajax({

                    type: "POST",
                    url: $url,
                    //data: $('form').serialize(),
                    data: {
                        id_chambre: $id,
                        num_chambre: $numero,
                        num_batiment: $batiment,
                        type_chambre: $type
                    },
                    dataType: "text",
                    success: function(data) {
                        alert(data);
                    }
                })

            })


        })



        $('.delete').on("click", function() {
            $id = $(this).attr("id_chambre")
            //alert($id_chambre);

            $('.confirm_delete').on('click', function() {
                // event.preventDefault();
                $.ajax({
                    type: "POST",
                    url: `supprimerChambre`,
                    //data: $('form').serialize(),
                    data: {
                        id_chambre: $id
                    },
                    dataType: "text",
                    success: function(data) {
                        alert(data);
                    }
                })
            })
        })
    });
    </script>

    <!-- odcccccccccccccccccccccccccccccccccc -->

</body>

</html>