<?php

function adminOnly($redirect = '/index.php'){
    if (empty($_SESSION['id'])|| empty($_SESSION['admin'])) {
        $_SESSION['message'] = 'YOU ARE NOT AUTHORIZE';
        $_SESSION['type'] = 'error';
        header('location: ' . BASE_URL . $redirect);
        exit();
    }
}


// function userOnly($redirect = '/index.php')
// {
//     if (empty($_SESSION['id'])) {
//         $_SESSION['message'] = 'YOU NEED TO LOGIN FIRST';
//         $_SESSION['type'] = 'error';
//         header('location: ' . BASE_URL . $redirect);
//         exit();
//     }
// }

// function guestOnly($redirect = '/index.php'){
//     if (empty($_SESSION['id'])) {
//         header('location: ' . BASE_URL . $redirect);
//         exit();
//     }
// }
