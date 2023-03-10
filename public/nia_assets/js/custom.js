// $.ajaxSetup({
//     headers: {
//         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//     }
// });



let errorMsg = $('.errorMsg'),
    url = '',
    dataTable = $('#dataTable'),
    checked_list = {'row': ``},
    name,
    formData;



//==========================ATTENDANCE ======================



function ckEditor(id){
    ClassicEditor
        .create( document.querySelector( '#'+id ) )
        .catch( error => {
            console.error( error );
        } );
}

function runToast(msg, code){
    if (code == '200'){
        Notiflix.Notify.success(msg);
    }else{
        Notiflix.Notify.failure(msg);
    }
}

function runAjaxPrompt(url_, type = null){
    Notiflix.Block.pulse('#dataTable');
    let msg = 'You won\'t be able to revert this!';

    if (type === 'product'){

        msg = "Deleting a product will delete it from all available stores. Are you sure you want to proceed?"
    }

    Swal.fire({
        title: 'Are you sure?',
        text: msg,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {

            // window.location.href = url_;

            $.ajax({
                method: 'GET',
                url: url_,
                dataType: 'JSON',
            }).done((response) => {
                console.log('response ',response)
                if(response.code == '200'){
                    Notiflix.Report.success(
                        'Success',
                        response.msg,
                        'Okay',
                    );

                    setTimeout(function () {

                        window.location.reload();


                    }, 2000)

                    // $('#dataTable').DataTable().ajax.reload();
                }

                else{
                    Notiflix.Report.failure(
                        'Failed',
                        response.msg,
                        'Okay',
                    );
                }
            })
        }
        else{
            window.location.reload();
        }
    })
}


function updateSubmitAttrAndShowModal(form, url, modal, formType){
    if (formType == 'class'){
        form = $('.'+form);
    }else{
        form = $('#'+form);
    }

    form.prop('action', url);

    showModal($('#'+modal));
}

function showModal(modal){
    modal.modal('show');
}

function hideModal(modal){
    modal.modal('hide');
}


//========================== FORM SUBMIT FUNCTION ======================


function runSubmission(url, form, withDatatable = false,type){
    $.ajax({
        url: url,
        method: 'POST',
        data: form,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        dataType: 'JSON',
        contentType: false,
        processData: false,
        cache: false,

    }).done((response) => {

        console.log('response ', response)

        if(response.code == '200'){
            runToast(response.msg, response.code)

            if(withDatatable == true){

                setTimeout(function () {
                    window.location.reload();
                }, 1500)

                // $('#dataTable').DataTable().ajax.reload();
            }

        }else{
            if(Array.isArray(response.msg)){
                for(var msg of response.msg){
                    runToast(msg, response.code)
                }
            }else {
                runToast(response.msg, response.code)
            }
        }
    })
}

//========================== PETTY CASH BEGIN ======================

$('.addForm').submit(function (e){
    e.preventDefault();
    url = $(this).attr('action');
    formData = new FormData(this);
    name = $(this).attr('name');
    //show progress indicator
    if (name === 'create')
        $('#kt_button_1').attr("data-kt-indicator", "on");
    else
        $('#kt_edit_button_1').attr("data-kt-indicator", "on");

    //jquery function to submit the request
    runSubmission(url, formData, true,'');
    //remove progress indicator
    if (name === 'create')
        removeProgressIndicator('kt_button_1');
    else
        removeProgressIndicator('kt_edit_button_1');
});

function removeProgressIndicator(id){
    setTimeout(function() {
        $('#'+id).attr("data-kt-indicator", "off");
    }, 3000);
}

$('.statusChange').submit(function (e){
    e.preventDefault();
    url = $(this).attr('action');
    name = $(this).attr('name');
    formData = new FormData(this);
    //show progress indicator
    if (name === 'approve'){
        $('#kt_button_approve').attr("data-kt-indicator", "on");
    }
    else if (name === 'approveHOD')
        $('#kt_button_approve_hod').attr("data-kt-indicator", "on");
    else
        $('#kt_button_reject').attr("data-kt-indicator", "on");
    runSubmission(url, formData, true,'');
    //remove progress indicator
    if (name === 'approve')
        removeProgressIndicator('kt_button_approve');
    else if (name === 'approveHOD')
        removeProgressIndicator('kt_button_approve_hod');
    else
        removeProgressIndicator('kt_button_reject');
});

