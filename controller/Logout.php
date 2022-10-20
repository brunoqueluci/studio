<?php
class Logout
{
    function logout()
    {
        if (session_status() == true)
        {
            session_unset();
            session_destroy();
            header("Location: \studio\index.php");
        }
        
    }
}

$Logout = new Logout;
$Logout->logout();

echo "sair";