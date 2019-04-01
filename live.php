<?php
function healthCheck() {
    // random failure, 5% chance
    if (rand(0, 100) < 5) {
        sleep(20);
    }
}

healthCheck()
http_response_code(200);