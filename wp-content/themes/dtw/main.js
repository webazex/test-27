$(document).ready(function (){
    $('#filter').submit(function (e){
        e.preventDefault();
        let formData = $(this).serializeArray();
        let catsArray = formData.filter(item => item.name === 'cats[]').map(item => item.value);
        $.ajax({
            url: ajaxPatch.url,
            method: 'post',
            data: {
                action: 'gnews',
                cats: catsArray,
            },
            success: function(r){
                $('#sgnews').html(r.data.news);
                $('.pagination-container__pagination-block').html(r.data.p);
            }
        });
    });

    $(document).on('reset', '#filter', function(e) {
        e.preventDefault();
        $.ajax({
            url: ajaxPatch.url,
            method: 'post',
            data: {
                action: 'gnews',
                cats: 'none',
            },
            success: function(r){
                $('#sgnews').html(r.data.news);
                $('.pagination-container__pagination-block').html(r.data.p);
            }
        });
    });

    $('body').on('click', '.wbzx-pagination__item', '', function (){
        var cats = 'none';
        if ($('.content-news__filter-news').is('*')) {
            let formData = $('.content-news__filter-news > form#filter').serializeArray();
            if($.isEmptyObject(formData)){
                cats = 'none';
            }else{
                cats = formData.filter(item => item.name === 'cats[]').map(item => item.value);
            }

        }
        let cp = $(this).attr('data-page');
        if($(this).hasClass('current')){
            //nothing
        }else{
            $(' body .pagination-container__pagination-block .wbzx-pagination__item').removeClass('current');
            $(this).addClass('current');
        }
        $.ajax({
            url: ajaxPatch.url,
            method: 'post',
            data: {
                action: 'gnews',
                cats: cats,
                cp: cp
            },
            success: function(r){
                $('#sgnews').html(r.data.news);
                $('.pagination-container__pagination-block').html(r.data.p);
            }
        });
    });

    $('body').on('click', '.next-arr', '', function (){
        var cats = 'none';
        if ($('.content-news__filter-news').is('*')) {
            let formData = $('.content-news__filter-news > form#filter').serializeArray();
            if($.isEmptyObject(formData)){
                cats = 'none';
            }else{
                cats = formData.filter(item => item.name === 'cats[]').map(item => item.value);
            }

        }
        let cp = $('.wbzx-pagination').attr('data-c');
        if($(this).hasClass('current')){
            //nothing
        }else{
            $(' body .pagination-container__pagination-block .wbzx-pagination__item').removeClass('current');
            $(this).addClass('current');
        }
        $.ajax({
            url: ajaxPatch.url,
            method: 'post',
            data: {
                action: 'gnews',
                cats: cats,
                cp: parseInt(cp, 10) + 1
            },
            success: function(r){
                $('#sgnews').html(r.data.news);
                $('.pagination-container__pagination-block').html(r.data.p);
            }
        });
    });

    $('body').on('click', '.prev-arr', '', function (){
        var cats = 'none';
        if ($('.content-news__filter-news').is('*')) {
            let formData = $('.content-news__filter-news > form#filter').serializeArray();
            if($.isEmptyObject(formData)){
                cats = 'none';
            }else{
                cats = formData.filter(item => item.name === 'cats[]').map(item => item.value);
            }

        }
        let cp = $('.wbzx-pagination').attr('data-c');
        if($(this).hasClass('current')){
            //nothing
        }else{
            $(' body .pagination-container__pagination-block .wbzx-pagination__item').removeClass('current');
            $(this).addClass('current');
        }
        $.ajax({
            url: ajaxPatch.url,
            method: 'post',
            data: {
                action: 'gnews',
                cats: cats,
                cp: parseInt(cp, 10) - 1
            },
            success: function(r){
                console.log(r);
                $('#sgnews').html(r.data.news);
                $('.pagination-container__pagination-block').html(r.data.p);
            }
        });
    });

});