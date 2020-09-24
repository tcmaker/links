<?php
$links = array(
     //main blog feed
    'blog' => 'https://tcmaker.org/news',
    //calendar page on website
    'cal' => 'https://tcmaker.org/calendar',
    //classes page on website
    'classes' => 'https://tcmaker.org/classes',
    //Eventbright TCMake Organization Page
    'eb' => 'https://www.eventbrite.com/o/twin-cities-maker-440413464',
    //Twin Cities Maker Face Book Group
    'fb' => 'https://www.facebook.com/groups/TwinCitiesMaker/',
    //Intro Vid on youtube
    'introvid' => 'https://www.youtube.com/watch?v=vFndmW6c6BU',
    //You tube Channel For organization
    'youtube' => 'https://www.youtube.com/user/twincitiesmaker/',
    //Laser cutter documentation page
    'lzrdocs' => 'https://wiki.tcmaker.org/documentation/laser_cutters/full_spectrum_laser_cutter',
    //Laser cutter reservation page may be moved to clubhouse in the future
    'lzrres' => 'https://tcmaker.org/laser-reservations/',
    'laser' => 'https://tcmaker.org/laser-reservations/',
    //Mailchimp shop department mailing lists
    'mailinglist' => 'https://tcmaker.us6.list-manage.com/subscribe?u=0608f3f8d455cd38f85d6db80&id=33f3b0bc76',
    'ilikespam' => 'https://tcmaker.us6.list-manage.com/subscribe?u=0608f3f8d455cd38f85d6db80&id=33f3b0bc76',
    //Google Maps link to Hack Factory location
    'map' => 'https://www.google.com/maps/place/3119+E+26th+St,+Minneapolis,+MN+55406/@44.9546948,-93.228322,17z/',
    //dead link to old Jira Instance
    'tasks' => 'https://jira.tcmaker.org/jira',
    //Link to internal map of shop
    'floorplan' => 'https://wiki.tcmaker.org/about_us/shop_floorplan/start',
    //Membership Dashboard/Clubhouse where members can manage their memberships.
    'dashboard' => 'https://clubhouse.tcmaker.org/',
    'dash' => 'https://clubhouse.tcmaker.org/',
    //link to Twin Cities Maker Code of Conduct
    'conduct' => 'https://wiki.tcmaker.org/governance/twin_cities_maker_code_of_conduct',
    //Link to Member Handbook
    'handbook' => 'https://drive.google.com/file/d/157XpX6GQTguO2m6wxzvH6rcKAfUWvzi_/view?usp=sharing',
    //Link to member Storage Policies
    'storage' => 'https://wiki.tcmaker.org/governance/member_storage_policy?s[]=storage',
    //Link to Public List of Major Tools in the wiki
    'tools' => 'https://wiki.tcmaker.org/tools_and_equipment/start?s[]=tools',
    //Link to new member orientation signup
    'newmember' => 'https://www.eventbrite.com/e/82621042763',
    //Dashboard into video hosted on google drive
    'dashboardintro' => 'https://drive.google.com/file/d/1LjQW2gIDViRFW4-mm0BVPhbxD7B7d_Ne/view?usp=sharing',
    //link to nominations form for 2020 board election
    'nomination' => 'https://forms.gle/g99j2raRebfCc7VT8',
    'nominations' => 'https://forms.gle/g99j2raRebfCc7VT8',
    //Link to 2020 annual meeting
    'annualmeeting' => 'https://umich.zoom.us/j/97643869193',
    //link to board meeting
    'boardmeeting' => 'https://jitsi.tcmaker.org/boardmeeting',
    //Link to New Member Orientation Meeting
    'orientationmeeting' => 'https://zoom.us/j/95387691048?pwd=S21VWXVaMnh5amVKN3k3TGtsQlcxQT09',
    //Links to open locksport chang URLs for these two to Eventbright Entry 
    'locksport' => 'https://jitsi.tcmaker.org/locksport',
    'openlocksport' => 'https://jitsi.tcmaker.org/locksport',
    //Links to Open Locksport Video Meetup. This is why you don't code when tired and talking to friends
    'locksportmeeting' => 'https://jitsi.tcmaker.org/locksport',
    'openlocksportmeeting' => 'https://jitsi.tcmaker.org/locksport',
    'hamsterdance' => 'https://jitsi.tcmaker.org/locksport',
    'hamster.dance' => 'https://jitsi.tcmaker.org/locksport',
    'openhouse' => 'https://jitsi.tcmaker.org/openhouse',
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
