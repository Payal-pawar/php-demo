/**
 * Book store API
 */
const bookstore = {};
/*
 * ALL API PATH REGISTRATION
 */
bookstore.APP_URL = "http://localhost:8080/samplepro/";
bookstore.GET_BOOKS = "all-book";
bookstore.GET_BOOK = "get-book";
bookstore.UPDATE_BOOK = "update-book";
bookstore.ADD_BOOK = "add-book";
bookstore.DELETE_BOOK = "delete-book";
bookstore.viewMode = "table";

bookstore.ajaxService = function(sUrl, type, dataJson, successFun) {
    $.ajax({
            url: bookstore.APP_URL + sUrl,
            method: type,
            data: dataJson,
        })
        .done(successFun)
        .fail(function() {
            console.log("Failed to Call api : " + sUrl);
            debugger;
        });
};

bookstore.tableCreator = function(result,element){
    let dataTable = "<tr>";
    for (var i = 0; i < result.length; i++) {
        dataTable += "<td>" + result[i].book_id + "</td>";
        dataTable += "<td>" + result[i].title + "</td>";
        dataTable += "<td>" + result[i].author + "</td>";
        dataTable += "<td>" + result[i].price + "</td>";
        dataTable += '<td><div class="btn-group" role="group">' +
            '<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>' +
            '<div class="dropdown-menu">' +
            '<button class="dropdown-item btn-edit" data-toggle="modal" data-target="#editbook" data-id="' + result[i].book_id + '"><i class="fas fa-edit"></i></button>' +
            '<button class="dropdown-item btn-delete" data-id="' +
            result[i].book_id +
            '"><i class="fas fa-trash-alt"></i></button>' +
            '</div></div></td>';
        dataTable += "</tr>";
    }
    $(element).html(dataTable);
};

bookstore.cardCreator = function(result,element){
    let dataCard = "";
    let counter = 0;
    for (var i = 0; i < result.length; i++) {
        if (counter == 0) {
            dataCard += "<div class='row mt-5'>";
        }
        dataCard += '<div class="col-sm-4"><div class="card bg-info text-white"><div class="card-body">';
        dataCard += '<h5 class="card-title">' + result[i].title +
            "</h5>";
        dataCard += ' <p class="card-text">Author : ' +
            result[i].author + "</p>";
        dataCard += ' <p class="card-text">Price : ' +
            result[i].price + "</p>";
        dataCard += "</div></div></div>";
        counter++;
        if (counter == 3) {
            counter = 0;
            dataCard += "</div>";
        }
        $(element).html(dataCard);
        $(element).hide();
    }
};

bookstore.getAllBooks = function(result) {
    bookstore.resetEvent();
    bookstore.viewModes();
    // table mode
    bookstore.tableCreator(result, '#bookData');
    // card mode
    bookstore.cardCreator(result, '#bookData2');
    bookstore.editAction();
    bookstore.deleteAction();
};

bookstore.resetEvent = function() {
    $('.btn-edit').unbind("click");
    $('.btn-delete').unbind("click");
    $('.btn-save-book').unbind('click');
};
bookstore.viewModes = function() {
    $('.btn-table').click(function() {
        if (bookstore.viewMode !== "table") {
            bookstore.viewMode = "table";
            $('#bookData').parent('table').show();
            $('#bookData2').hide();
        }
    });
    $('.btn-card').click(function() {
        if (bookstore.viewMode !== "card") {
            bookstore.viewMode = "card";
            $('#bookData2').show();
            $('#bookData').parent('table').hide();
        }
    });
};

bookstore.editAction = function() {
    $('.btn-edit').click(function() {
        let dataid = $(this).attr('data-id');        
        bookstore.ajaxService(bookstore.GET_BOOK,"post",{id: dataid},function(result) {
            $('input[name="book_id"]').val(result.book_id);
            $('input[name="title"]').val(result.title);
            $('input[name="author"]').val(result.author);
            $('input[name="price"]').val(result.price);
        });
    });
};


bookstore.resetData = function() {
    $('input[name="book_id"]').val('');
    $('input[name="title"]').val('');
    $('input[name="author"]').val('');
    $('input[name="price"]').val('');
    $('form')[0].reset();
};
bookstore.validateButton = true;

$('form.needs-validation').submit(function(){
	for (var i = 0; i < this.length; i++) {
		if(this[i].checkValidity() == false){
			bookstore.validateButton = false;
			break;
		}
	}
	this.classList.add('was-validated');
	if(bookstore.validateButton){
		bookstore.updateAction();
	}
	bookstore.validateButton = true;
});

bookstore.updateAction = function() {
		$('.btn-save-book').attr('disabled','true');
		$('.btn-close').attr('disabled','true');
        $('.btn-save-book').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span><span class="sr-only">Saving...</span>');
	    if ($('input[name="book_id"]').val() !== null && $('input[name="book_id"]').val() !== "" && $('input[name="book_id"]').val() != undefined) {
	        let data = {
	            id: $('input[name="book_id"]').val(),
	            title: $('input[name="title"]').val(),
	            author: $('input[name="author"]').val(),
	            price: $('input[name="price"]').val()
	        };
	        bookstore.ajaxService(bookstore.UPDATE_BOOK, "post", data, function(result) {});
	        setTimeout(() => {
	            bookstore.viewModes();
	            bookstore.start();
	        }, 1000);
	    } else {
		        let data = {
		            title: $('input[name="title"]').val(),
		            author: $('input[name="author"]').val(),
		            price: $('input[name="price"]').val()
		        };
		        bookstore.ajaxService(bookstore.ADD_BOOK, "post", data, function(result) {});
		        setTimeout(() => {
		            bookstore.start();
		            $('#bookData').parent('table').show();
		            $('#bookData2').hide();
		            bookstore.viewMode = "table";
		
		        }, 1000);	
	    }        	
        bookstore.resetData();
        setTimeout(() => {
            $('#editbook').modal('hide');
    		$('.btn-save-book').removeAttr('disabled');
            $('.btn-save-book').html('Save Changes');
    		$('.btn-close').removeAttr('disabled');
        }, 2000);		
    	$('form')[0].classList.remove('was-validated');
};

bookstore.deleteAction = function(){
	$('.btn-delete').click(function(){
		let data = $(this).attr('data-id');
	    bookstore.ajaxService(bookstore.DELETE_BOOK, "post", {id:data}, function(){});	
	    
        setTimeout(() => {
            bookstore.start();
            $('#bookData').parent('table').show();
            $('#bookData2').hide();
            bookstore.viewMode = "table";
        }, 1000);
	});
};

bookstore.start = function() {
//    $('.btn-save-book').attr('disabled', 'true');
    bookstore.ajaxService(bookstore.GET_BOOKS, "get", "", bookstore.getAllBooks);
};

bookstore.start();