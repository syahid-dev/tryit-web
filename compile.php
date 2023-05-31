<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') die('POST!');

$lang = $_POST['lang'] ?? 'html';
if (!in_array($lang, ['php', 'python', 'js'])) {
    $lang = 'html';
}
$code = $_POST['code'] ?? null;
if ($code === null) die('null!');

if ($lang === 'html') {
    echo $code;
} else if ($lang === 'php') {
    eval("?>$code");
    // $filename = __DIR__ . '/result/php/temp' . time() . '.php';
    // file_put_contents($filename, $code);
    // echo `php $filename`;
    // unlink($filename);
}
