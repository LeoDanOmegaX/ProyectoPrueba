/*
var response = [{"userId": "1","id": "1","title": "delectus aut autem","completed": "false"},{"userId": "1","id": "2","title": "quis ut nam facilis et officia qui","completed": "false"},{"userId": "1","id": "3","title": "fugiat veniam minus","completed": "false"},{"userId": "1","id": "4","title": "et porro tempora","completed": "true"},{"userId": "1","id": "5","title": "laboriosam mollitia et enim quasi adipisci quia provident illum","completed": "false"}];
$.each(response, function(i, item) {
    $('<tr>').html(
        "<td>" + response[i].userId + "</td><td>" + response[i].id + "</td><td>" + response[i].title + "</td><td>" + response[i].completed + "</td>").appendTo('#tabla');
});
*//*
var jsonD = '[{"userId": "1","id": "1","title": "delectus aut autem","completed": "false"},{"userId": "1","id": "2","title": "quis ut nam facilis et officia qui","completed": "false"},{"userId": "1","id": "3","title": "fugiat veniam minus","completed": "false"},{"userId": "1","id": "4","title": "et porro tempora","completed": "true"},{"userId": "1","id": "5","title": "laboriosam mollitia et enim quasi adipisci quia provident illum","completed": "false"}]';
            
            $.ajax({
                url: '/echo/json/',
                type: 'POST',
                data: {
                    json : jsonD
                },
                success: function (response) {
                    var trHTML = '';
                    $.each(response, function (i, item) {
                        alert(i,item);
                        trHTML += '<tr><td>' + item.id + '</td><td>' + item.title + '</td><td>' + item.completed + '</td></tr>';
                    });
                    alert(trHTML);
                    $('#tabla').append(trHTML);
                }
            });*/

            var url = 'https://jsonplaceholder.typicode.com/todos';

            $(document).ready(function () {
              $.ajax({
                url: url,
                jsonp: "cb",
                dataType: 'json',
                success: function (data) {
                  console.log(data); //para saber si la llamada es correcta.
                  $.each(data, function (index, item) {
                      
                    $('#table').append('<tr><td>' + item.id + '</td><td>' + item.title + '</td><td>' + item.completed + '</td></tr>'); //agregamos los elementos al tbody
                  });           
                } 
              });  
            }); 