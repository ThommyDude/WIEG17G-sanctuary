<?php
    
    # Checks if we are running on the webserver on on localhost
    if ($_SERVER['SERVER_NAME'] == "viktorlyresten.wieg17.se") {
        define("URL_PREFIX", 'http://viktorlyresten.wieg17.se/sanctuary/');
        ini_set('display_errors', 0);
    }
    else {
        define("URL_PREFIX", 'http://localhost:8080/');
        ini_set('display_errors', 1);
    }

    # Sets the language of the site automaticly
    $requestLanguage = $_SERVER["HTTP_ACCEPT_LANGUAGE"];

    # Defaults to "en" if no language requested
    if (isset($requestLanguage) == false) {
        $requestLanguage = "en";
    }

    define("LANGUAGE", substr($requestLanguage,0,2)); // can be 'en' or 'sv'

    # Makes a list of names available on the site
    define("ALL_NAMES", array("Göran", "Thimmy", "Berta", "Anastasia", "Glen", "Glen", "Glen", "Glen", "Jimmy", "Viktor", "Adam", "Anders", "Madde", "Lukas", "August", "Selma", "Astrid", "Daniel", "Sauron"));