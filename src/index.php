<?php 
 
 namespace SSO;

class SSO
{
 
    public static function getIPAddress()
    {
        return $_SERVER['REMOTE_ADDR'];
    }
  
}
?>