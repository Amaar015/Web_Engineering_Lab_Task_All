<?php

$url = "http://sw.muet.edu.pk/faculty/cvs/sample.pdf";
$urlComponents = parse_url($url);
echo "Scheme: " . $urlComponents['scheme'] . "<br>";
echo "Host: " . $urlComponents['host'] . "<br>";
echo "Path: " . $urlComponents['path'] . "<br>";
?>