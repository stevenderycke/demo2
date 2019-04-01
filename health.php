<?php
// default: server failure
http_response_code(500);

function healthCheck() {
    if (rand(0, 10) == 1) {
        return "NOT OK";
    } else {
        return "OK";
    }
}

if (healthCheck() == "OK") {
    http_response_code(200);
}
