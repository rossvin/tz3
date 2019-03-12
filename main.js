


    $( document ).ready(function() {
    $("#cat").load("list.php ");
    $(".text").load("tree.php ");
    $('#ajax_form').submit(function(e) {
    e.preventDefault();

    var category = $('#in-put').val();
    var sub_category = $('#sub_category').val();

    $(".error").remove();

    if (category.length< 1) {
      $('#mess').after('<span class="error">Поле КАТЕГОРИЯ должно быть заполнено</span>');

    } else {
 $.ajax({
        url:     'select1.php',
        type:     "POST",
        dataType: "html",
        data: $('#in-put, #sub_category').serialize(),
        success: function(response) {
        $("#cat").load("list.php ");
        $(".text").load("tree.php ");
$("#in-put").val('');
$("#sub_category").val('');
    	},
    	error: function(response) {


    	}

 	});
}

    });


    $("#del").click(function(){

    $.ajax({
        url:     'del.php',
        type:     "POST",
        dataType: "html",
        data: $("#in-put").serialize(),
        success: function(response) {


        // $("#cat").load("view.php ");
         $('#in-put').val('');
         $("#cat").load("list.php ");
        $(".text").load("tree.php ");
    	},
    	error: function(response) {

            $('.row').html('Ошибка. Данные не отправлены.');
    	}
 	});
    });
});

