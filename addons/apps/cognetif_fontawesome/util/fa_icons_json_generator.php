<?php
$data = json_decode(file_get_contents('https://gist.githubusercontent.com/anthonykozak/2b0c0c3a6c9b693c5c1d5658447462be/raw/fb4d386f807646ed64c05d4ae390cd74c5819f8f/FontAwesome%25205%2520Full%2520Json%2520Data'), true);
$outData = [];
foreach ($data as $icon) {
    $outData[$icon['name']] = $icon['styles'];
}

file_put_contents('fa_icons.json', json_encode($outData));

