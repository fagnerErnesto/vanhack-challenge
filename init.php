<?php
$arrDir = [
    __DIR__ . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR,
    __DIR__ . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'dao' . DIRECTORY_SEPARATOR
];

foreach ($arrDir as $dir) {
    $arrFile = glob( $dir.'*.php' );
    foreach ($arrFile as $file) {
        include_once $file;
    }
}