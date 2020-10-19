<?php

if (isset($_POST["presentationID"])) {
    foreach ($_POST["presentationID"] as $checkbox) {
        echo $checkbox. ",";
    }
}

?>