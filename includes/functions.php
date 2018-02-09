<?php

    function redirect($page) {
        header('Location: '.URL_PREFIX.$page);
        die("Forbidden to visit this site.");
    }