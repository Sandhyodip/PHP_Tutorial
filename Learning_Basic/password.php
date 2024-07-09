<?php
echo 'password hash..!!<br>';

$password = "user_password";
$hash = password_hash($password, PASSWORD_DEFAULT);
echo $hash.'<br>';
$options = [
    'cost' => 12,
];
$hash = password_hash($password, PASSWORD_BCRYPT, $options);
echo $hash.'<br>';

$myPassword='hello_sandhyodip';
$hashedPassword= password_hash($myPassword, PASSWORD_DEFAULT);

if (password_verify($myPassword, $hashedPassword)) {
    echo "Password is valid!";
} else {
    echo "Invalid password.";
}
echo '<br>';