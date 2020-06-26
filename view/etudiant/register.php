<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enregistrement Etudiant</title>

</head>

<body>

    <h1 id="title" class="h3 mb-0 text-gray-800">Enregistrement</h1>
    <div id="signup-card" class="card card-test test o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Enregistrer un étudiant</h1>
                        </div>
                        <form id="register-form" method="POST" class="user needs-validation" action="javascript:void(0)" novalidate enctype="multipart/form-data">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input required type="text" name="firstname" class="form-control form-control-user" id="firstname" autocomplete="firstname" placeholder="Prénom">
                                </div>
                                <div class="col-sm-6">
                                    <input required type="text" name="surname" class="form-control form-control-user" id="surname" autocomplete="lastname" placeholder="Nom">
                                </div>
                            </div>

                            <div class="form-group">
                                <input required type="email" name="username" class="form-control form-control-user" id="login" autocomplete="username" placeholder="E-mail" pattern=" \b[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}\b">
                            </div>
                            <div class="form-group">
                                <label for=""></label>
                                <input type="text" class="form-control form-control-user" name="telephone" id="" aria-describedby="helpId" placeholder="Téléphone">
                                <small id="helpId" class="form-text text-muted"></small>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3 label-register">
                                    <label for="">Date de Naissance</label>
                                </div>
                                <div class="col-sm-9">
                                    <input class="form-control form-control-user" type="date" value="2011-08-19" id="example-date-input" placeholder="Date de naissance">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3 label-register">
                                    <label for=""> Profil de l'Etudiant</label>
                                </div>
                                <div class="col-sm-9">
                                    <select class="form-control" name="choix" id="choix">
                                        <option selected>Choisir un profil</option>
                                        <option value="ebl">Boursier Logé</option>
                                        <option value="ebnl">Boursier Non Logé</option>
                                        <option value="enb">Non Boursier</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-5" id="inputs">
                                    <div class="row" id="row_0">
                                         <button type="button" class="btn btn-success" onclick="onAddInput()">+</button> 
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <button type="submit" class="btn btn-danger">Annuler</button>
                                </div>
                                <div class="col-sm-6">
                                    <button type="submit" class="btn btn-primary btn-submit">Enregistrer</button>
                                </div>
                            </div>
                        </form>

                        <div id="signup-error"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="modal fade text-center" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <i class="fa fa-check-circle-o fa-3x" aria-hidden="true"></i>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div id="success-text" class="modal-body"></div>
            </div>
        </div>
    </div>



    <script src="<?= BASE_URL ?>public/js/register.js"></script>

</body>

</html>