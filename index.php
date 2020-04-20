<?php
$links = array(
    'cal' => 'https://tcmaker.org/calendar',
    'classes' => 'https://tcmaker.org/classes',
    'eb' => 'https://www.eventbrite.com/o/twin-cities-maker-440413464',
    'fb' => 'https://www.facebook.com/groups/TwinCitiesMaker/',
    'mailinglist' => 'https://tcmaker.us6.list-manage.com/subscribe?u=0608f3f8d455cd38f85d6db80&id=33f3b0bc76',
    'map' => 'https://www.google.com/maps/place/3119+E+26th+St,+Minneapolis,+MN+55406/@44.9546948,-93.228322,17z/data=!4m5!3m4!1s0x87f628281fef1e8f:0xdd7ffd66e936b710!8m2!3d44.9546948!4d-93.226128?shorturl=1',
    'tasks' => 'https://jira.tcmaker.org/jira',
);

function process_lookup($links) {
    if (! array_key_exists('code', $_GET)) return;
    if (! array_key_exists($_GET['code'], $links)) return;
    header($_SERVER['SERVER_PROTOCOL'] . ' 301 Moved Permenantly');
    header('Location: ' . $links[$_GET[code]]);
    exit();
}
process_lookup($links);

# Return 404
header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
?>
<html>
<head>
<meta charset="UTF-8">
<title>Link Not Found</title>
</head>
<body>
<h1>Link Not Found</h1>
<p>That link does not exist in our database.</p>
</body>
</html>
