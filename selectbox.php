<?php ?>
<?php 
$airports = [
  'TXL' => 'Tegel',  
  'SXF' => 'Schönefeld',
  'FRA' => 'Frankfurt',
  'DUS' => 'Düsselforf'  
];

$departs = filter_input(INPUT_GET,'departs', FILTER_SANITIZE_STRING,
        FILTER_REQUIRE_ARRAY);

function selectedMultiple($value, $array) {
    if (is_array($array)) {
        $bool = in_array($value, $array);
        return ($bool) ? ' selected' : '';
    }
}

/*
    Drei Funktionen in eine Funktion gepackt:
    checked($a, $b), checkedMultiple($value, $array),
    selectedMultiple($value, $array)
 * -> eine Funktion für alles
    return: checked oder selected oder Leerstring
*/
function multiChoice($search, $subject, $attribute='') {
  if( is_array($subject) ) {
     return ( in_array($search, $subject)) ? $attribute : '';     
  } else {
      return ($search === $subject) ? $attribute: '';
  }    
}
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
            <form>
                <fieldset>
                    <legend>Abflug</legend>
                    <select name="departs[]" class="form-control" multiple>
                        <option value="">Bitte auswählen</option>
                        <optgroup label="Europa">
                        <!-- foreach -->
                        <?php foreach ($airports AS $index => $airport) : ?>
                            <option <?php 
                                echo multiChoice($index, $departs, 'selected'); ?> 
                                value="<?php echo $index; ?>"><?php
                                echo $airport; ?></option>
                        <!-- foreach Ende -->
                        <?php endforeach; ?>
                        </optgroup>
                    </select>
                </fieldset>
                <hr>
                <fieldset>
                    <button class="btn btn-primary">send</button>
                </fieldset>
                <hr>
            </form>
        </div>


        <br>
        <h4>Ausgabe</h4>
        <?php
        print_r($departs);
        //var_dump($departs);
        ?>
    </body>
</html>
