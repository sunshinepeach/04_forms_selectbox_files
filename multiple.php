<?php ?>
<?php 
//        0   1            2             3             4
$menus = ['','keine', 'Frühstück', 'Halbpension',
    'Vollpension'];
$menu = filter_input(INPUT_GET, 'menu',
        FILTER_VALIDATE_INT);

/************* Funktion ****************/
function checked($a, $b) {
    return ($a === $b) ? 'checked' : ''; 
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP 04 MULTIPLE</title>
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
                    <legend>Verpflegung</legend>
                    <!-- Schleife -->
                    <?php for ($i = 0; $i < count($menus); $i++) : ?>
                        <?php if ($i != 0) : ?>
                            <div class="form-check form-check-inline">
                                <input <?php echo checked($menu, $i); ?>
                                    class="form-check-input" 
                                    type="radio" name="menu"
                                    value="<?php  echo $i; ?>"
                                    id="menu<?php echo $i; ?>">
                                <label class="form-check-label" 
                                    for="menu<?php echo $i; ?>"><?php
                                    echo $menus[$i];
                                ?></label>
                            </div>
                        <?php endif; ?>
                    <!-- Schleifenende -->
                    <?php endfor; ?>
                    
                    
                    
                   <!--
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="menu"
                               value="1" id="menu1">
                        <label class="form-check-label" for="menu1">keine</label>
                    </div>                    
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="menu"
                              value="2" id="menu2">
                        <label class="form-check-label" for="menu2">Frühstück</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="menu"
                              value="3" id="menu3">
                        <label class="form-check-label" for="menu3">Halbpension</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="menu"
                              value="4" id="menu4">
                        <label class="form-check-label" for="menu4">Vollpension</label>
                    </div>
                   -->
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
        // print_r();
        // var_dump();
        ?>
    </body>
</html>
