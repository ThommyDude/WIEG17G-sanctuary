<?php include 'includes/header.php' ?>

<?php
    $choosenAttractions = array();

    $postedNames = array_keys($_POST);
    
    for ($i = 0; $i < count($postedNames); $i++) {
        $name = $postedNames[$i];
        $value = $_POST[$name];

        for($k = 0; $k < $value; $k++) {
            array_push($choosenAttractions, new $name());
        }
    }
        
    foreach($choosenAttractions as $attraction) {
        $attraction -> echoImage();
    }

?>

<?php include 'includes/footer.php' ?>