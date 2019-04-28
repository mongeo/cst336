<!DOCTYPE html>
<html>
    <head>
        <title> View Favorites </title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" href="css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        
        <script>
        /*global $*/
            function displayFavorites(keywordLink) {
                
               // alert($(keywordLink).html());
               var keyword = $(keywordLink).html();
               //alert(keyword);
               
                $.ajax({
                    method: "get",
                       url: "api/favoritesAPI.php",
                  dataType: "json",
                      data: {
                              "action": "favorites",
                             "keyword": keyword
                            },
                    success: function(data, status) {
                        //alert(data[0].keyword);
                        
                         $("#favorites").html("");
                          data.forEach(function(i){
                            
                           $("#favorites").append("<img width='200' src='" + i.imageURL+ "'> ");
                            
                        });
                        
                        
                    },
                    complete: function(data, status) { //optional, used for debugging purposes
                     // alert(status);
                    }
                  });//ajax
            
               
               
               
               
               
                
            }
        
        
            $(document).ready(function(){
            
                $.ajax({
                    method: "get",
                       url: "api/favoritesAPI.php",
                  dataType: "json",
                      data: {
                             "action": "keyword",
                            },
                    success: function(data, status) {
                        //alert(data[0].keyword);
                        
                        data.forEach(function(i){
                            
                           // $("#keywords").append("<a onclick='displayFavorites(this)' href='#'>" + i.keyword+ "</a> ");
                            
                            
                             $("#keywords").append("<a class='favorites'  href='#'>" + i.keyword+ "</a> ");
                            
                            
                        });
                        
                        
                    },
                    complete: function(data, status) { //optional, used for debugging purposes
                      //alert(status);
                    }
                  });//ajax
                  
                  
                  $("#keywords").on("click", ".favorites", function(){
                      
                      displayFavorites(this);
                      
                  });
            
            });//documentReady
            
        </script>
        
    </head>
    <body>

           <div class="jumbo">
                <h1 class="letters"> Pixabay Image Search </h1>    
           </div><br><br>
            
            <div>
                <form action="index.html">
                    <button class="buttonstyle"> Back to Search </button>
                </form>
            </div><br>
            
            <div id="keywords"></div>
            
            
            <div id="favorites"></div>

    </body>
    
    
</html>