<?php
function loadUsers($file = "users.json") {
    return file_exists($file) ? json_decode(file_get_contents($file), true) : [];
}

function saveUsers($users, $file = "users.json") {
    file_put_contents($file, json_encode($users));
}
?>
