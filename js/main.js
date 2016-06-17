var PRINT_TRUE = 1;
var PRINT_FALSE = 0;
var file = "API/interface.php";
var total_line = $("#total_line").val();


$(document).ready(function () {

    $("#call_fun").click(function () {
//        loop();
        var p = $("#number").val();
        $.post(file, {
            PRINT_TRUE: PRINT_TRUE,
            PRINT_FALSE: PRINT_FALSE,
            total_line: total_line,
            true_upto: p
        }, function (dataObject) {
            $("#result").html("");
            var data = $.parseJSON(dataObject);
           $.each(data,function(index,item){
                $("#result").append(item);
                $("#result").append("<br/>");
           });
        });

    });
});