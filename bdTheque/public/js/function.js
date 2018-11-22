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

function toInteger(comics)
{
    for(i in comics)
    {
        for(char in comics[i].created_at)
        {
            if((isNaN(comics[i].created_at[char])))
            {
                comics[i].created_at = comics[i].created_at.replace(comics[i].created_at[char],'');
            }
            else if(comics[i].created_at[char] == " ")
            {
                comics[i].created_at = comics[i].created_at.replace(" ",'');
            }
        }
    }
    return comics;
}

function sortNewComics(comics)
{
    var somethingChanged = true;
    var temp;
    while(somethingChanged === true)
    {
        somethingChanged = false;
        for(i in comics)
        {
            i = parseInt(i, 10);
            console.log(i)
            if(i + 1 === undefined)
            {
                console.log("fin du tour");
            }
            else if(comics[i].created_at < comics[i+1].created_at)
            {
                temp = comics[i].created_at;
                console.log(temp)
                comics[i].created_at = comics[i+1].created_at;
                comics[i+1].created_at = temp;
                somethingChanged = true;
            }
        }
    }
    //console.log(comics);
    return comics;
}