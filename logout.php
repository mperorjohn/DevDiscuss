
<?php

// Start a new session or resume an existing session
session_start();

// Unset and destroy all session variables
session_unset();
session_destroy();

echo "Before redirection"; // Add this line
header("Location: index.php");
exit;

?>