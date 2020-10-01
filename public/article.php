<?php
/**
 * A script that display an article
 */

$title = "A fine article";
$article = [$title => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id facilis reprehenderit molestiae cum aliquam tempore veritatis, dolore nulla eaque nostrum odio placeat consectetur. Asperiores incidunt, exercitationem quibusdam esse libero illum!"];
require_once '../src/header.php';
echo "<article>" . PHP_EOL;
echo "<h1>" . $title . "</h1>" . PHP_EOL;
echo "<p>" . $article[$title] . "</p>" . PHP_EOL;
echo "</article>" . PHP_EOL;

require_once '../src/footer.php';