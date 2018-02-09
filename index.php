<?php include 'includes/header.php'; ?>

<h2>Formuläret:</h2>
<form action="results.php" method="POST">
    <?php
        foreach($listOfEachAttraction as $attraction) {
            $attraction -> echoInputElement();
            echo "<br/>";
        }
    ?>
    <button type="submit">Skapa naturreservatet</button>
</form>

<?php include 'includes/footer.php'; ?>