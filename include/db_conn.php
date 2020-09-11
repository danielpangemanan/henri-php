<?php
$host     = "localhost"; // Host name 
$username = "root"; // Mysql username 
$password = ""; // Mysql password 
$database  = "rs_kirana"; // Database name 

// Connect to server and select databse.
$koneksi = mysqli_connect($host, $username, $password, $database);

// Check connection
if (mysqli_connect_errno($koneksi)) {
    echo "Gagal Terhubung Kedatabase: " . mysqli_connect_error();
}
?>
<?php
function page_protect()
{
    session_start();
    
    global $db;
    
    /* Secure against Session Hijacking by checking user agent */
    if (isset($_SESSION['HTTP_USER_AGENT'])) {
        if ($_SESSION['HTTP_USER_AGENT'] != md5($_SERVER['HTTP_USER_AGENT'])) {
            session_destroy();
            echo "<meta http-equiv='refresh' content='0; url=../login/'>";
            exit();
        }
    }
    
    // before we allow sessions, we need to check authentication key - ckey and ctime stored in database
    
    /* If session not set, check for cookies set by Remember me */
    if (!isset($_SESSION['user_data']) && !isset($_SESSION['logged']) && !isset($_SESSION['auth_level'])) {
        session_destroy();
        echo "<meta http-equiv='refresh' content='0; url=../login/'>";
        exit();
    } else {
        
    }
    
}
?>