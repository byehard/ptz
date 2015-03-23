function fetch_to_dest () {
    var from_dest = $("#from_sel option:selected").text();

    $.ajax({
            type: "GET",
            url: "dest.php",
            dataType: "json",
            data: {
                from: from_dest
            },
            success: function(data) {
                $('#to_sel').empty();
                $.each(data, function(key, value) {
                        $('#to_sel').append($("<option></option>").text(value)); 
                    });
                $('#to_sel').selectpicker('refresh');
                fetch_tbl();
            }
        });
};

function fetch_tbl () {
    var from_dest = $("#from_sel option:selected").text();
    var to_dest = $("#to_sel option:selected").text();

    var tbl_header = 
        "<tr>" +
        "<th>Номер</th>" +
        "<th>Отправление</th>" +
        "<th>Прибытие</th>" +
        "<th>Цена П.</th>" +
        "<th>Дни</th>" +
        "<th></th>" +
        "</tr>";

    $.ajax({
            type: "GET",
            url: "tabledata.php",
            dataType: "json",
            data: {
                from: from_dest,
                to: to_dest
            },
            success: function(data) {
                $('#tbl').empty().append(tbl_header);
                $.each(data, function(i, d) {

                        var days = d[6].split(' ');
                        var days_html = "";
                        for (var j = 1; j <= days.length; j++) {
                            if (days[j - 1] == '0') days_html += "<div class=\"day_off_\">" + j + "</div>";
                            else days_html += "<div class=\"day_on_" + j + "\">" + j + "</div>";
                        };

                        var row = 
                            "<tr id=\"tbl_row_" + i + "\">" + 
                            "<td>" + d[1] + "</td>" + 
                            "<td>" + d[4] + "</td>" + 
                            "<td>" + d[5] + "</td>" + 
                            "<td>" + d[7] + "р.</td>" + 
                            //"<td>" + d[6] + "</td>" + 
                            "<td>" + days_html + "</td>" + 
                            "<td><em id=\"info_btn_" + i + "\">Инфо</em></td>" + 
                            "</tr>";

                        $('#tbl').append(row); 

                        var info = 
                            "<tr id=\"tbl_info_" + i + "\">" + 
                            "<td colspan=6>" +

                                "<div class=\"info_row\">" +
                                    "<div class=\"info_left_col\">Полный:</div>" +
                                    "<div class=\"info_right_col\">" + d[7] + "р.</div>" +
                                "</div>" + 

                                "<div class=\"info_row\">" +
                                    "<div class=\"info_left_col\">Детский:</div>" +
                                    "<div class=\"info_right_col\">" + d[8] + "р.</div>" +
                                "</div>" + 

                                "<div class=\"info_row\">" +
                                    "<div class=\"info_left_col\">Студенческий:</div>" +
                                    "<div class=\"info_right_col\">" + d[9] + "р.</div>" +
                                "</div>" + 

                                "<div class=\"info_row\">" +
                                    "<div class=\"info_left_col\">Багаж:</div>" +
                                    "<div class=\"info_right_col\">" + d[10] + "р.</div>" +
                                "</div>" + 

                                "<div class=\"info_row\">" +
                                    "<div class=\"info_left_col\">Автобус:</div>" +
                                    "<div class=\"info_right_col\">" + d[14] + ", " + d[15] + " Мест</div>" +
                                "</div>" + 

                                "<div class=\"info_row\">" +
                                    "<div class=\"info_left_col\">Перевозчик:</div>" +
                                    "<div class=\"info_right_col\">" + d[16] + "</div>" +
                                "</div>" + 

                                "<div class=\"info_row\">" +
                                    "<div class=\"info_left_col\">Остановки:</div>" +
                                    "<div class=\"info_right_col\">" + d[12] + "</div>" +
                                "</div>" + 

                            "</td>" + 
                            "</tr>";

                        $('#tbl').append(info); 

                        $('#tbl_info_' + i).hide();

                        // $('#tbl_row_' + i).click(function() {
                        $('#info_btn_' + i).click(function() {
                                $('#tbl_info_' + i).toggle();
                        });
                    });
            }
        });
};


$(function() {
        fetch_to_dest();
});

