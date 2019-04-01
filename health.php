<?php
// default: server failure
http_response_code(500);

function healthChecks() {
    if (rand(0, 10) == 1) {
        return "NOT OK";
    } else {
        return "OK"
    }
}

if (CheckHealth() == "OK") {
    http_response_code(200);
}
