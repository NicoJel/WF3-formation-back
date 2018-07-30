$(function(){
    $('.btn-delete').click(function (event){
        event.preventDefault();

        $('#confirm-delete').modal('show');
        var href = $(this).attr('href');

        $('#btn-confirm').click(function(){
            window.location = href;
        });
    });

    
});