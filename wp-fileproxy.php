$cfg = [
  "errors" => false, // Enable error reporting
  "wp" => true, // Enable Wordpress core, auth, etc
  "wp_themes" => false, // Enable Wordpress theme
  "wp-load_path" => "./wp-load.php", // wp-load.php relative path
  "custom_limit" => true, // Custom time limit
  "url_prefix" => "https://example.com/downloads/", // Download url prefix
  "url_suffix" => ".pdf", // Download url suffix
  "get_param" => "file", // GET request parameter to concatenate
  "destination" => null, // Proxy file path destination
  "dest_prefix" => "uploads/", // Destination prefix
  "dest_suffix" => ".pdf", // Destination suffix
];

$proxy = [
  "parameter" => $_GET[$cfg["get_param"], // Proxy GET parameter
  "url" => null, // URL to be proxied
  "file" => null, // Proxy file handler
  "curl" => null, // CURL handler
]; 

if ($cfg["errors"])
  error_reporting(E_ALL | E_STRICT);

if ($cfg["wp"]) {
  define("WP_USE_THEMES", $cfg["wp_themes"]);
  include($cfg["wp-load_path"]);
}

if ($cfg["custom_limit"])
  set_time_limit(0);

$proxy["url"] = $cfg["url_prefix"] . $proxy["parameter"] . $cfg["url_suffix"];
$cfg["destination"] = $cfg["dest_prefix"] . $proxy["parameter"] . $cfg["dest_suffix"];

$proxy["file"] = fopen ($cfg["destination"], 'w+');
$proxy["curl"] = curl_init();
curl_setopt($proxy["curl"], CURLOPT_URL, $proxy["url"]);
curl_setopt($proxy["curl"], CURLOPT_BINARYTRANSFER, true);
curl_setopt($proxy["curl"], CURLOPT_RETURNTRANSFER, false);
curl_setopt($proxy["curl"], CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($proxy["curl"], CURLOPT_CONNECTTIMEOUT, 10 );
curl_setopt($proxy["curl"], CURLOPT_FILE, $proxy["file"]);
curl_exec($proxy["curl"]);
curl_close($proxy["curl"]);
fclose($proxy["file"]);