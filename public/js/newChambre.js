const URL_ROOT = "http://localhost/allocation_chambre_sa/";
const $chambreForm = $("#create-room-form");
const $select = $("#room-type");

$chambreForm.on('submit', function () {
    let selectedValue = $select.val();
    console.log('hello');
    
    $chambreForm.addClass("was-validated");

    var error = false;
    if(!$('#inputBuilding').val() || !selectedValue) {
        error = true;     
    }
    console.log($chambreForm.serialize());

    console.log(`${URL_ROOT}Chambre/addRoom`);
    
    
    //traitement AJAX only when there is no errors with the form
    if(!error) {
        $.ajax({
            url: `${URL_ROOT}Chambre/addRoom`,
            method: "POST",
            data: $chambreForm.serialize(),
            success: function (data) {
                console.log(data);
                
              $("#roomModal").modal("toggle");
              setTimeout(function () {
                $("#roomModal").modal("hide");
              }, 2000);
            },
        });
    }
});