$(function(){
    "use strict";

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('form').submit(function(){
        $(".btn-submit").attr("disabled", true);
        $(".btn-submit").html("<span class='spinner-grow spinner-grow-sm' role='status' aria-hidden='true'></span>&nbsp;Loading...");
    });

    $(".dtpicker").pickadate({
        format: "dd/mmm/yyyy",
        selectYears: 100,
        selectMonths: true,
        //max: true
    });

    $('#w-horizontal, #w-vertical').steps({});

    $(".addTechQual").click(function(){
        $("table .techQual").append("<tr><td><input type='text' name='project_name[]' class='form-control' placeholder='Name of Project' /></td><td><input type='text' name='client_name[]' class='form-control' placeholder='Client Name' /></td><td><input type='number' name='project_cost[]' class='form-control' placeholder='0.00' /></td><td><input type='number' name='project_period[]' class='form-control' placeholder='0' /></td><td><input type='date' name='project_start_date[]' class='form-control' /></td><td><select name='project_status[]' class='form-control selProjectStatus' required><option value=''>Select</option></select></td><td class='text-center'><a href='javascript:void(0)' onClick='$(this).parent().parent().remove()'><i class='fa fa-trash text-danger'></i></a></td></tr>");
        $('.selProjectStatus').select2();
        bindDDL('/helper/projectstatus/', 'selProjectStatus');
    });
});

function bindDDL(url, ddl){
    $.ajax({
        type: 'GET',
        url: url
    }).then(function (data){
        xdata = $.map(data, function(obj){
            obj.text = obj.name || obj.id;  
            return obj;
        });
        $('.'+ddl).select2({data:xdata});
    });
}

