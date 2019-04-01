<?php
function healthChecks() {
    return "OK";
}

if CheckHealth() == "OK" {
    http_response_code(200);
} else {
    http_response_code(500);
}