//========================== PETTY CASH END ======================


//========================== SETTINGS BEGIN ======================

checked_list = {'is_hod': ``,'pc_privilege': ``,'transport_privilege': ``,'is_driver': ``};

$('.is_driver').on('change',function () {
    checked_list.is_driver =  $('.is_driver:checked').map(function(){
        return $(this).val();
    }).get();
})
$('.is_hod').on('change',function () {
    checked_list.is_hod =  $('.is_hod:checked').map(function(){
        return $(this).val();
    }).get();
})
$('.pc_privilege').on('change',function () {
    checked_list.pc_privilege =  $('.pc_privilege:checked').map(function(){
        return $(this).val();
    }).get();
})
$('.transport_privilege').on('change',function () {
    checked_list.transport_privilege =  $('.transport_privilege:checked').map(function(){
        return $(this).val();
    }).get();
})


//========================== SETTINGS END ======================

//========================== LIST ITEM DELETE FUNCTION ======================
dataTable.on('click', '#deleteBtn', function (e){
    e.preventDefault();
    runAjaxPrompt($(this).attr('href'));
});

//========================== LIST ITEMS DELETE FUNCTION ======================
dataTable.on('change', '#check', function (){
    checked_list.row =  $('input#check:checked').map(function(){
        return $(this).val();
    }).get();
});

$('#btn').click(function (e) {
    e.preventDefault();

    if(checked_list.row === `` || checked_list.row.length === 0)
        runToast('Select at least one product', 400);
    else{
        Swal.fire({
            title: 'Are you sure?',
            text: 'You won\'t be able to revert this!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete Them!'
        }).then((result) => {
            if (result.isConfirmed) {

                let url_ = $(this).attr('href');
                $.ajax({
                    url: url_,
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: checked_list,
                    dataType: 'JSON',
                }).done(function (response) {
                    runToast(response.msg, response.code);
                    $('#dataTable').DataTable().ajax.reload();
                })
            }
            else{
                window.location.reload();
            }
        })
    }
})

//============================= Petty Cash PAGE ===================================================
dataTable.on('click', '#pettyCashUpdateBtn',function (e){
    e.preventDefault();
    let url_ = $(this).attr('href');

    console.log(url_);
    $.ajax({
        url: url_,
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        dataType: 'JSON',
    }).done((response) => {
        console.log('response ', response)

        $('#edit_reason').val(response.data.reason)
        $('#edit_amount').val(response.data.amount)
        $('#edit_category_id').val(response.data.category_id).change()

        updateSubmitAttrAndShowModal('kt_modal_edit_petty_cash_form', response.url, 'kt_modal_edit_petty_cash', 'id');
    })
})



//============================= Visitor Log PAGE ===================================================
dataTable.on('click', '#visitorLogUpdateBtn',function (e){
    e.preventDefault();
    let url_ = $(this).attr('href');

    $.ajax({
        url: url_,
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        dataType: 'JSON',
    }).done((response) => {
        console.log('response ', response)

        $('#edit_full_name').val(response.data.visitor_full_name)
        $('#edit_organization_name').val(response.data.visitor_organization_name)
        $('#edit_phone_number').val(response.data.visitor_phone_number)
        $('#edit_reason').val(response.data.reason)
        $('#edit_time_in').val(response.data.time_in)
        $('#edit_time_out').val(response.data.time_out)
        $('#edit_staff_id').val(response.data.user_id).change()

        updateSubmitAttrAndShowModal('kt_modal_edit_visitor_log_form', response.url, 'kt_modal_edit_visitor_log', 'id');
    })
})

//============================= Petty Cash Category PAGE ===================================================
dataTable.on('click', '#pettyCashCategoryUpdateBtn',function (e){
    e.preventDefault();
    let url_ = $(this).attr('href');

    $.ajax({
        url: url_,
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        dataType: 'JSON',
    }).done((response) => {
        console.log('response ', response)

        $('#edit_name').val(response.data.name)
        $('#edit_code').val(response.data.code)
        $('#edit_description').val(response.data.description)

        updateSubmitAttrAndShowModal('kt_modal_edit_petty_cash_category_form', response.url, 'kt_modal_edit_pc_category', 'id');
    })
})

