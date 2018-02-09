<?php
    
    # Sets the language of the site automaticly
    $requestLanguage = $_SERVER["HTTP_ACCEPT_LANGUAGE"];

    # Defaults to "en" if no language requested
    if (isset($requestLanguage) == false) {
        $requestLanguage = "en";
    }

    define("LANGUAGE", substr($requestLanguage,0,2)); // can be 'en' or 'sv'

    # Makes a list of names available on the site
    define("ALL_NAMES", array("Göran", "Thimmy", "Berta", "Anastasia", "Glen", "Glen", "Glen", "Glen", "Jimmy", "Viktor", "Adam", "Anders", "Madde", "Lukas", "August", "Selma", "Astrid", "Daniel", "Sauron"));