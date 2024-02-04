$(document).ready(function (){
    $('#filter').submit(function (e){
        e.preventDefault();
        let formData = $(this).serializeArray();
        let catsArray = formData.filter(item => item.name === 'cats[]').map(item => item.value);
        $.ajax({
            url: ajaxPatch.url,
            method: 'post',
            dataType: 'html',
            data: {
                action: 'gnews',
                cats: catsArray,
            },
            success: function(data){
                $('#sgnews').html(data);
            }
        });
    });

    $(document).on('reset', '#filter', function(e) {
        e.preventDefault();
        $.ajax({
            url: ajaxPatch.url,
            method: 'post',
            dataType: 'html',
            data: {
                action: 'gnews',
                cats: 'none',
            },
            success: function(data){
                $('#sgnews').html(data);
            }
        });
    });

});