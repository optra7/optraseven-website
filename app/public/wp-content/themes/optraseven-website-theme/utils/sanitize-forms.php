<?php
function sanitize_tel_field($tel) {
    $tel = preg_replace('/[^0-9+\-\s().]/', '', $tel);
    return trim($tel);
}
