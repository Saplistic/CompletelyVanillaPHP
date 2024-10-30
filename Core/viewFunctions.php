<?php 

function HTMLDisplayErrorMsg($name) 
{
    global $errors;

    if (isset($errors[$name])) {
        echo
        "<small class='text-danger'>
            {$errors[$name]}
        </small>";
    }
}
