<?php
        header('Content-Type: application/json');
        $options = array(
            CURLOPT_RETURNTRANSFER => true,     // return web page
            CURLOPT_HEADER         => true,     //return headers in addition to content
            CURLOPT_FOLLOWLOCATION => true,     // follow redirects
            CURLOPT_ENCODING       => "",       // handle all encodings
            CURLOPT_AUTOREFERER    => true,     // set referer on redirect
            CURLOPT_CONNECTTIMEOUT => 120,      // timeout on connect
            CURLOPT_TIMEOUT        => 120,      // timeout on response
            CURLOPT_MAXREDIRS      => 10,       // stop after 10 redirects
            CURLINFO_HEADER_OUT    => true,
            CURLOPT_SSL_VERIFYPEER => false,     // Disabled SSL Cert checks
            CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
            CURLOPT_COOKIE         => "mid=WU1KXQAEAAExA74tpuuzlfM31rtk; rur=ATN; ig_vw=1366; ig_pr=1; fbm_124024574287414=base_domain=.instagram.com; fbsr_124024574287414=AAcPokD_Nyx2pKTH36o4MoPrhkNi_zDrdQvgmXHZO-k.eyJhbGdvcml0aG0iOiJITUFDLVNIQTI1NiIsImNvZGUiOiJBUUFmYmRGVjN0U1AzR1MtZ1dtVU1uY2U0Z2kyUkpTZnh5TTB3cUVvYlFnSVRoUHlfN1h5RFVzLWNjSmlVNVZWeGU1bHN2c2R0OVZja2FTQXotR1BXVkc4V2ZMeHJjY21TLUNBYk0wQ2Z6cmMtYTNrSHZ4X3h6b24zdVZVSHFjM1gwYUFVQkRpNDY0dVEtbEktY2xHZG53UW9KM2ZHMnBaRHZnYmxaV01QNFdUWUZBZG56aGI3SXhQbThmNVk4ZG1KLVhNVjVBSkxkV0lxSzJkRnVudkZfRFh3MkJMc2ZrbzRkVjh2cDE2UXZVSEZPVGhVd21IN08wUW9rR2EwUDFtNWlCQ1V4bDdMc2tsbWE0ZS1kZGQxVDAtRVZrUVIyWFpzWjVqTGZCZHNqRi0xUldQZ3h0cUN1RWQ5OXBNM2V0SVY3NUtpX2JoVzc5NHhsQk9SWXJDVXFheSIsImlzc3VlZF9hdCI6MTQ5ODc2MTEyMCwidXNlcl9pZCI6Ijc4ODYwODEzNCJ9;"
            //the above cookie might change, keep in mind
        );

        $ch      = curl_init( "https://www.instagram.com/explore/tags/glitchrock/?__a=1" );
        curl_setopt_array( $ch, $options );
        $rough_content = curl_exec( $ch );
        $err     = curl_errno( $ch );
        $errmsg  = curl_error( $ch );
        $header  = curl_getinfo( $ch );
        curl_close( $ch );
        echo explode("\r\n\r\n",$rough_content)[1]; //CHANGED
?>
