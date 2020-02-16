$(document).ready(function()
{
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'GET',
        url: '/getAllIngredients',
        data: {},
        success: function(data){
            for(let i=0;i<data.length;i++)
            {
                $('#addedingredientstorecipe').append($("<option></option>").attr("value",data[i]['id']).text(data[i]['name']));
                //console.log(data[i]['id']);
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
    });
    $('.recipedelete').click(function()
    {
       let id=$(this).attr('id');
        $('#recipies'+id).remove();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: 'recipe/delete',
            data: {id:id},
            success: function(data){

            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });

    });

    $('.ingredientsdelete').click(function()
    {
        let id=$(this).attr('id');
        $('#ingredients'+id).remove();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: '/ingredient/delete',
            data: {id:id},
            success: function(data){

            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
    });


    $('.model').click(function ()
    {
        $('.modelwind').show();
    });
    $('.createingr').click(function ()
    {
        let name=$('#nameingre').val();
        let units=$('#unitsingre').val();
        let id=$(this).attr('id');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: '/ingredient/added',
            data: {name:name,units:units},
            success: function(data){

            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
        $('.modelwind').hide();
    });

    $('.addeding').click(function ()
    {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'GET',
            url: '/getAllIngredients',
            data: {},
            success: function(data){
                for(let i=0;i<data.length;i++)
                {
                    $('#ingredientselect').append($("<option></option>").attr("value",data[i]['id']).text(data[i]['name']));
                    //console.log(data[i]['id']);
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
        $('.ingre').show();

    });

    $('.addedingredient').click(function ()
    {
        let id=$(this).attr('id');
        let id_ingredient=$('#ingredientselect').val();
        let col=$('#col').val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: '/dish/added',
            data: {id_recipe:id,id_ingredient:id_ingredient,col:col},
            success: function(data){

            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
        $('.ingre').hide();
        location.reload();
    });

    $('.deletefromrecipe').click(function ()
    {
        let id=$(this).attr('id');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: '/dish/delete',
            data: {id:id},
            success: function(data){

            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
        location.reload();
    });




});
