var tabComics = [];
$.ajax(
{
    url : '/comicsOrdered',
    type : 'POST',
    contentType : "json",
    statusCode : 
    {
        404:function()
        {
            alert("Page not found");
        }
    },
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
}).done(function(comics)
{
    tabComics = JSON.parse(comics);
    displayNewComics(tabComics);
})

