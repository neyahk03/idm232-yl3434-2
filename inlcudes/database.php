$db_server = getenv('DB_SERVER');
$db_username = getenv('DB_USERNAME');
$db_password = getenv('DB_PASSWORD');
$db_name = getenv('DB_NAME');

$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
    echo "Connected successfully. MySQL version: " . mysqli_get_server_info($connection);
