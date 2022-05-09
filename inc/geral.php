<?

$dir = $_SERVER['SCRIPT_NAME'];
$dir = pathinfo($dir);
$host = $_SERVER['HTTP_HOST'];
$http = $_SERVER['REQUEST_SCHEME'];
if ($dir["dirname"] == "/") {
    $url = $http . "://" . $host . "/";
} else {
    $url = $http . "://" . $host . $dir["dirname"] . "/";
}

?>