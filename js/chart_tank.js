
(function ($) {
    
  $(document).ready(function(){
      
    if($('[data-chart]').length > 0){
        var id = $('[data-tank-id]').data('tank-id');
        var url = "http://localhost/PhpBlogSystem/controllers/ajax/Status.php?id="+id;
        
        $.ajax({
            url: url,
            method: "GET",
            success: function(data) {
                    
                    var time = [];
                    var room_temp = [];
                    var water_temp = [];
                    data = $.parseJSON(data);
                    
                    if(data.length > 0){
                        for(var i in data) {
                            time.push("Time " + data[i].time);
                            room_temp.push(data[i].room_temp);
                            water_temp.push(data[i].water_temp);
                        }

                        var chartdata = {
                                labels: time,
                                datasets : [
                                        {
                                            label: "Room temp",
                                            fill: false,
                                            lineTension: 0.1,
                                            backgroundColor: "rgba(59, 89, 152, 0.75)",
                                            borderColor: "rgba(59, 89, 152, 1)",
                                            pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
                                            pointHoverBorderColor: "rgba(59, 89, 152, 1)",
                                            strokeColor: "rgba(151,187,205,1)",
                                            data: room_temp
                                        },
                                        {
                                            label: "Water room",
                                            fill: false,
                                            lineTension: 0.1,
                                            backgroundColor: "rgba(29, 202, 255, 0.75)",
                                            borderColor: "rgba(29, 202, 255, 1)",
                                            pointHoverBackgroundColor: "rgba(29, 202, 255, 1)",
                                            pointHoverBorderColor: "rgba(29, 202, 255, 1)",
                                            data: water_temp
                                        }
                                ]
                        };

                        var ctx = $("#mycanvas");
                        var LineGraph = new Chart(ctx, {
                                type: 'line',
                                data: chartdata
                        });
                    }
            },
            error: function(data) {
                console.log('error');
                console.log(data);
            }
        });
        
    }
    
});

}( jQuery ));

