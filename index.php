<?php
$lastname = filter_input(INPUT_POST, 'lastname',
        FILTER_SANITIZE_STRING);
$firstname = filter_input(INPUT_POST, 'firstname',
        FILTER_SANITIZE_STRING);
$airportStart = filter_input(INPUT_POST, 'airportStart',
        FILTER_SANITIZE_STRING);
//echo $firstname;
//echo '<pre>$input: '; var_dump($airportStart); echo '</pre>';

// Beispiel mit int
//$age = filter_input(INPUT_POST, 'age',
//        FILTER_VALIDATE_INT);
//var_dump($age);


$airports = [];
//$airports[0][0] $airports[0][1]
//$airports[] = ['TXL', 'Berlin - Tegel']; 
//$airports[] = ['SXF', 'Berlin - Schönefeld'];

$airports[] = ['TXL' => 'Berlin - Tegel']; 
$airports[] = ['SXF' => 'Berlin - Schönefeld'];

/***************** Funktion ****************/
function selected($a, $b){
    // Typprüfung mit ===
    return ($a===$b) ? 'selected' : '';   
}


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP 04 FORMS</title>
        <meta name="viewport" content="width-divice-width, initial-scale=1.0">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/styles.css" rel="stylesheet" type="text/css"/>
        <script src="assets/js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/js/main.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="container">
            <h1>Formulare</h1>
            <form autocomplete="off" method="post">
                <fieldset>
                    <legend>Persönliche Daten</legend>
                    <div class="row">
                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                            <label for="fn">Vorname</label>
                            <input class="form-control" 
                                   type="text" id="fn" name="firstname" 
                                   value="<?php echo $firstname;?>">                        
                        </div>
                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                            <label for="ln">Name</label>
                            <input class="form-control" 
                                   type="text" id="ln" name="lastname" 
                                   value="<?php echo $lastname;?>">                        
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6
                             align-self-end"> <!-- update.php -->
                            <button formaction="index.php" name="btnAction" 
                                    value="update"
                                    class="btn btn-primary">UPDATE</button>
                            <!-- insert.php -->
                            <button formaction="index.php" name="btnAction" 
                                    value="insert"
                                    class="btn btn-primary">INSERT</button>
                                    
                            <input class="bn btn-primary" type="submit"
                                           name="btn1" value="Senden">
                        </div>
                    </div>


                </fieldset>
                <fieldset>
                    <legend>Auswahl des Flughafens</legend>
                    <select class="form-control" name="airportStart" >
                        <option>Bitte Flughafen auswählen...</option>
                        <?php for ($i = 0; $i < count($airports); $i++) : ?>
                       
                            <?php foreach ($airports[$i] AS $index => $airport) : ?>                 
                            <option <?php echo selected($airportStart, $index); ?>
                                value="<?php echo $index; ?>"  ><?php 
                            echo $airport; ?> </option>

                            <?php endforeach; ?>
                        <?php endfor; ?>
                        
                     <?php // Vergleiche
                     //$airports[0][0] $airports[0][1]
                     for ($i = 0; $i < count($airports); $i++) : ?>
                         <!--
                         <option value="<?php //echo $airports[$i][0]?>">
                             <?php //echo $airports[$i][1]; ?></option>
                         -->
                    <?php endfor; ?>
                        
                    </select>
                </fieldset>
            </form>                

        </div>

        <!-- Ausgabe-->
        <br>
        <h4>Ausgabe</h4>
            
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Vorname</th>
                    <th>Nachname</th> 
                    <th>Flughafen</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $firstname; ?></td>
                    <td><?php echo $lastname; ?></td>                    
                    <td><?php echo $airportStart; ?></td>                    
                </tr>
            </tbody>
                                      
        </table>
        <?php
       // print_r($airports);
       
        
        ?>
    </body>
</html>