//============================= Petty Cash Category PAGE ===================================================
dataTable.on('click', '#assetCategoryUpdateBtn',function (e){
    e.preventDefault();
    let url_ = $(this).attr('href');
    $.ajax({
        url: url_,
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        dataType: 'JSON',
    }).done((response) => {
        $('#edit_name').val(response.data.name)
        $('#edit_code').val(response.data.code)
        $('#edit_description').val(response.data.description)
        updateSubmitAttrAndShowModal('kt_modal_edit_asset_category_form', response.url, 'kt_modal_edit_asset_category', 'id');
    })
})

//============================= Clocking Out Reason PAGE ===================================================
dataTable.on('click', '#clockingOutReasonUpdateBtn',function (e){
    e.preventDefault();
    let url_ = $(this).attr('href');
    $.ajax({
        url: url_,
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        dataType: 'JSON',
    }).done((response) => {
        $('#edit_reason').val(response.data.reason)
        $('#edit_description').val(response.data.description)
        updateSubmitAttrAndShowModal('kt_modal_edit_clocking_out_reason_form', response.url, 'kt_modal_edit_clocking_out_reason', 'id');
    })
})



//============================= Department PAGE ===================================================
dataTable.on('click', '#departmentUpdateBtn',function (e){
    e.preventDefault();
    let url_ = $(this).attr('href');

    $.ajax({
        url: url_,
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        dataType: 'JSON',
    }).done((response) => {
        console.log('response ', response)

        $('#edit_name').val(response.data.name)
        $('#edit_code').val(response.data.code)
        $('#edit_description').val(response.data.description)

        updateSubmitAttrAndShowModal('kt_modal_edit_department_form', response.url, 'kt_modal_edit_department', 'id');
    })
})

//============================= Holiday PAGE ===================================================
dataTable.on('click', '#holidayUpdateBtn',function (e){
    e.preventDefault();
    let url_ = $(this).attr('href');

    $.ajax({
        url: url_,
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        dataType: 'JSON',
    }).done((response) => {
        console.log('response ', response)

        $('#edit_name').val(response.data.name)
        $('#edit_date').val(response.data.date)
        $('#edit_description').val(response.data.description)

        updateSubmitAttrAndShowModal('kt_modal_edit_holiday_form', response.url, 'kt_modal_edit_holiday', 'id');
    })
})

//============================= Event PAGE ===================================================
dataTable.on('click', '#eventUpdateBtn',function (e){
    e.preventDefault();
    let url_ = $(this).attr('href');

    $.ajax({
        url: url_,
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        dataType: 'JSON',
    }).done((response) => {
        console.log('response ', response)

        $('#edit_title').val(response.data.title)
        $('#edit_description').val(response.data.description)
        $('#edit_start_date').val(response.data.start)
        $('#edit_end_date').val(response.data.end)
        $('#edit_department_ids').val(JSON.parse(response.data.department_ids)).change()

        updateSubmitAttrAndShowModal('kt_modal_edit_event_form', response.url, 'kt_modal_edit_event', 'id');
    })
})



//============================= Vehicle PAGE ===================================================
dataTable.on('click', '#vehicleUpdateBtn',function (e){
    e.preventDefault();
    let url_ = $(this).attr('href');

    $.ajax({
        url: url_,
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        dataType: 'JSON',
    }).done((response) => {
        console.log('response ', response)

        $('#edit_number').val(response.data.number_plate)
        $('#edit_brand').val(response.data.brand)
        $('#edit_description').val(response.data.description)

        updateSubmitAttrAndShowModal('kt_modal_edit_vehicle_form', response.url, 'kt_modal_edit_vehicle', 'id');
    })
})

//============================= User Profile PAGE ===================================================



