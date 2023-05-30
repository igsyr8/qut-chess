<?php
// Generate random waveform data
$bufferLength = 200; // Adjust this value to control the length of the waveform
$dataArray = array();
for ($i = 0; $i < $bufferLength; $i++) {
    $dataArray[] = mt_rand(0, 200); // Adjust the range (0-200) to control the waveform height
}

// Output waveform data as JavaScript code
echo '<script>';
echo 'var waveformData = ' . json_encode($dataArray) . ';';
echo '</script>';
?>
