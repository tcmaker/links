<?php
$links = array(
    'blog' => 'https://tcmaker.org/news',
    'cal' => 'https://tcmaker.org/calendar',
    'classes' => 'https://tcmaker.org/classes',
    'eb' => 'https://www.eventbrite.com/o/twin-cities-maker-440413464',
    'fb' => 'https://www.facebook.com/groups/TwinCitiesMaker/',
    'introvid' => 'https://www.youtube.com/watch?v=vFndmW6c6BU',
    'youtube' => 'https://www.youtube.com/user/twincitiesmaker/',
    'lzrdocs' => 'https://wiki.tcmaker.org/documentation/laser_cutters/full_spectrum_laser_cutter',
    'lzrres' => 'https://tcmaker.org/laser-reservations/',
    'laser' => 'https://tcmaker.org/laser-reservations/',
    'mailinglist' => 'https://tcmaker.us6.list-manage.com/subscribe?u=0608f3f8d455cd38f85d6db80&id=33f3b0bc76',
    'ilikespam' => 'https://tcmaker.us6.list-manage.com/subscribe?u=0608f3f8d455cd38f85d6db80&id=33f3b0bc76',
    'map' => 'https://www.google.com/maps/place/3119+E+26th+St,+Minneapolis,+MN+55406/@44.9546948,-93.228322,17z/',
    'tasks' => 'https://jira.tcmaker.org/jira',
    'floorplan' => 'https://wiki.tcmaker.org/about_us/shop_floorplan/start',
    'dashboard' => 'https://clubhouse.tcmaker.org/',
    'dash' => 'https://clubhouse.tcmaker.org/',
    'conduct' => 'https://wiki.tcmaker.org/governance/twin_cities_maker_code_of_conduct',
    'handbook' => 'https://drive.google.com/file/d/157XpX6GQTguO2m6wxzvH6rcKAfUWvzi_/view?usp=sharing',
    'storage' => 'https://wiki.tcmaker.org/governance/member_storage_policy?s[]=storage',
    'tools' => 'https://wiki.tcmaker.org/tools_and_equipment/start?s[]=tools',
    'newmember' => 'https://www.eventbrite.com/e/82621042763',
    'dashboardintro' => 'https://drive.google.com/file/d/1LjQW2gIDViRFW4-mm0BVPhbxD7B7d_Ne/view?usp=sharing'
    'nomination' => 'https://forms.gle/g99j2raRebfCc7VT8'
    'nominations' => 'https://forms.gle/g99j2raRebfCc7VT8'
    'annualmeeting' => 'https://jitsi.tcmaker.org/annualmeeting'

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
