<?php
    include 'includes/main.php';
    
    if (isset($_SESSION['created'])) {
        die("Forbidden to access settings again. Please nuke the sanctuary first.");
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $_SESSION['created'] = true;
        
        $choosenAttractions = array();
        
        $postedNames = array_keys($_POST);
        
        for ($i = 0; $i < count($postedNames); $i++) {
            $name = $postedNames[$i];
            $value = $_POST[$name];
            
            for($k = 0; $k < $value; $k++) {
                array_push($choosenAttractions, new $name());
            }
        }
        $_SESSION['attractions'] = $choosenAttractions;

        redirect('results.php');
    }
    
    include 'includes/header.php';
?>

<h2>Formuläret:</h2>
<form action="settings.php" method="POST">
    <?php
        foreach($listOfEachAttraction as $attraction) {
            $attraction -> echoInputElement();
            echo "<br/>";
        }
    ?>
    <button type="submit">Skapa naturreservatet</button>
</form>

<?php include 'includes/footer.php'; ?>