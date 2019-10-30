<?php
$links = array(
    '1' => 'https://tcmaker.org/',
    '2' => 'https://google.com/',
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
