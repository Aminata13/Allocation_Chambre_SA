<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer Questions</title>
</head>

<body>
    <h1 class="h3 mb-0 text-gray-800">Enregistrement Chambre</h1>
    <div class="card add-room-card shadow list-card mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Paramétrer une chambre</h6>
        </div>
        <div class="card-body">
            <form id="create-room-form" method="POST" class="needs-validation" action="javascript:void(0)" novalidate>
                <div class="form-group row">
                    <label for="building-select" class="col-sm-2 col-form-label">Bâtiment</label>
                    <div class="col-sm-10">
                        <input required type="number" name="building" class="form-control" id="inputBuilding" placeholder="Numéro de Bâtiment">
                        <div class="error-input"><?= @$error['building'] ?></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputType" class="col-sm-2 col-form-label">Type</label>
                    <div class="col-sm-10">
                        <select required id="room-type" name="type" class="custom-select">
                            <option value="">Choisir un type</option>
                            <option value="individuel">Individuel</option>
                            <option value="double">Double</option>
                        </select>
                        <div class="error-input"><?= @$error['type'] ?></div>
                    </div>
                </div>
                <br><br>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <button type="reset" id="btn-cancel" class="btn btn-danger">Annuler</button>
                    </div>
                    <div class="col-sm-6">
                        <input type="submit" class="btn btn-primary btn-submit" value="Enregistrer">
                    </div>
                </div>
            </form>
            <div id="create-chambre-error"></div>
        </div>
    </div>

    <div class="modal fade text-center" id="roomModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <i class="fa fa-check-circle-o fa-3x" aria-hidden="true"></i>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div id="" class="modal-body">Chambre enregistrée avec succès!</div>
            </div>
        </div>
    </div>

    <script src="<?= BASE_URL ?>public/js/jquery-3.5.1.js"></script>
    <script src="<?= BASE_URL ?>public/js/newChambre.js"></script>
    
</body>

</html>