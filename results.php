<?php 
    include 'includes/main.php';
    
    if (isset($_SESSION['created']) == false) {
        redirect('settings.php');
    }
    
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (isset($_POST['nuke'])) {
            session_unset();
            session_destroy();
            redirect('index.php');
        }
    }
    
    include 'includes/header.php';
?>
<h2>The Animal Sanctuary</h2>
<form method="POST" action="results.php">
    <input type="hidden" name="nuke" value="do it" />
    <button type="submit">Nuke the sanctuary</button>
</form>
<?php
    foreach($_SESSION['attractions'] as $attraction) {
        $attraction -> echoImage();
    }
?>

<?php include 'includes/footer.php' ?>