<?php
$randomNumber = rand(0, 100);
if ($randomNumber <= 70 ) {
    http_response_code(200);
} else {
    sleep(20);
    http_response_code(500);
}
