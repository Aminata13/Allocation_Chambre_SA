<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'Inscription</title>

</head>

<body>

    <h1 id="title" class="h3 mb-0 text-gray-800">Enregistrement Etudiant</h1>
    <div id="signup-card" class="card card-test test o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <!-- <div class="col-lg-3 d-none d-lg-block" id="avatar">
                    <div class="avatar"><img src="public/img/img5.jpg" alt="User Avatar" class="img-preview"></div>
                    <div class="avatar-legend">Avatar du joueur</div>
                    <div class="user-form-error upload" id="upload-error"></div>
                </div> -->
                <div class="col-lg-9">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Créer un compte</h1>
                        </div>
                        <form id="signup-form" method="POST" class="user needs-validation" action="javascript:void(0)"
                            novalidate enctype="multipart/form-data">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input required type="text" name="firstname" class="form-control form-control-user"
                                        id="firstname" autocomplete="firstname" placeholder="Prénom">
                                </div>
                                <div class="col-sm-6">
                                    <input required type="text" name="surname" class="form-control form-control-user"
                                        id="surname" autocomplete="lastname" placeholder="Nom">
                                </div>
                            </div>

                            <div class="form-group">
                                <input required type="email" name="username" class="form-control form-control-user"
                                    id="login" autocomplete="username" placeholder="E-mail"
                                    pattern=" \b[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}\b">
                            </div>
                            <div class="form-group">
                                <label for=""></label>
                                <input type="text" class="form-control" name="telephone" id="" aria-describedby="helpId"
                                    placeholder="Saisir numéro téléphone">
                                <small id="helpId" class="form-text text-muted"></small>
                            </div>
                            <div class="form-group row">
                                <label for="example-date-input" class="col-2 col-form-label">Date</label>
                                <div class="col-10">
                                    <input class="form-control" type="date" value="2011-08-19" id="example-date-input"
                                        placeholder="Date de naissance">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for=""></label>
                                <select class="form-control" name="choix" id="choix">
                                    <option selected>Type d'étudiant</option>
                                    <option value="ebl">Etudiant boursier logé</option>
                                    <option value="ebnl">Etudiant boursier non logé</option>
                                    <option value="enb">Etudiant non boursier</option>
                                </select>
                            </div>
                            <!--  <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input required type="password" name="password"
                                        class="form-control form-control-user" id="password" autocomplete="new-password"
                                        placeholder="Mot de passe">
                                </div>
                                <div class="col-sm-6">
                                    <input required type="password" name="confirmPassword"
                                        class="form-control form-control-user" id="confirmPassword"
                                        autocomplete="new-password" placeholder="Confirmer mot de passe">
                                </div>
                            </div> -->
                            <!--  <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <div class="btn-file-text">Avatar</div>
                                </div>
                                <div class="col-sm-6">
                                    <label class="btn-file">
                                        <input required type="file" name="file" class="form-control-file"
                                            id="inpFile">Choisir un fichier
                                    </label>
                                </div>
                            </div> -->
                            <div class="col-lg-5" id="inputs">
                                <div class="row" id="row_0">
                                    <button type="button" class="btn btn-success" onclick="onAddInput()">+</button>
                                </div>
                            </div>
                            <hr>
                           
                            <button type="submit" name="inscription" value="inscription"
                                class="btn btn-primary btn-user btn-block btn-signup">
                                Enregistrer
                            </button>
                        </form>
                        <hr>
                        <!--   <a class="small login-link" href="index.php">Vous avez déjà un compte? Connectez-vous!</a> -->
                        <div id="signup-error"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="modal fade text-center" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
    <script src="public/js/register.js"></script>

</body>

