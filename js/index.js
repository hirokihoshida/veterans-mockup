/**
 * Created by Hiroki on 12/17/2017.
 */
$(document).ready(function(){
    $('.collapsible').collapsible();
});

$(document).ready(function() {
    $('select').material_select();
});

$(document).ready(function(){
    //initialize all modals
    $('.modal').modal();

    //now you can open modal from code
    $('#modal1').modal('open');

    //or by click on trigger
    $('.trigger-modal').modal();
});
