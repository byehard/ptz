function backBoxToggle () {
    $('#back_box').toggle();
}

$(function() {
    $('#back_box').hide();
});

function add_stop() {
    $('#stops_table td:last').empty();
    $('#stops_table td:last').html("<input type=\"time\" name=\"depart[]\">");

    var row = 
        "<tr>" +
        "<td><input type=\"text\" name=\"stops[]\"></td>" +
        "<td><input type=\"time\" name=\"arrive[]\"></td>" +
        "<td><a href=\"javascript:void();\" onclick=\"add_stop();\"><center><i class=\"fa fa-plus\" alt=\"Добавить остановку\"></center></a></td>" +
        "</tr>";

    $('#stops_table').append(row);

}
