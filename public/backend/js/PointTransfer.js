/// <reference path="jquery-1.7.1.js" />
$(function() {
    $("input[id$=chkBoxSelectAllReceive]").change(function() {
        var checkStatus = $(this).attr("checked");
        if (checkStatus === undefined) {
            $("input[id*=chkBoxRecievePoint]").prop("checked", false);
        } else {
            $("input[id*=chkBoxRecievePoint]").prop("checked", true);
        }
    });

    $("input[id$=chkBoxSelectAllTransfer]").change(function() {
        var checkStatus = $(this).attr("checked");
        if (checkStatus === undefined) {
            $("input[id*=chkBoxTransferPoint]").prop("checked", false);
        } else {
            $("input[id*=chkBoxTransferPoint]").prop("checked", true);
        }
    });

    $("input[id$=txtTransferID]").keyup(function() {
        $(this).val($(this).val().toUpperCase());
    });

    function SetHeight() {
        var ua = window.navigator.userAgent;
        var msie = ua.indexOf("MSIE ");

        if (msie > 0) // If Internet Explorer, return version number
        {
            $(".tbl-container").css({
                'height': '250px'
            });
            $(".p-trans").css({
                'height': '202px'
            });
        }
    }

    SetHeight();
});