require('./bootstrap');

$(document).ready(function(){
    $(document).on("click","table button", function(){
        $("#editEmployeeModal").trigger("click");

    });
});
        $(document).ready(function(){
$(".thehide").hide();
$(document).on("click", "table button", function(){
$("#trigger_modal").trigger("click");
$("#myModal .modal-title").html("COMPLETE INFO");
$("#myModal .modal-body").html($("#partial_container").html());
$('#myModal input[name="fullname"]').val($(this).closest("tr").find("td:nth-child(1)").text());
$('#myModal input[name="age"]').val($(this).closest("tr").find("td:nth-child(2)").text());
$('#myModal input[name="civil_status"]').val($(this).closest("tr").find("td:nth-child(3)").text());

});
        });
