<?php 
if (count($errors) > 0) {
    echo '<div class="errors">';
    foreach ($errors as $error){
        echo '<p>' . $error . '</p>';
    }
    echo '</div>';
} 
?>