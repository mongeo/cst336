<?php

?>

<html>
    <head>
        
    </head>
    <script>
        $(document).ready(function(){
            function searchImage() {
                $("#images").html("Loading...");
                    $.ajax({
                        method: "GET",
                        url: "api/pixabayProxy.php",
                        dataType: "json",
                        data: { "q": $("#keyword").val() },
                        success: function(data, status) {
                            /*
                            let htmlString = '';
                            let i = 0;
                            $("#images").html("");
                            for (let rows=0; rows < 3; rows++){
                                htmlString += "<div class='row'>";
                                for (let cols=0; cols < 3; cols++){
                                    htmlString += "<img class='favorite' src='img/favorite.png' width='30' height='25'>";
                                    htmlString += "<img src='" + data[i++] + "' width='300' height='280'>";
                                }
                                htmlString += "</div>";
                            }
                            $("#images").append(htmlString);
                            //let randomImage = Math.floor(Math.random() * data.hits.length);
                            //$('#image').html("<img src='" + data[0] + "' width='500'>");
                            //$('#image').append("<br>Likes: " + data.hits[randomImage].likes)
                                                    */
                        }
                    }); //ajax 
                } //searchImage() 
            });//document ready
    </script>
    <body>
        <h1>Favorites</h1>
        <div id="">keywords</div>
        <hr>
        <div id="images"></div>
        
    </body>
</html>