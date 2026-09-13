<?php

$appName = "Stashlash";
$tagline = "Stash your files.";
$description = "A simple place to safely save and access your files.";

function getAppName() {
    return "Stashlash";
}

function getYear() {
    return date("Y");
}

echo getAppName();
echo "\n";
echo $tagline;
echo "\n";
echo $description;
echo "\n";
echo "© " . getYear() . " " . getAppName();

?>
