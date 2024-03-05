<?php
    if(isset($_POST["key"])) {
        $k = $_POST["key"];
        
        if ($k == "Djerba" || $k == "Monastir" || $k == "Tozeur") {
            echo '
            <script>
            window.location="../dest/'.$k.'/home/home.html";
            </script>';
        } else {
            echo '
            <script>
            window.location="404.php";
            </script>' ;
        }
    } else {
        echo "No search key provided.";
    }
?>
