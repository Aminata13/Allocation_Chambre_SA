<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Page d'Inscription</title>

</head>

<body>

  <h1 id="title" class="h3 mb-0 text-gray-800">Enregistrement</h1>
  <div id="signup-card" class="card card-test test o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
      <!-- Nested Row within Card Body -->
      <div class="row">
        <div class="col-lg-9">
          <div class="p-5">
            <div class="text-center">
              <h1 class="h4 text-gray-900 mb-4">Enregistrer un étudiant</h1>
            </div>
            <form id="signup-form" method="POST" class="user needs-validation" action="javascript:void(0)" novalidate enctype="multipart/form-data">
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input required type="text" name="firstname" class="form-control form-control-user" id="firstname" autocomplete="firstname" placeholder="Prénom">
                </div>
                <div class="col-sm-6">
                  <input required type="text" name="surname" class="form-control form-control-user" id="surname" autocomplete="lastname" placeholder="Nom">
                </div>
              </div>
              <div class="form-group">
                <input required type="text" name="username" class="form-control form-control-user" id="login" autocomplete="username" placeholder="Nom d'utilisateur">
              </div>
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input required type="password" name="password" class="form-control form-control-user" id="password" autocomplete="new-password" placeholder="Mot de passe">
                </div>
                <div class="col-sm-6">
                  <input required type="password" name="confirmPassword" class="form-control form-control-user" id="confirmPassword" autocomplete="new-password" placeholder="Confirmer mot de passe">
                </div>
              </div>
              <hr>
              <button type="submit" name="inscription" value="inscription" class="btn btn-primary btn-user btn-block btn-signup">
                S'inscrire
              </button>
            </form>
            <hr>
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

  
  
  <!-- <script src="public/js/signup.js"></script> -->

</body>

</html>