<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/wild.css" rel="stylesheet">
    <link href="img/wild.ico" rel="shortcut icon" type="image/x-icon">
    <title><?php
    if (isset($title)) {
        echo $title;
    } else {
        echo "Untitled article";
    }
    ?></title>
</head>
<body>
    <header>
        <h1>The wild news</h1>
    </header>
