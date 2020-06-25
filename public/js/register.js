var nbrRow = 0;

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

})