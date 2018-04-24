/*
 *Year Wise Music Fetching JS
 */



function fullListSong(url){
    $(".ferozaButton").click(function(){
        //$("#editDcategoryModuleData").empty();
        var songListID = $(this).attr('data-node');
        console.log(songListID);
        $.ajax({
            url: url + "Music/getSongList",
            type: "get",
            data: "songListID=" + songListID,
            cache: false,
            success: function (data) {
                //$("#editDcategoryModuleData").append(data);
                console.log("success");
            }
        });
    });
}
