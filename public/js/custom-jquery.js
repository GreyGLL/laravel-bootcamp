
var cargarCategorias = function() {
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

$('#button').on('click',cargarCategorias);