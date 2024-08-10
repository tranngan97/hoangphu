jQuery('#answer-form').on('submit', function(e) {
    debugger;
    e.preventDefault();

    var name = $(this).find('input[name=name]').val();

    $.ajax({
        type: "POST",
        url: host+'/comment/add',
    }).done(function( msg ) {
        alert( msg );
    });

});
