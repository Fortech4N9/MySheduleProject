<?php
function formatDateString($dateString)
{
    $timestamp = strtotime($dateString);
    setlocale(LC_ALL, 'Russian_Russia.utf8');
    return strftime('%A - %Y-%m-%d', $timestamp);
}
?>
