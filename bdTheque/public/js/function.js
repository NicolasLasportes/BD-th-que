function displayNewComics(comics)
{
    $("#newComics").append("<tr id='row1NewComics'></tr>"); 
    $("#newComics").append("<tr id='row2NewComics'></tr>");
    var row = 1;
    for(i = 0; i < 8; i++)
    {
        $("#row" + row + "NewComics").append("<td id='cell'" + i + "><img src='" + comics[i].comic_cover + "'>");
        if(i == 3)
        {
            row = 2;
        }
    } 
}