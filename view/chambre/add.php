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
            <form id="create-question-form" method="POST" class="needs-validation" action="javascript:void(0)" novalidate>
                <div class="form-group row">
                    <label for="inputNumber" class="col-sm-2 col-form-label" data-toggle="modal" data-target="#questionModal">Numéro</label>
                    <div class="col-sm-10">
                        <input required type="text" name="number" class="form-control" id="inputNumber" placeholder="BB-NN">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="building-select" class="col-sm-2 col-form-label">Batiment</label>
                    <div class="col-sm-10">
                        <select required id="building-select" name="building" class="custom-select">
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value=""4</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputType" class="col-sm-2 col-form-label">Type</label>
                    <div class="col-sm-10">
                        <select required id="question-type" name="type" class="custom-select">
                            <option value="solo">Individuel</option>
                            <option value="double">Double</option>
                        </select>
                    </div>
                </div>
                <div id="answers-field">

                </div>
                <br><br>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                    </div>
                </div>
            </form>
            <div id="create-question-error"></div>
        </div>
    </div>

    <div class="modal fade text-center" id="questionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <i class="fa fa-check-circle-o fa-3x" aria-hidden="true"></i>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div id="" class="modal-body">Question enregistrée avec succès!</div>
            </div>
        </div>
    </div>


    <!-- <script src="public/js/newQuestions.js"></script> -->
</body>

</html>