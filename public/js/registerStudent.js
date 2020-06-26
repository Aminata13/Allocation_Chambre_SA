const $select = $("#choix");
const $answersBlock = $("#answers-field");
console.log("hello");

//display answer field depending on the selected option on the select
$select.on("change", function () {
  const selectedValue = $(this).val();

  if (selectedValue == "ebl") {
    $answersBlock.html("");
    $answersBlock.append(`
        <div class="form-group row">
            <div class="col-sm-3 label-register">
                <label for="">Type</label>
            </div>
            <div class="col-sm-9 label-register">
                <select class="form-control" name="" id="">
                    <option selected>Choisir le type de bourse</option>
                    <option value="ebl">Demi bourse</option>
                    <option value="ebnl">Bourse entière</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <input required type="text" name="montant" class="form-control form-control-user" id="montant" autocomplete="text" placeholder="Montant de la Bourse">
            </div>
            <div class="col-sm-6">
                <input required type="text" name="chambre" class="form-control form-control-user" id="chambre" autocomplete="text" placeholder="Chambre">
            </div>    
        </div>
          `);
  } else {
    if (selectedValue == "ebnl") {
      $answersBlock.html("");
      $answersBlock.append(`
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="form-group row">
                    <div class="col-sm-3 label-register">
                        <label for="">Type</label>
                    </div>
                    <div class="col-sm-9">
                        <select class="form-control" name="choix" id="bourse-select">
                            <option selected>Choisir le type de bourse</option>
                            <option value="ebl">Demi bourse</option>
                            <option value="ebnl">Bourse entière</option>                    
                        </select>
                    </div>
                </div>
                </div>
                <div class="col-sm-6">
                    <input required type="text" name="montantBourse" class="form-control form-control-user" id="montantBourse" autocomplete="text" placeholder="Montant bourse">
                </div>
            </div>
          `);
    } else {
      if (selectedValue == "enb") {
        $answersBlock.html("");
        $answersBlock.append(`
                
                    <div class="form-group">
                        <input required type="text" name="adress" class="form-control form-control-user" id="adress" autocomplete="adress" placeholder="Adresse">
                    </div>
                 
            `);
      }
    }
  }
});
