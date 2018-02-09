<?php include 'includes/header.php' ?>

<?php
    $choosenAttractions = array();

for ($i = 0; $i < $_POST['Tiger']; $i++) {
    array_push($choosenAttractions, new Tiger());
}
for ($i = 0; $i < $_POST['Giraff']; $i++) {
    array_push($choosenAttractions, new Giraf());
}
for ($i = 0; $i < $_POST['Apa']; $i++) {
    array_push($choosenAttractions, new Monkey());
}
for ($i = 0; $i < $_POST['Kokosnöt']; $i++) {
    array_push($choosenAttractions, new Coconut());
}

foreach($choosenAttractions as $attraction) {
    $attraction -> echoImage();
}

?>

<?php include 'includes/footer.php' ?>