<?php include 'includes/header.php'; ?>

<h2>Formuläret:</h2>
<form>
    <?php
        foreach($listOfEachAttraction as $attraction) {
            $attraction -> echoInputElement();
            echo "<br/>";
        }
    ?>
</form>

<?php include 'includes/footer.php'; ?>