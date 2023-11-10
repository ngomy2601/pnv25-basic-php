<?php
$url = "https://blog.hubspot.com/marketing/example.php?name=ronan&best-teacher=true";
$components = parse_url($url);

print_r(($components));
