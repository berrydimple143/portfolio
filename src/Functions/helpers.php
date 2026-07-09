<?php
    if(!function_exists('includeWithArgs')) {
        function includeWithArgs($filePath, $args = []) {
            if (file_exists($filePath)) {
                // Extract array keys into local variables
                extract($args); 
                include $filePath;
            }
        }
    }
?>