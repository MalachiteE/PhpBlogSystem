(function ($) {

    $(document).ready(function(){

        $( "[data-delete-tank]" ).click(function(e) {
            e.preventDefault();

            var href = $(this).attr('href');
            var id = $(this).data('id');

            $.post( 
                href, 
                {id: id}
            )
            .done(function(data) {
                if(data){
                    $('#tank'+id).closeModal();
                    $('[data-hide-deleted-tank-'+id+']').addClass('hide');
                }
            })
            .fail(function() {
                alert( "error" );
            }
            );       
        });

    });
    
});

