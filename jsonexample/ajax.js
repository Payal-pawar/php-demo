/*const tableDataCreator = function(data) {
    return '<tr><td>' + data.id + '</td><td>' + data.title + '</td><td>' + data.surname + '</td><td>' + data.firstname + '</td><td>' + data.fatherhusbandname + '</td><td>' + data.mothersname + '</td><td>' + data.gender + '</td><td>' + data.dateofbirth + '</td><td>' + data.maritalstatus + '</td><td>' + data.category + '</td></tr>';
}*/

/*const cardDataCreator = function(data) {
    return '<p> Id:' + data.id + '</p><p> Title:' + data.title + '</p>';
}*/

$(document).ready(function() {
    $.ajax({
            url: 'http://localhost/payal/jsonexample/index.php',
            method: 'get'
        })
        .done(function(result) {
            var data = JSON.parse(result);
            /*$(data).each(function(index, data) {
                //console.log(index, data);
                $('#ajaxData').append(cardDataCreator(data));
            });*/
            var htmlCard = "";
            var counter = 0;
            for (var i = 0; i < data.length / 3; i++) {
                htmlCard += '<div class="row m-5">';
                for (let j = 0; j < 3; j++) {
                    if (counter >= data.length) {
                        break;
                    }
                    htmlCard += '<div class="col-md-4">'
                    htmlCard += '<div class="card bg-primary text-white">';
                    htmlCard += '<div class="card-body">';
                    htmlCard += '<p class="card-text">Id: ' + data[counter].id + "</p>";
                    htmlCard += '<p class="card-text">Title:' + data[counter].title + "</p>";
                    htmlCard += '<p class="card-text">Surname:' + data[counter].surname + "</p>";
                    htmlCard += '<p class="card-text">FirstName:' + data[counter].firstname + "</p>";
                    htmlCard += '<p class="card-text">Father/HusbandName:' + data[counter].fatherhusbandname + "</p>";
                    htmlCard += '<p class="card-text">mothersname:' + data[counter].mothersname + "</p>";
                    htmlCard += '<p class="card-text">Gender:' + data[counter].gender + "</p>";
                    htmlCard += '<p class="card-text">Date Of Birth:' + data[counter].dateofbirth + "</p>";
                    htmlCard += '<p class="card-text">Marrital Status:' + data[counter].maritalstatus + "</p>";
                    htmlCard += '<p class="card-text">Category:' + data[counter].category + "</p>";
                    htmlCard += '</div>';
                    htmlCard += '</div>';
                    htmlCard += '</div>';
                    counter++;
                }
                htmlCard += '</div>';
                if (counter >= data.length) {
                    break;
                }
            }
            $('#ajaxData').html(htmlCard);
        })
        .fail(function() {
            console.log('API ERROR');
        });
});