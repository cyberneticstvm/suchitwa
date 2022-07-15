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
        $("table .techQual").append("<tr><td><input type='text' name='' class='form-control' placeholder='Name of Project' /></td><td><input type='text' name='' class='form-control' placeholder='Client Name' /></td><td><input type='number' name='' class='form-control' placeholder='0.00' /></td><td><input type='number' name='' class='form-control' placeholder='0' /></td><td><input type='text' name='' class='form-control' placeholder='dd/mm/yyyy' /></td><td><select name='' class='form-control'><option value=''>Select</option><option value='1'>DPR Stage</option><option value='2'>Tendering Stage</option><option value='3'>Execution Ongoing</option>  <option value='4'>Execution Completed</option></select></td><td class='text-center'><a href='javascript:void(0)' onClick='$(this).parent().parent().remove()'><i class='fa fa-trash text-danger'></i></a></td></tr>");
    });
});

