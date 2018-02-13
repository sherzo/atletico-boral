var id = $('#tab').val(); 

function ajaxRenderSection(url) {
    $.ajax({
        type: 'GET',
        url: url,
        dataType: 'json',
        success: function (data) {
            $('#images').empty().append($(data)); 
        },
        error: function (data) {
            var errors = data.responseJSON;
            if (errors) {
                $.each(errors, function (i) {
                    console.log(errors[i]);
                });
            }
        }
    });
} 

$.fn.ajaxPost = function(url, method, sectionToRender) {

    var token = $(this).attr('data-token');

    $.ajax({
        type: method,
        url: url,
        dataType: 'json',
        data: {
            _method: 'delete', 
            _token : token 
        },
        success: function (data) {
            ajaxRenderSection(sectionToRender)
        },
        error: function (data) {
            var errors = data.responseJSON;
            if (errors) {
                $.each(errors, function (i) {
                    console.log(errors[i]);
                });
            }
        }
    });
}

$(document).on('click','.delete',function(event){
    var url = $(this).attr('data-url');
    $(this).ajaxPost('/tabs/'+url, 'DELETE', '/tabs/'+id+'/upload');
});

Dropzone.options.frmFileUpload = true;

Dropzone.options.frmFileUpload = {  

    autoProcessQueue: false,
    maxFilesize: 10,
    maxFiles: 4,
    parallelUploads: 1,
    addRemoveLinks: true,
    acceptedFiles: ".jpg",

    init: function() {
        
        var submitButton = document.querySelector("#submit-all")
        frmFileUpload = this;

        submitButton.addEventListener("click", function (e) {
            e.preventDefault();
            e.stopPropagation();
            frmFileUpload.processQueue();
        });     
    }
};

function addTournament(time)
{
    $('#time').val(time);
}

function initTournament(name, id)
{
    $('#name').empty().append(name);
    $('#tournament').empty().val(id);
}

function endTournament(name, id)
{
    $('#end').empty().append(name);
    $('#end_id').empty().val(id);
}

$('.datepicker').bootstrapMaterialDatePicker({
    format: 'YYYY-M-D',
    clearButton: true,
    weekStart: 1,
    time: false,
});

function showNotification(colorName, text, placementFrom, placementAlign, animateEnter, animateExit) {
    if (colorName === null || colorName === '') { colorName = 'bg-black'; }
    if (text === null || text === '') { text = 'Se actualizó'; }
    if (animateEnter === null || animateEnter === '') { animateEnter = 'animated fadeInDown'; }
    if (animateExit === null || animateExit === '') { animateExit = 'animated fadeOutUp'; }
    var allowDismiss = true;

    $.notify({
        message: text
    },
        {
            type: colorName,
            allow_dismiss: allowDismiss,
            newest_on_top: true,
            timer: 1000,
            placement: {
                from: placementFrom,
                align: placementAlign
            },
            animate: {
                enter: animateEnter,
                exit: animateExit
            },
            template: '<div data-notify="container" class="bootstrap-notify-container alert alert-dismissible {0} ' + (allowDismiss ? "p-r-35" : "") + '" role="alert">' +
            '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
            '<span data-notify="icon"></span> ' +
            '<span data-notify="title">{1}</span> ' +
            '<span data-notify="message">{2}</span>' +
            '<div class="progress" data-notify="progressbar">' +
            '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
            '</div>' +
            '<a href="{3}" target="{4}" data-notify="url"></a>' +
            '</div>'
        });
}