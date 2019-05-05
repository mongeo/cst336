


<!DOCTYPE html>
<html>
    <head>
        <title> Lab 9: File Upload </title>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <style>
            img { padding: 10px; }
            img:hover { width: 250px; }
        </style>
    </head>
    <body>
        <div class="container text-center">
            <div class="jumbotron">
                <h1>
                    File Upload
                </h1>
            </div>
            <div class="container">
                <?php

 if (!empty($_FILES)) {

    //print_r($_FILES);
    if ( $_FILES['myFile']['size'] > 1048576){
        echo "Image size must be less than 1MB. Attempted file size: " . $_FILES['myFile']['size'];
    } else {
        echo "Image size: " . $_FILES['myFile']['size'];
        move_uploaded_file( $_FILES['myFile']['tmp_name'], "gallery/" . $_FILES['myFile']['name']);
    }
    
    

}


    function displayImagesUploaded() {

        $images = scandir("gallery"); //returns all file names within a folder
        
        //print_r($images);
        
        for ($i = 2; $i < count($images); $i++) {
            
            echo "<img src='gallery/$images[$i]' width='50' />";
            
        }//for
    
    }//function


?>
            </div>
            <form  method="POST" enctype="multipart/form-data">
                <input type="file" name="myFile" />
                <button> Upload File! </button>
            </form>
            <hr>
            <h3> Images uploaded: </h3>
            <?= displayImagesUploaded() ?>
        </div>
        

    </body>
</html>