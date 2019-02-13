<?php

    function errorMessage($str) {
        return '<div style="width:50%; margin:0 auto; border:2px solid #F00;padding:2px; color:#000; margin-top:10px; text-align:center;">' . $str . '</div>';
    }

    function successMessage($str) {
        return '<div style="width:50%; margin:0 auto; border:2px solid #06C;padding:2px; color:#000; margin-top:10px; text-align:center;">' . $str . '</div>';
    }

    function simple_redirect($url) {
        echo "<script language=\"JavaScript\">\n";
        echo "<!-- hide from old browser\n\n";

        echo "window.location = \"" . $url . "\";\n";

        echo "-->\n";
        echo "</script>\n";

        return true;
    }

    // Return a random value
    function db_prepare_input($string) {
        return trim(addslashes($string));
    }

    //Encryption function
    function easy_crypt($string) {
        return base64_encode($string . "_@#!@");
    }

    //Decodes encryption
    function easy_decrypt($str) {
        $str = base64_decode($str);
        return str_replace("_@#!@", "", $str);
    }
?>
