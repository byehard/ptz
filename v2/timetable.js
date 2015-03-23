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
                $('#to_sel').append($("<option selected disabled>Выберите</option>")); 
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

    if (to_dest == "Выберите")
        return;

    var tbl_header = 
        "<tr>" +
        "<th>Номер</th>" +
        "<th>Отправление</th>" +
        "<th>Прибытие</th>" +
        "<th>Цена</th>" +
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

                        var days_html = 
                            "<div class=\"day_" + (days[0]=='0'? "off": "on") + "\">пн</div>" +
                            "<div class=\"day_" + (days[1]=='0'? "off": "on") + "\">вт</div>" +
                            "<div class=\"day_" + (days[2]=='0'? "off": "on") + "\">ср</div>" +
                            "<div class=\"day_" + (days[3]=='0'? "off": "on") + "\">чт</div>" +
                            "<div class=\"day_" + (days[4]=='0'? "off": "on") + "\">пт</div>" +
                            "<div class=\"day_" + (days[5]=='0'? "off": "on") + "\">сб</div>" +
                            "<div class=\"day_" + (days[6]=='0'? "off": "on") + "\">вс</div>";

                        var row = 
                            "<tr id=\"tbl_row_" + i + "\">" + 
                            "<td>" + d[1] + "</td>" + 
                            "<td>" + d[4] + "</td>" + 
                            "<td>" + d[5] + "</td>" + 
                            "<td>" + d[7] + " <i class=\"fa fa-rub\"></i></td>" + 
                            "<td>" + days_html + "</td>" + 
                            "<td ><a class=\"info\" id=\"info_btn_" + i + "\" >Подробнее</a></td>" + 
                            "</tr>";

                        $('#tbl').append(row); 

                        var info = 
                            "<tr id=\"tbl_info_" + i + "\">" + 
                            "<td colspan=6>" +
                                "<div class=\"row\">" +
                                "<div class=\"col-lg-3\">" +

                                "<div class=\"info_row\">" +
                                    "<div class=\"info_left_col\">Полный:</div>" +
                                    "<div class=\"info_right_col\">" + d[7] + " <i class=\"fa fa-rub\"></i></div>" +
                                "</div>" + 

                                "<div class=\"info_row\">" +
                                    "<div class=\"info_left_col\">Детский:</div>" +
                                    "<div class=\"info_right_col\">" + d[8] + " <i class=\"fa fa-rub\"></i></div>" +
                                "</div>" + 

                                "<div class=\"info_row\">" +
                                    "<div class=\"info_left_col\">Студенческий:</div>" +
                                    "<div class=\"info_right_col\">" + d[9] + " <i class=\"fa fa-rub\"></i></div>" +
                                "</div>" + 

                                "<div class=\"info_row\">" +
                                    "<div class=\"info_left_col\">Багаж:</div>" +
                                    "<div class=\"info_right_col\">" + d[10] + " <i class=\"fa fa-rub\"></i></div>" +
                                "</div>" + 
                                "</div>" +

                                "<div class=\"col-lg-3\">" +
                                "<div class=\"info_row\">" +
                                    "<div class=\"info_left_col\">Автобус:</div>" +
                                    "<div class=\"info_right_col\">" + d[13] + ", " + d[14] + " Мест</div>" +
                                "</div>" + 

                                "<div class=\"info_row\">" +
                                    "<div class=\"info_left_col\">Перевозчик:</div>" +
                                    "<div class=\"info_right_col\">" + d[15] + "</div>" +
                                "</div>" + 
                                "</div>" +

                                "<div class=\"col-lg-3\">" +
                                "<div class=\"info_row\">" +
                                    "<div class=\"info_left_col\">Остановки:</div>" +
                                    "<div class=\"info_right_col\">" + d[12] + "</div>" +
                                "</div>" + 
                                "</div" +
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

