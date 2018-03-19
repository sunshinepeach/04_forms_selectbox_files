<?php ?>
<?php 

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP 04 SELCETBOX</title>
        <meta name="viewport" content="width-divice-width, initial-scale=1.0">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/styles.css" rel="stylesheet" type="text/css"/>
        <script src="assets/js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/js/main.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="container">
            <form method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend>Dateien hochladen</legend>
                   
                </fieldset>
                 <input class="form-control-file" type="file" name="uploadFile">
                <hr>
                <fieldset>
                    <button class="btn btn-primary">upload</button>
                </fieldset>
                <hr>
            </form>
        </div>


        <br>
        <h4>Ausgabe</h4>
        <?php
        //print_r();
        var_dump($_FILES);
        ?>
    </body>
</html>
