$(document).ready(function () {
    //alert('Hello World!');
});

// Kun sivu on latautunut kutsutaan ready-funktion parametrina annettua funktiota
$(document).ready(function () {
    // Valitaan kaikki form-elementit, joihin liittyy destroy-form-luokka ja lisätään niihin kuuntelija, joka kutsuu parametrina annettua funktiota, kun lomake lähetetään
    $('form.destroy-form').on('submit', function (submit) {
        // Otetaan kohdelomakkeesta data-confirm-attribuutin arvo
        var confirm_message = $(this).attr('data-confirm');
        // Pyydetään käyttäjältä vahvistusta
        if (!confirm(confirm_message)) {
            // Jos käyttäjä ei anna vahvistusta, ei lähetetä lomaketta
            submit.preventDefault();
        }
    });
});

$(document).ready(function () {
    var i = 1;
    $("#add_row").click(function () {
        $('#addr' + i).html("<td>" + (i + 1) + "</td><td><input name='amount" + i + "' type='text' placeholder='Määrä' class='form-control input-md'/> \n\ </td>\n\
        <td><input  name='unit" + i + "' type='text' placeholder='Mittayksikkö'  class='form-control input-md' > </td>\n\
        <td><input  name='ingredient" + i + "' type='text' placeholder='Raaka-aine'  class='form-control input-md'></td>");

//TÄNNE PITÄISI JOTENKIN SAADA ALASVETOVALIKOIDEN TIEDOT (unit & ingredient)!!!??!

        $('#tab_logic').append('<tr id="addr' + (i + 1) + '"></tr>');
        i++;
    });
    $("#delete_row").click(function () {
        if (i > 1) {
            $("#addr" + (i - 1)).html('');
            i--;
        }
    });

});

//TESTI:
//$(document).ready(function () {
//    var i = 1;
//    $("#add_row").click(function () {
//
//        $('#addr' + i).html("<td>" + (i + 1) + "</td><td><input id='amount" + i + "' name='amount" + i + "' type='text' placeholder='Määrä' class='form-control input-md'/> \n\ </td>\n\
//        <td><select id ='unit" + i + "' class='form-control'  name='unit" + i + "'  placeholder='Mittayksikkö'><option>valitse...</option></select> </td>\n\
//        <td><select id='ingredient" + i + "' name='ingredient" + i + "' placeholder='Raaka-aine'  class='form-control'><option>valitse...</option></select></td>");
//
//        $('#tab_logic').append('<tr id="addr' + (i + 1) + '"></tr>');
//
//        var $options = $("#ingredient" + i);
//        var $units = $("#unit" + i);
//
//        $options.empty();
//        $units.empty();
//
//        $.each($("#ingredient0 option"), function (value, key) {
//            $options.append($("<option>" + key.text + "</option>"));
//        });
//
//        $.each($("#unit0 option"), function (value, key) {
//            $units.append($("<option>" + key.text + "</option>"));
//        });
//
//        i++;
//
//    });
//    $("#delete_row").click(function () {
//        if (i > 1) {
//            $("#addr" + (i - 1)).html('');
//            i--;
//        }
//    });
