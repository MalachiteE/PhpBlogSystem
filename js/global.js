$(document).ready(function(){
    $.ajax({
            url: "http://localhost/PhpBlogSystem/ajax.php",
            method: "GET",
            success: function(data) {
                    console.log(data);
                    var time = [];
                    var room_temp = [];
                    data =  $.parseJSON(data);
                    for(var i in data) {
                        //console.log(data[i].time);
                            time.push("Time " + data[i].time);
                            room_temp.push(data[i].room_temp);
                    }

                    var chartdata = {
                            labels: time,
                            datasets : [
                                    {       
                                        label: 'Room temp',
                                        backgroundColor: '#d4e157',
                                        color: '#000',
                                        borderColor: '#000',
                                        hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
                                        hoverBorderColor: 'rgba(0, 0, 0, 1)',
                                        data: room_temp
                                    }
                            ]
                    };

                    var ctx = $("#mycanvas");

                    var barGraph = new Chart(ctx, {
                            type: 'bar',
                            data: chartdata
                    });
            },
            error: function(data) {
                console.log('error');
                console.log(data);
            }
    });
});


