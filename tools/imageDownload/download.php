<?php


$rawData = json_decode(file_get_contents(__DIR__ . '/../parserImproved/raw.json'), true);

echo 'Processing the ' . $value['name'] . PHP_EOL;
foreach($rawData as $value) {
    file_put_contents(__DIR__ . '/images/' . $value['name'] . '.jpg', file_get_contents('https://robertsspaceindustries.com' . $value['media'][0]['images']['avatar']));
}
