<?php
$counterFile = 'counter.txt';

// Check if file exists and read current count or initialize it
if (file_exists($counterFile)) {
    $count = file_get_contents($counterFile);
} else {
    $count = 0;
}

// Increment the count and save it back to the file
$count++;
file_put_contents($counterFile, $count);

// Return the current count
echo $count;
?>