</html>
<
<script>
/* const $select = $("#question-type");
const $answersBlock = $("#answers-field");
const $questionForm = $("#create-question-form");
const $error = $("#create-question-error");

//display answer field depending on the selected option on the select
$select.on("change", function () {
  const selectedValue = $(this).val();

  if (selectedValue == "ebl") {
    $answersBlock.html("");
    $answersBlock.append(`
        <div id="textAnswer" class="form-group row">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Réponse</span>
                </div>
                <textarea required name="textAnswer" class="form-control" aria-label="With textarea"></textarea>
            </div>
        </div>
        `);
  } else {
    if (selectedValue == "ebnl") {
      $answersBlock.html("");
      $answersBlock.append(`
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Réponse 1</label>
                <div class="col-sm-9">
                    <div class="input-group mb-3">
                        <input required type="text" name="simpleAnswer1" class="form-control" aria-label="Text input with radio">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="radio" name="answer" value="simpleAnswer1" aria-label="radio for one of the answer" required> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-1">
                    <i class="fa fa-trash fa-2x" aria-hidden="true"></i>
                </div>
            </div>
        `);
    } else {
      if (selectedValue == "enl") {
        $answersBlock.html("");
        $answersBlock.append(`
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Réponse 1</label>
                    <div class="col-sm-9">
                        <div class="input-group mb-3">
                            <input required type="text" name="multipleAnswer1" class="form-control" aria-label="Text input with checkbox">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="checkbox" name="checkbox1" value="multipleAnswer1" aria-label="checkbox for one of the answer" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-1">
                        <i class="fa fa-trash fa-2x" aria-hidden="true"></i>
                    </div>
                </div>
<<<<<<< HEAD
            `);
      }
    }
  }
});

var i = 1;
var j = 1;
//add fields when plus icon is clicked and type simple or multiple is is already selected
$("#add-field").on("click", function () {
  let selectedValue = $select.val();

  if (selectedValue == "ebl") {
    i++;

    $answersBlock.append(`
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Réponse ${i}</label>
                <div class="col-sm-9">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="simpleAnswer${i}" aria-label="Text input with radio" required>
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="radio" name="answer" value="simpleAnswer${i}" aria-label="radio for one of the answer" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-1">
                    <i class="fa fa-trash fa-2x delete" aria-hidden="true"></i>
                </div>
            </div>
        `);
  } else {
    if (selectedValue == "ebnl") {
      j++;
      $answersBlock.append(`
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Réponse ${j}</label>
                <div class="col-sm-9">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="multipleAnswer${j}" aria-label="Text input with checkbox" required>
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" name="checkbox${j}" value="multipleAnswer${j}" aria-label="checkbox for one of the answer" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-1">
                    <i class="fa fa-trash fa-2x delete" aria-hidden="true"></i>
                </div>
            </div>
        `);
    }
  }
});
=======
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
>>>>>>> 0b8f13dc77c5760de8fc195539b3511c41b85a9b

//delete field when trash icon is clicked
$answersBlock.on("click", ".delete", function () {
  let $toDelete = $(this).parent().parent();
  $toDelete.remove();
});

$questionForm.on("submit", function () {
  let selectedValue = $select.val();
  $questionForm.addClass("was-validated");

  //test pour savoir si oui ou non déclencher le traitement ajax
  var empty = false;
  $("input").each(function () {
    if (!$(this).val()) {
      empty = true;
    }
  });

  var error = false;
  if (!empty) {
    //radio button validations
    let radios = $('input[type="radio"]');
    if (selectedValue == "simple" && radios.length < 2) {
      error = true;
      $error.text("*Veuillez remplir au moins deux champs réponses.");
      setTimeout(function () {
        $error.html("");
      }, 3000);
    }

    let checkedRadio = $('input[type="radio"]:checked');
    if (selectedValue == "simple" && checkedRadio.length == 0) {
      error = true;
      $error.text("*Veuillez cocher la bonne réponse.");
      setTimeout(function () {
        $error.html("");
      }, 3000);
    }

    //checkbox input validations
    let checkbox = $('input[type="checkbox"]:checked');
    if (selectedValue == "multiple" && checkbox.length < 2) {
      error = true;
      $error.text("*Veuillez cocher 2 réponses au moins.");
      setTimeout(function () {
        $error.html("");
      }, 3000);
    }
  }

  if (!empty && !error) {
    $.ajax({
      url: "traitements/questionController.php",
      method: "POST",
      data: $questionForm.serialize(),
      success: function (data) {
        // $questionForm.removeClass("was-validated");
        $questionForm.each(function(){
          this.reset();
        });
        $("#questionModal").modal("toggle");
        setTimeout(function () {
          $("#questionModal").modal("hide");
        }, 2000);
      },
    });
  }
}); */
   




