$(document).ready(function(){
//    $.ajax({
//            url: "http://localhost/PhpBlogSystem/controllers/ajax/Status.php",
//            method: "GET",
//            success: function(data) {
//                    console.log(data);
//                    var time = [];
//                    var room_temp = [];
//                    data =  $.parseJSON(data);
//                    for(var i in data) {
//                        //console.log(data[i].time);
//                            time.push("Time " + data[i].time);
//                            room_temp.push(data[i].room_temp);
//                    }
//
//                    var chartdata = {
//                            labels: time,
//                            datasets : [
//                                    {       
//                                        label: 'Room temp',
//                                        backgroundColor: '#d4e157',
//                                        color: '#000',
//                                        borderColor: '#000',
//                                        hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
//                                        hoverBorderColor: 'rgba(0, 0, 0, 1)',
//                                        data: room_temp
//                                    }
//                            ]
//                    };
//
//                    var ctx = $("#mycanvas");
//
//                    var barGraph = new Chart(ctx, {
//                            type: 'bar',
//                            data: chartdata
//                    });
//            },
//            error: function(data) {
//                console.log('error');
//                console.log(data);
//            }
//    });

    $(document).ready(function(){
        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
        $('.modal-trigger').leanModal();
    });
    
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


