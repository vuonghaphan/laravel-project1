<?php
function showErrors($errors, $name){
    if ($errors->has($name)){
    echo '<div class="alert alert-success" role="alert">';
    echo '<strong>'.$errors->first($name).'</strong>';
    echo '</div>';
    }
}

?>
