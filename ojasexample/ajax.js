const ajaxService = function(fUrl, success, data) {
    if (data === undefined) {
        $.ajax({
            url: fUrl,
            method: 'get',
        }).done(success).fail(function() {
            console.log('API : ' + fUrl + "failed.");
        });
    } else {
        $.ajax({
            url: fUrl,
            method: 'post',
            data: data
        }).done(success).fail(function() {
            console.log('API : ' + fUrl + "failed.");
        });
    }
};


const buttonGroup = function(id) {
    var btnComp = "";
    btnComp += '<div class="btn-group" role="group" aria-label="Button group with nested dropdown">';
    btnComp += '<button type="button" class="btn btn-primary">Action</button>';
    btnComp += '<div class="btn-group" role="group">';
    btnComp += '<button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>';
    btnComp += '<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">';
    btnComp += '<a class="dropdown-item edit-button" data-target="#editPersonal" data-id="' + id + '">Edit</a>';
    btnComp += '<a class="dropdown-item" href="#">Delete</a>';
    btnComp += '</div></div></div>';

    return btnComp;
}

const editAction = function() {
    event.preventDefault();

    var id = parseInt($(this).attr('data-id'));
    var modalId = $(this).attr('data-target');
    $(modalId).modal('show');
    ajaxService('ojas.api.php?action=editP', function(result) {
        console.log(result);
    }, { id: id });
    console.log(id, modalId);
};


const talukaData = {
    "srt": [
        "Adajan",
        "bardoli",
        "chorasi",
        "kamrej",
        "katargam",
        "majura",
        "mahuva",
        "mandvi"
    ],
    "ahd": [
        "Ashrwa",
        "Bavla",
        "Daskroi",
        "Dolka",
        "Mandal",
        "Maninagar"
    ],
    "anand": [
        "Anand",
        "Ananad(city)",
        "Borsad",
        "Sojitra"
    ]
};
var talukaSelector = function(districtId, talukaId) {
    $(districtId).change(function() {
        var taluka = $(this).parent().parent().parent().next().find(talukaId);
        taluka.html('<option disabled selected>Select Taluka</option>');
        var district = $(districtId + ' option:selected').val();
        var talukaList = talukaData[district];
        $.each(talukaList, function(i, n) {
            taluka.append("<option value=" + n + ">" + n + "</option>");
        });
    });
};
$(document).ready(function() {
    talukaSelector('#perm-dist', '#perm-tal');
    talukaSelector('#pres-dist', '#pres-tal');

});

$(document).ready(function() {
    $("#filldetail").on("click", function() {
        if (this.checked) {
            $("#perm-address").val($("#pres-address").val());
            $("#perm-state").val($("#pres-state").val());
            $("#perm-dist").val($("#pres-dist").val());
            $("#perm-tal").val($("#pres-tal").val());
            $("#perm-pincode").val($("#pres-pincode").val());
        } else {
            $("#pres-address").val('');
            $("#pres-state").val('');
            $("#pres-dist").val('');
            $("#pres-tal").val('');
            $("#pres-pincode").val('');
        }
    });
    ajaxService('ojas.api.php?action=getData', function(result) {
        console.log(result);
        result = JSON.parse(result);
        if ($('#datatable')) {
            $('#datatable').html('');
            for (let i = 0; i < result.length; i++) {
                $('#datatable').append('<tr>');
                $('#datatable').append('<td>' + (result[i].fname + ' ' + result[i].lname).toUpperCase() + '</td>');
                $('#datatable').append('<td>' + result[i].category + '</td>');
                $('#datatable').append('<td>' + result[i].gender + '</td>');
                $('#datatable').append('<td>' + result[i].dob + '</td>');
                $('#datatable').append('<td>' + buttonGroup(result[i].id) + '</td>');
                $('#datatable').append('<tr>');

                $('.edit-button').click(editAction);
            }
        }
    });
});