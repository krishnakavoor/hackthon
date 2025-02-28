/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(function () {
    $('[data-toggle="tooltip"]').tooltip()
});

var PopUp = {
    /**
     * Show loading popup
     * @returns respose
     */
    loading: function (msg) {
        var popVal = "";
        popVal += '<div id="pop-up-model" class="modal fade" role="dialog">';
        popVal += '<div class="modal-dialog">';
        popVal += '<div class="modal-content">';
        popVal += '<div class="modal-body text-center">';
        popVal += '<p>' + msg + '</p>';
        popVal += '<div class="loader"></div>';
        popVal += '</div>';
        popVal += '</div>';
        popVal += '</div> ';
        popVal += '</div> ';
        $('body').prepend(popVal);
        $("#pop-up-model").modal();
    },
    /**
     * Remove swal popup
     * @returns response
     */
    remove: function () {
        $('#pop-up-model').modal('toggle');
    },
    /**
     * Show error popup
     * @returns response
     */

    newsArticle: function (
            url) {
        $("#pop-up-news").modal('hide');
        var msgVal = (url) ? url : '';
        var popVal = "";
        popVal += '<div id="pop-up-news" class="popup modal fade" role="dialog">';
        popVal += '<div class="modal-dialog">';
        popVal += '<div class="modal-content" style="width:100%;height:100%;">';
        popVal += '<div class="modal-body text-center">';
        popVal += '<div class="row"><div class="col-md-12 col-sm-12 col-xs-12 text-left"><iframe  src="' + msgVal + '"></iframe></div></div>';
        popVal += '</div>';
        popVal += '<div class="modal-footer">';
        popVal += '<div class="row">';
        popVal += '<div class="col-md-4 col-xs-4 col-sm-4 text-center">';
        popVal += '<button type="button" class="btn btn-box-blue-big" data-dismiss="modal">Reset</button>';
        popVal += '</div>';
        popVal += '<div class="col-md-4 col-xs-4 col-sm-4 text-center">';
        popVal += '<button type="button" class="btn btn-box-blue-big " data-dismiss="modal">Event Log</button>';
        popVal += '</div>';
        popVal += '<div class="col-md-4 col-xs-4 col-sm-4 text-center">';
        popVal += '<button type="button" class="btn btn-blue-big" data-dismiss="modal" onclick="PopUp.close(this)">OK</button>';
        popVal += '</div>';
        popVal += '</div>';
        popVal += '</div>';
        popVal += '</div>';
        popVal += '</div> ';
        popVal += '</div> ';
        $('body').prepend(popVal);
        $("#pop-up-news").modal();
    },
}

function getAllStocklist() {
    if ($('#stockname').val() != '') {
        $(".result").show().empty().html('<div class="loader"></div>');
        var url = homeUrl + "api/stockname/" + $('#stockname').val();
        $.get(url, function (data) {
            var text = '<ul>';
            $.each(data, function (key, val) {
                var country = "usa";
                if (data[key]['exchange_name'] == "lse") {
                    country = "uk";
                }
                if (data[key]['exchange_name'] == "tsx" || data[key]['exchange_name'] == "tsxv") {
                    country = "canada";
                }
                text += '<li><a href="' + homeUrl + country + '/' + data[key]['exchange_name'] + '/' + data[key]['name'].toLowerCase() + '?type=search">' + data[key]['name'].toUpperCase() + ': ' + data[key]['company_name'] + ' (' + data[key]['exchange_name'].toUpperCase() + ')</a></li>';
            }
            );
            text += "</ul>";
            $(".result").show().empty().html(text);
            $('#stock-search').html('<i onclick="closeSearch()">X</i>');
        });
    } else {
        $('#stock-search').html('<i class="glyphicon glyphicon-search"></i>');
    }
}

function closeSearch() {
    $('#stock-search').html('<i class="glyphicon glyphicon-search"></i>');
    $(".result").empty().hide();
    $('#stockname').val('').focus();
}