//LEEEEEEEEEEEEEEEEEEEEEEEEEEEEE MIEEEEEEEEEEEEEEEEEEEEEEENNNNNNNNNNNNNNNNNNNNNN
/* var nbrRow = 0;

function onAddInput() {
    var type = document.getElementById('choix').value;
    if (type == 'ebl') {
        nbrRow++;
        var divInputs = document.getElementById('inputs');
        var newInput = document.createElement('div');
        var recup = document.getElementById('choix').value;
        newInput.setAttribute('class', 'row');
        newInput.setAttribute('id', 'row_' + nbrRow);
        newInput.innerHTML = `
                <input type="number" min="20000" max="40000" class="champ font" name="reponse" error="error-2">
                <span class="custom-control-description">Veuillez saisir la somme du bourse</span>
                <button type="button" class="btn btn-danger" onclick="onDeleteInput(${nbrRow})">X</button>
                <input id="prodId" name="nb_reponse" type="hidden" value="comp">
                <div class="error-form" id="error-2"></div>
                `;
        divInputs.appendChild(newInput);
    } else if (type == 'ebnl') {
        nbrRow++;
        var divInputs = document.getElementById('inputs');
        var newInput = document.createElement('div');
        var recup = document.getElementById('choix').value;
        newInput.setAttribute('class', 'row');
        newInput.setAttribute('id', 'row_' + nbrRow);
        newInput.innerHTML = `
                <input type="number" min="20000" max="40000" class="champ font" name="reponse${nbrRow}" error="error-3">
                <span class="custom-control-description">Veuillez saisir la somme du bourse</span>
                <button type="button" class="btn btn-danger" onclick="onDeleteInput(${nbrRow})">X</button>
                <input id="prodId" name="nb_reponse" type="hidden" value="comp">
                <div class="error-form" id="error-3"></div>
                `;
        divInputs.appendChild(newInput);
    } else if (type == 'enb') {
        nbrRow++;
        var divInputs = document.getElementById('inputs');
        var newInput = document.createElement('div');
        var recup = document.getElementById('choix').value;
        newInput.setAttribute('class', 'row');
        newInput.setAttribute('id', 'row_' + nbrRow);
        newInput.innerHTML = `
                <input type="text" class="champ font" name="reponse${nbrRow}" error="error-4">
                <span class="custom-control-description">Veuillez saisir l'adresse</span>
                <button type="button" class="btn btn-danger" onclick="onDeleteInput(${nbrRow})">X</button>
                <input id="prodId" name="nb_reponse" type="hidden" value="comp">
                <div class="error-form" id="error-4"></div>
                `;
        divInputs.appendChild(newInput);
    }
}

function onDeleteInput(n) {
    var target = document.getElementById('row_' + n);
    setTimeout(function() {
        target.remove();
    }, 500)
    fadeOut('row_' + n);
}

function fadeOut(idTarget) {
    var target = document.getElementById(idTarget);
    var effect = setInterval(function() {
        if (!target.style.opacity) {
            target.style.opacity = 1;
        }
        if (target.style.opacity) {
            target.style.opacity -= 0.1;
        } else {
            clearInterval(effect);
        }
    }, 200)
}

const inputs = document.getElementsByTagName("input");
for (input of inputs) {
    input.addEventListener("keyup", function(e) {
        if (e.target.hasAttribute("error")) {
            var idDivError = e.target.getAttribute("error");
            document.getElementById(idDivError).innerText = ""
        }
    })
}
document.getElementById("form-connexion").addEventListener("submit", function(e) {
    const inputs = document.getElementsByTagName("input");
    var error = false;
    for (input of inputs) {
        if (input.hasAttribute("error")) {
            var idDivError = input.getAttribute("error");
            if (!input.value) {
                document.getElementById(idDivError).innerText = "Ce champ est obligatoire"
                error = true
            }
        }
    }
    if (error) {
        e.preventDefault();
        return false;
    }

})

const textareas = document.getElementsByTagName("textarea");
for (input of inputs) {
    input.addEventListener("keyup", function(e) {
        if (e.target.hasAttribute("error")) {
            var idDivError = e.target.getAttribute("error");
            document.getElementById(idDivError).innerText = ""
        }
    })
}
document.getElementById("form-connexion").addEventListener("submit", function(e) {
    const textareas = document.getElementsByTagName("textarea");
    var error = false;
    for (textarea of textareas) {
        if (textarea.hasAttribute("error")) {
            var idDivError = textarea.getAttribute("error");
            if (!textarea.value) {
                document.getElementById(idDivError).innerText = "Ce champ est obligatoire"
                error = true
            }
        }
    }
    if (error) {
        e.preventDefault();
        return false;
    }

})

const selects = document.getElementsByTagName("choix");
for (choix of selects) {
    choix.addEventListener("keyup", function(e) {
        if (e.target.hasAttribute("error")) {
            var idDivError = e.target.getAttribute("error");
            document.getElementById(idDivError).innerText = ""
        }
    })
}
document.getElementById("form-connexion").addEventListener("submit", function(e) {
    const selects = document.getElementsByTagName("choix");
    var error = false;
    for (choix of selects) {
        if (choix.hasAttribute("error")) {
            var idDivError = choix.getAttribute("error");
            if (!choix.value) {
                document.getElementById(idDivError).innerText = "Ce champ est obligatoire"
                error = true
            }
        }
    }
    if (error) {
        e.preventDefault();
        return false;
    }

}) */
</script>