function displayNewComics(comics)
{
    $("#newComics").append("<tr id='row1NewComics'></tr>"); 
    $("#newComics").append("<tr id='row2NewComics'></tr>");
    var row = 1;
    for(i = 0; i < 8; i++)
    {
        $("#row" + row + "NewComics").append("<td id='cell'" + i + ">" + 
        "<div>" + comics[i].comic_name + "</div>" +
        "<img class='news' id='"+comics[i].comic_id+"' src='" + comics[i].comic_cover + "'>");
        if(i == 3)
        {
            row = 2;
        }
    } 
}

function sendAjaxRequest(id)
{
    var token = $('meta[name="csrf-token"]').attr('content');
    $.ajax(
    {
        url : '/thisComic/' + id,
        type : 'post',
        contentType : 'json',
        headers: {
            'X-CSRF-TOKEN': token
        }
    }).done(function(thisComic)
    {
        infoComic = JSON.parse(thisComic);
        console.log(infoComic);
        generateModal(infoComic);
    })
}

function generateModal(infoComic)
{
    console.log(infoComic[0].comic_name);
    $("#comic_name").append("<div>"+infoComic[0].comic_name+"</div>");
}