//============================= Transportation Request PAGE ===================================================
dataTable.on('click', '#transportRequestUpdateBtn',function (e){
    e.preventDefault();
    let url_ = $(this).attr('href');

    $.ajax({
        url: url_,
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        dataType: 'JSON',
    }).done((response) => {
        console.log('response ', response)

        $('#edit_reason').val(response.data.reason)
        $('#edit_destination').val(response.data.destination)
        $('#edit_pick_up_date').val(response.data.pick_up_date)

        updateSubmitAttrAndShowModal('kt_modal_edit_transport_request_form', response.url, 'kt_modal_edit_transport_request', 'id');
    })
})

//============================= Time Sheet Request PAGE ===================================================
dataTable.on('click', '#timeSheetUpdateBtn',function (e){
    e.preventDefault();
    let url_ = $(this).attr('href');

    $.ajax({
        url: url_,
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        dataType: 'JSON',
    }).done((response) => {
        console.log('response ', response)
        $('#edit_tasks').val(response.data.tasks)
        $('#edit_tasks_date').val(response.data.tasks_date)
        $('#edit_challenges').val(response.data.challenges)
        ckEditor('edit_tasks')
        ckEditor('edit_challenges')
        updateSubmitAttrAndShowModal('kt_modal_edit_time_sheet_form', response.url, 'kt_modal_edit_time_sheet', 'id');
    })
})

//============================= Excuse Duty PAGE ===================================================
dataTable.on('click', '#excuseDutyUpdateBtn',function (e){
    e.preventDefault();
    let url_ = $(this).attr('href');

    $.ajax({
        url: url_,
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        dataType: 'JSON',
    }).done((response) => {
        console.log('response ', response)

        $('#edit_reason').val(response.data.reason)
        $('#edit_date').val(response.data.date_time)

        updateSubmitAttrAndShowModal('kt_form_edit_excuse_duty', response.url, 'kt_modal_edit_excuse_duty', 'id');
    })
})


//============================= Asset PAGE ===================================================
dataTable.on('click', '#assetUpdateBtn',function (e){
    e.preventDefault();
    let url_ = $(this).attr('href');

    $.ajax({
        url: url_,
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        dataType: 'JSON',
    }).done((response) => {
        console.log('response ', response)

        $('#edit_name').val(response.data.name)
        $('#edit_brand').val(response.data.brand)
        $('#edit_serial_number').val(response.data.serial_number)
        $('#edit_quantity').val(response.data.quantity)
        $('#edit_cost').val(response.data.cost)
        $('#edit_custodian').val(response.data.user_id).change()
        $('#edit_department').val(response.data.department_id).change()
        $('#edit_category').val(response.data.category_id).change()

        updateSubmitAttrAndShowModal('kt_form_edit_asset', response.url, 'kt_modal_edit_asset', 'id');
    })
})



// ======================================= PAYMENT SETUP PAGE ==================================

dataTable.on('click', '.changeStatus', function (e){
    e.preventDefault();

    validatePaymentSetup($(this).attr('href'));
    // updatePaymentModal
    // updatePaymentForm
});


dataTable.on('click', '#updatePayment',function (e){
    e.preventDefault();

    $.post($(this).attr('href'), function (response) {
        console.log('THIS IS THE RESULT', response)
        $('#name').val(response.data.name)
        $('#description').val(response.data.description)
        $("#should_print").val(response.data.should_print).trigger("change");
        $('#code').val(response.data.code)

        updateSubmitAttrAndShowModal('updatePaymentForm', response.url, 'updatePaymentModal', 'id');
    })


})



function validatePaymentSetup(url){
    Notiflix.Block.pulse('#dataTable');

    Notiflix.Confirm.show(
        'Are You Sure?',
        'Do you want to change the status of this payment?',
        'Yes, Change',
        'No',
        function okCb() {
            $.post(url, function (response){
                console.log(response)
                if(response.code == '200'){
                    Notiflix.Report.success(
                        'Success',
                        response.msg,
                        'Okay',
                    );
                    $('#dataTable').DataTable().ajax.reload();
                }else{
                    runToast(response.msg, response.code)
                }
            });
        },
        {
            width: '320px',
            borderRadius: '8px',
        },
    );
    Notiflix.Block.remove('#dataTable');
}
