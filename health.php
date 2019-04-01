<?php
// default: server failure
http_response_code(500);

function healthChecks() {
    return "OK";
}

if (CheckHealth() == "OK") {
    http_response_code(200);
}
