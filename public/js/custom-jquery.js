
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

var cargarCategorias = function(event) {
    if (event.preventDefault != undefined) {
    event.preventDefault();
    }
    $.ajax({
        url:'/categories/list',
        method:'get',
        success:function(data){
    
            $('#categories-list').html(data);
    
        },
        error: function( event, request, settings ) {
            $( "#msg" ).append( "Error requesting page " + settings.url + "" );
          }
    });
}


$(cargarCategorias);

var enviarCategorias = function(event,title) {
    if (event.preventDefault != undefined) {
    event.preventDefault();
    }
    $.ajax({
        url:'/categories/store',
        method:'post',
        data: { 
            title: title
        },
        complete:function(data){

            cargarCategorias(event);
        },
        error: function( event, request, settings ) {
            $( "#msg" ).append( "Error requesting page " + settings.url + "" );
          }
    });
}

$(document).ready(function() {

    $('#button').on('click',cargarCategorias)

    $('#button2').on('click',function() {

        var title = prompt("Introduzca categoría");
        enviarCategorias(event,title);

    })
});
