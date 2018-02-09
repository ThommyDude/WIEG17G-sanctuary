<?php
    
    # Sets the language of the site automaticly
    $requestLanguage = $_SERVER["HTTP_ACCEPT_LANGUAGE"];

    # Defaults to "en" if no language requested
    if (isset($requestLanguage) == false) {
        $requestLanguage = "en";
    }

    define("LANGUAGE", substr($requestLanguage,0,2)); // can be 'en' or 'sv'