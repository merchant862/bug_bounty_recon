<?php 

ini_set('display_errors', 1);
error_reporting(E_ALL);



if(isset($_POST['dir']))
{  
    $encode = urlencode($_POST['url']);
    
    echo "<script type='text/javascript'>window.open('https://www.google.com/search?q=site:".$encode." intitle:index.of', '_blank');</script>";
}

elseif(isset($_POST['www']))
{
    $encode = urlencode($_POST['url']);
    
    $quote = '\"';
    
    echo "<script type='text/javascript'>window.open('https://publicwww.com/websites/".$quote.$encode.$quote."/', '_blank');</script>";
}

elseif(isset($_POST['conf']))
{
    $encode = urlencode($_POST['url']);

    echo "<script type='text/javascript'>window.open('https://www.google.com/search?q=site:".$encode." ext:xml | ext:conf | ext:cnf | ext:reg | ext:inf | ext:rdp | ext:cfg | ext:txt | ext:ora | ext:ini', '_blank');</script>";
}

elseif(isset($_POST['s3']))
{
    $encode = urlencode($_POST['url']);
    
    $quote = '\"';

    echo "<script type='text/javascript'>window.open('https://www.google.com/search?q=site:.s3.amazonaws.com".$quote."".$encode."".$quote."', '_blank');</script>";
}

elseif(isset($_POST['cms']))
{
    $encode = urlencode($_POST['url']);

    echo "<script type='text/javascript'>window.open('https://whatcms.org/?s=".$encode."', '_blank');</script>";
}

elseif(isset($_POST['ip4']))
{
    $encode = urlencode($_POST['url']);

    echo "<script type='text/javascript'>window.open('https://censys.io/ipv4?q=".$encode."', '_blank');</script>";
}

elseif(isset($_POST['db']))
{
    $encode = urlencode($_POST['url']);

    echo "<script type='text/javascript'>window.open('https://www.google.com/search?q=site:".$encode." ext:sql | ext:dbf | ext:mdb', '_blank');</script>";
}

elseif(isset($_POST['docs']))
{
    $encode = urlencode($_POST['url']);

    echo "<script type='text/javascript'>window.open('https://www.google.com/search?q=site:".$encode." ext:doc | ext:docx | ext:odt | ext:pdf | ext:rtf | ext:sxw | ext:psw | ext:ppt | ext:pptx | ext:pps | ext:csv', '_blank');</script>";
}

elseif(isset($_POST['pastebin']))
{
    $encode = urlencode($_POST['url']);

    echo "<script type='text/javascript'>window.open('https://www.google.com/search?q=site:".$encode." intitle:index.of', '_blank');</script>";
}

elseif(isset($_POST['wwm']))
{
    $encode = urlencode($_POST['url']);

    echo "<script type='text/javascript'>window.open('https://www.google.com/search?q=site:".$encode." intitle:index.of', '_blank');</script>";
}

elseif(isset($_POST['swf-google']))
{
    $encode = urlencode($_POST['url']);

    echo "<script type='text/javascript'>window.open('https://www.google.com/search?q=inurl:".$encode." ext:swf', '_blank');</script>";
}

elseif(isset($_POST['dms']))
{
    $encode = urlencode($_POST['url']);

    echo "<script type='text/javascript'>window.open('https://censys.io/domain?q=".$encode."'', '_blank');</script>";
}

elseif(isset($_POST['word']))
{
    $encode = urlencode($_POST['url']);

    echo "<script type='text/javascript'>window.open('https://www.google.com/search?q=site:".$encode." inurl:wp-content | inurl:wp-includes', '_blank');</script>";
}

elseif(isset($_POST['php']))
{
    $encode = urlencode($_POST['url']);

    echo "<script type='text/javascript'>window.open('https://www.google.com/search?q=site:".$encode." ext:php intitle:phpinfo \'published by the PHP Group\'', '_blank');</script>";
}

elseif(isset($_POST['link']))
{
    $encode = urlencode($_POST['url']);

    echo "<script type='text/javascript'>window.open('https://www.google.com/search?q=site:linkedin.com employees ".$encode."', '_blank');</script>";
}

elseif(isset($_POST['github']))
{
    $encode = urlencode($_POST['url']);
    
    $quote = '\"';

    $astrik = '*.';

    echo "<script type='text/javascript'>window.open('https://github.com/search?q=".$quote."".$astrik."".$encode."".$quote."', '_blank');</script>";
}

elseif(isset($_POST['swf-yandex']))
{
    $encode = urlencode($_POST['url']);

    echo "<script type='text/javascript'>window.open('https://yandex.com/search/?text=site:".$encode."  mime:swf', '_blank');</script>";
}

elseif(isset($_POST['certs']))
{
    $encode = urlencode($_POST['url']);

    echo "<script type='text/javascript'>window.open('https://censys.io/certificates?q=".$encode."'', '_blank');</script>";
}

elseif(isset($_POST['log']))
{
    $encode = urlencode($_POST['url']);

    echo "<script type='text/javascript'>window.open('https://www.google.com/search?q=site:".$encode." ext:log', '_blank');</script>";
}

elseif(isset($_POST['back']))
{
    $encode = urlencode($_POST['url']);

    echo "<script type='text/javascript'>window.open('https://www.google.com/search?q=site:".$encode."  inurl:shell | inurl:backdoor | inurl:wso | inurl:cmd | shadow | passwd | boot.ini | inurl:backdoor', '_blank');</script>";
}

elseif(isset($_POST['htaccess']))
{
    $encode = urlencode($_POST['url']);
    
    $quote = '\"';

    echo "<script type='text/javascript'>window.open('https://www.google.com/search?q=site:".$encode." inurl:".$quote."/phpinfo.php".$quote." | inurl:".$quote.".htaccess".$quote."', '_blank');</script>";
}

elseif(isset($_POST['openbug']))
{
    $encode = urlencode($_POST['url']);

    echo "<script type='text/javascript'>window.open('https://www.openbugbounty.org/search/?search=".$encode."', '_blank');</script>";
}

elseif(isset($_POST['swf-wayback']))
{
    $encode = urlencode($_POST['url']);

    echo "<script type='text/javascript'>window.open('https://web.archive.org/cdx/search?url=".$encode."/&matchType=domain&collapse=urlkey&output=text&fl=original&filter=urlkey:.*swf&limit=100000', '_blank');</script>";
}

elseif(isset($_POST['shodan']))
{
    $encode = urlencode($_POST['url']);

    echo "<script type='text/javascript'>window.open('https://www.shodan.io/search?query=".$encode."', '_blank');</script>";
}

elseif(isset($_POST['old']))
{
    $encode = urlencode($_POST['url']);

    echo "<script type='text/javascript'>window.open('https://www.google.com/search?q=site:".$encode." ext:bkf | ext:bkp | ext:bak | ext:old | ext:backup', '_blank');</script>";
}

elseif(isset($_POST['setup']))
{
    $encode = urlencode($_POST['url']);

    echo "<script type='text/javascript'>window.open('https://www.google.com/search?q=site:".$encode."  inurl:readme | inurl:license | inurl:install | inurl:setup | inurl:config', '_blank');</script>";
}

elseif(isset($_POST['sub']))
{
    $encode = urlencode($_POST['url']);

    echo "<script type='text/javascript'>window.open('https://www.google.com/search?q=site:".$encode." intitle:index.of', '_blank');</script>";
}

elseif(isset($_POST['reddit']))
{
    $encode = urlencode($_POST['url']);

    echo "<script type='text/javascript'>window.open('https://www.reddit.com/search/?q=".$encode."', '_blank');</script>";
}

elseif(isset($_POST['swf2']))
{
    $encode = urlencode($_POST['url']);

    echo "<script type='text/javascript'>window.open('https://www.google.com/search?q=site:".$encode." intitle:index.of', '_blank');</script>";
}

elseif(isset($_POST['rce']))
{
    $encode = urlencode($_POST['url']);

    echo "<script type='text/javascript'>window.open('https://www.google.com/search?q=.sharepoint.com/_vti_bin/webpartpages/asmx -docs -msdn -mdsec site:".$encode."', '_blank');</script>";
}

elseif(isset($_POST['login']))
{
    $encode = urlencode($_POST['url']);

    echo "<script type='text/javascript'>window.open('https://www.google.com/search?q=site:".$encode." inurl:login | inurl:signin | intitle:Login | intitle: signin | inurl:auth', '_blank');</script>";
}

elseif(isset($_POST['redirects']))
{
    $encode = urlencode($_POST['url']);

    echo "<script type='text/javascript'>window.open('https://www.google.com/search?q=site:".$encode." inurl:redir | inurl:url | inurl:redirect | inurl:return | inurl:src=http | inurl:r=http', '_blank');</script>";
}

elseif(isset($_POST['s-sub']))
{
    $encode = urlencode($_POST['url']);

    echo "<script type='text/javascript'>window.open('https://www.google.com/search?q=site:".$encode." intitle:index.of', '_blank');</script>";
}

elseif(isset($_POST['xml']))
{
    $encode = urlencode($_POST['url']);

    echo "<script type='text/javascript'>window.open('https://www.google.com/search?q=".$encode."/crossdomain.xml', '_blank');</script>";
}

elseif(isset($_POST['swf3']))
{
    $encode = urlencode($_POST['url']);

    echo "<script type='text/javascript'>window.open('https://www.google.com/search?q=site:".$encode." intitle:index.of', '_blank');</script>";
}

elseif(isset($_POST['api']))
{
    $encode = urlencode($_POST['url']);

    echo "<script type='text/javascript'>window.open('https://www.google.com/search?q=site:".$encode." filetype:wsdl | filetype:WSDL | ext:svc | inurl:wsdl | Filetype: ?wsdl | inurl:asmx?wsdl | inurl:jws?wsdl | intitle:_vti_bin/sites.asmx?wsdl | inurl:_vti_bin/sites.asmx?wsdl', '_blank');</script>";
}

elseif(isset($_POST['sql']))
{
    $encode = urlencode($_POST['url']);

    echo "<script type='text/javascript'>window.open('https://www.google.com/search?q=site:".$encode." intext:\'sql syntax near\' | intext:\'syntax error has occurred\' | intext:\'incorrect syntax near\' | intext:\'unexpected end of SQL command\' | intext:\'Warning: mysql_connect()\' | intext:\'Warning: mysql_query()\' | intext:\'Warning: pg_connect()\'', '_blank');</script>";
}

elseif(isset($_POST['apache2']))
{
    $encode = urlencode($_POST['url']);

    echo "<script type='text/javascript'>window.open('https://www.google.com/search?q=site:".$encode." ext:action | ext:struts | ext:do', '_blank');</script>";
}

elseif(isset($_POST['word2']))
{
    $encode = urlencode($_POST['url']);

    echo "<script type='text/javascript'>window.open('https://www.google.com/search?q=site:".$encode." inurl:wp- | inurl:wp-content | inurl:plugins | inurl:uploads | inurl:themes | inurl:download', '_blank');</script>";
}

elseif(isset($_POST['threat']))
{
    $encode = urlencode($_POST['url']);

    echo "<script type='text/javascript'>window.open('https://threatcrowd.org/domain.php?domain=".$encode."', '_blank');</script>";
}

elseif(isset($_POST['reverse']))
{
    $encode = urlencode($_POST['url']);

    echo "<script type='text/javascript'>window.open('https://viewdns.info/reverseip/?host=".$encode."&t=1', '_blank');</script>";
}

elseif(isset($_POST['gist']))
{
    $encode = urlencode($_POST['url']);
    
    $quote = '\"';

    echo "<script type='text/javascript'>window.open('https://gist.github.com/search?q=*.".$quote."".$encode."".$quote."', '_blank');</script>";
}

elseif(isset($_POST['apache-config']))
{
    $encode = urlencode($_POST['url']);
    
    $quote = '\"';
    
    echo "<script type='text/javascript'>window.open('https://www.google.com/search?q=site:".$encode." filetype:config ".$quote."apache".$quote."', '_blank');</script>";
}

elseif(isset($_POST['3rd']))
{
    $encode = urlencode($_POST['url']);

    echo "<script type='text/javascript'>window.open('https://www.google.com/search?q=site:".$encode." intitle:index.of', '_blank');</script>";
}

elseif(isset($_POST['bit']))
{
    $encode = urlencode($_POST['url']);

    $quote = '\"';

    //echo "<script type='text/javascript'>window.open('https://www.google.com/search?q=site%3Aatlassian.net+|+site%3Abitbucket.org+".$quote."".$encode.""$quote"', '_blank');</script>";
}

elseif(isset($_POST['.git']))
{
    $encode = urlencode($_POST['url']);
   
    $quote = '\"';

    echo "<script type='text/javascript'>window.open('https://www.google.com/search?q=inurl:".$quote."/.git ".$quote."".$encode. " -github ', '_blank');</script>";
}

elseif(isset($_POST['traefik']))
{
    $encode = urlencode($_POST['url']);
    
    $quote = '\"';

    echo "<script type='text/javascript'>window.open('https://www.google.com/search?q=intitle:traefik+inurl:8080/dashboard".$quote."".$encode."".$quote."', '_blank');</script>";
}

elseif(isset($_POST['ct']))
{
    $encode = urlencode($_POST['url']);

    echo "<script type='text/javascript'>window.open('https://www.google.com/search?q=site:".$encode." intitle:index.of', '_blank');</script>";
}

elseif(isset($_POST['txt']))
{
    $encode = urlencode($_POST['url']);

    echo "<script type='text/javascript'>window.open('https://www.google.com/search?q=".$encode."/robots.txt', '_blank');</script>";
}

elseif(isset($_POST['headers']))
{
    $encode = urlencode($_POST['url']);

    echo "<script type='text/javascript'>window.open('https://securityheaders.com/?q=".$encode."&followRedirects=on', '_blank');</script>";
}

elseif(isset($_POST['total']))
{
    $encode = urlencode($_POST['url']);

    echo "<script type='text/javascript'>window.open('hhttps://community.riskiq.com/search/".$encode."', '_blank');</script>";
}

elseif(isset($_POST['you']))
{
    $encode = urlencode($_POST['url']);

    echo "<script type='text/javascript'>window.open('https://www.youtube.com/results?search_query=".$encode."', '_blank');</script>";
}

elseif(isset($_POST['cloud']))
{
    $encode = urlencode($_POST['url']);

    echo "<script type='text/javascript'>window.open('https://www.google.com/search?q=site:".$encode." intitle:index.of', '_blank');</script>";
}

elseif(isset($_POST['pass']))
{
    $encode = urlencode($_POST['url']);

    echo "<script type='text/javascript'>window.open('https://www.google.com/search?q=site:".$encode." intitle:index.of', '_blank');</script>";
}

elseif(isset($_POST['eye']))
{
    $encode = urlencode($_POST['url']);

    echo "<script type='text/javascript'>window.open('https://domaineye.com/similar/".$encode."', '_blank');</script>";
}

elseif(isset($_POST['gitlab']))
{
    $encode = urlencode($_POST['url']);

    echo "<script type='text/javascript'>window.open('https://www.google.com/search?q=inurl:gitlab ".$encode."', '_blank');</script>";
}

elseif(isset($_POST['stack']))
{
    $encode = urlencode($_POST['url']);
    
    $quote = '\"';

    echo "<script type='text/javascript'>window.open('https://www.google.com/search?q=site:stackoverflow.com ".$quote."".$encode."".$quote."', '_blank');</script>";
}

elseif(isset($_POST['digi']))
{
    $encode = urlencode($_POST['url']);
   
    $quote = '\"';

    echo "<script type='text/javascript'>window.open('https://www.google.com/search?q=site:digitaloceanspaces.com ".$quote."".$encode."".$quote."', '_blank');</script>";
}

?>

<!doctype html> 
  <html> 

  <head> 

    <meta charset="utf-8"> 


    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>BUG BOUNTY RECON</title> 
    
    <link rel = "icon" href = "img/main.png"
        type = "image/x-icon">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <style>

    .custom
    {
      width: 100%;
      height: 100%;
      font-size: 10px;
    }

    .img
    {
      position: relative;
    }

    .form-text
    {
        width: 100%;

        height: 70%;

        border: solid 2px black;
    }

  </style>

  </head> 

  <body style="background-color: #d9d9d9;"> 

    <div class="container" align="center" style="text-align: justify-all;"> 

     <form method="POST" action="index.php">

       <h1>BUG BOUNTY RECON</h1>
        
       <div class="row">
         
         <div class="col-md-3">
            
            <button type="submit" name="dir" class="custom btn btn-outline-dark btn-sm"><img src="img/icons8-symlink-directory-40.png" /> Directory Listing</button>
    
         </div>

         <div class="col-md-6">
            
            <input class="form-text" type="text" name="url" placeholder="Enter URL!" />
    
         </div>

         <div class="col-md-3">
            
            <button type="submit" name="www" class="custom btn btn-outline-dark btn-sm"><img src="img/icons8-code-40.png" /> SourceCode - PublicWWW</button>
    
         </div>

       </div>
      
       <br/>

       <div class="row">
         
         <div class="col-md-3">
            
            <button type="submit" name="conf" class="custom btn btn-outline-dark btn-sm"><img src="img/icons8-remote-config-40.png" /> Configuration Files</button>
    
         </div>

         <div class="col-md-3">
            
            <button type="submit" name="s3" class="custom btn btn-outline-dark btn-sm"><img src="img/icons8-amazon-s3-40.png" /> s3 Buckets</button>
    
         </div>

         <div class="col-md-3">
            
            <button type="submit" name="cms" class="custom btn btn-outline-dark btn-sm"><img src="img/icons8-joomla-40.png" /> What CMS?</button>
    
         </div>

         <div class="col-md-3">
            
            <button type="submit" name="ip4" class="custom btn btn-outline-dark btn-sm"><img src="img/icons8-web-address-40.png" /> Check in CENSYS [IP4]</button>
    
         </div>

       </div>
      
       <br/>

       <div class="row">
         
         <div class="col-md-3">
            
            <button type="submit" name="db" class="custom btn btn-outline-dark btn-sm"><img src="img/icons8-database-40.png" /> Database Files</button>
    
         </div>

         <div class="col-md-3">
            
            <button type="submit" name="docs" class="custom btn btn-outline-dark btn-sm"><img src="img/icons8-documents-40.png" /> Publicly Exposed Documents</button>
    
         </div>

         <div class="col-md-3">
            
            <button type="submit" name="pastebin" class="custom btn btn-outline-dark btn-sm"><img src="img/icons8-dustbin-40.png" /> Find PasteBin Enteries</button>
    
         </div>

         <div class="col-md-3">
            
            <button type="submit" name="wwm" class="custom btn btn-outline-dark btn-sm"><img src="img/icons8-wordpress-40.png" /> Find Wordpress (Wayback Machine)</button>
    
         </div>

       </div>

       <br/>

       <div class="row">

         <div class="col-md-3">
            
            <button type="submit" name="swf-google" class="custom btn btn-outline-dark btn-sm"><img src="img/icons8-adobe-flash-40.png" /> Find SWF File (Google)</button>
    
         </div>

         <div class="col-md-3">
            
            <button type="submit" name="dms" class="custom btn btn-outline-dark btn-sm"><img src="img/icons8-www-40.png" /> Check in CENSYS [DOMAINS]</button>
    
         </div>
         
         <div class="col-md-3">
            
            <button type="submit" name="word" class="custom btn btn-outline-dark btn-sm"><img src="img/icons8-wordpress-40.png" /> Wordpress</button>
    
         </div>

         <div class="col-md-3">
            
            <button type="submit" name="php" class="custom btn btn-outline-dark btn-sm"><img src="img/icons8-php-logo-40.png" /> phpinfo()</button>
    
         </div>

       </div>

       <br/>

       <div class="row">

         <div class="col-md-3">
            
            <button type="submit" name="link" class="custom btn btn-outline-dark btn-sm"><img src="img/icons8-linkedin-40.png" /> Employees on LINKEDIN</button>
    
         </div>

         <div class="col-md-3">
            
            <button type="submit" name="github" class="custom btn btn-outline-dark btn-sm"><img src="img/icons8-github-40.png" /> Search in GITHUB</button>
    
         </div>

         <div class="col-md-3">
            
            <button type="submit" name="swf-yandex" class="custom btn btn-outline-dark btn-sm"><img src="img/icons8-adobe-flash-40.png" /> Find SWF File (Yandex)</button>
    
         </div>

         <div class="col-md-3">
            
            <button type="submit" name="certs" class="custom btn btn-outline-dark btn-sm"><img src="img/icons8-ssl-40.png" /> Check in CENSYS [CERTS]</button>
    
         </div>
         
       </div>

       <br/>

       <div class="row">

         <div class="col-md-3">
            
            <button type="submit" name="log" class="custom btn btn-outline-dark btn-sm"><img src="img/icons8-log-40.png" /> Log Files</button>
    
         </div>

         <div class="col-md-3">
            
            <button type="submit" name="back" class="custom btn btn-outline-dark btn-sm"><img src="img/icons8-antivirus-40.png" /> Finding Backdoors</button>
    
         </div>

         <div class="col-md-3">
            
            <button type="submit" name="htaccess" class="custom btn btn-outline-dark btn-sm"><img src="img/icons8-symlink-directory-40.png" /> .htaccess Sensitive Files</button>
    
         </div>

         <div class="col-md-3">
            
            <button type="submit" name="openbug" class="custom btn btn-outline-dark btn-sm"><img src="img/icons8-bug-40.png" /> Search in OpenBugBounty</button>
    
         </div>

       </div>
       
       <br/>

       <div class="row">
         
         <div class="col-md-3">
            
            <button type="submit" name="swf-wayback" class="custom btn btn-outline-dark btn-sm"><img src="img/icons8-adobe-flash-40.png" /> Search SWF in Wayback</button>
    
         </div>

         <div class="col-md-3">
            
            <button type="submit" name="shodan" class="custom btn btn-outline-dark btn-sm"><img src="img/icons8-delete-node-40.png" /> Search in Shodan</button>
    
         </div>

         <div class="col-md-3">
            
            <button type="submit" name="old" class="custom btn btn-outline-dark btn-sm"><img src="img/icons8-data-backup-40.png" /> Backup and Old Files</button>
    
         </div>

         <div class="col-md-3">
            
            <button type="submit" name="setup" class="custom btn btn-outline-dark btn-sm"><img src="img/icons8-project-setup-40.png" /> Install/Setup Files</button>
    
         </div>

       </div>

       <br/>

       <div class="row">
         
         <div class="col-md-3">
            
            <button type="submit" name="sub" class="custom btn btn-outline-dark btn-sm"><img src="img/icons8-www-40(1).png" /> Find Subdomains</button>
    
         </div>

         <div class="col-md-3">
            
            <button type="submit" name="reddit" class="custom btn btn-outline-dark btn-sm"><img src="img/icons8-reddit-40.png" /> Search in Reddit</button>
    
         </div>

         <div class="col-md-3">
            
            <button type="submit" name="swf2" class="custom btn btn-outline-dark btn-sm"><img src="img/icons8-adobe-flash-40.png" /> Search in Wayback Machine # 2</button>
    
         </div>

         <div class="col-md-3">
            
            <button type="submit" name="rce" class="custom btn btn-outline-dark btn-sm" data-toggle="tooltip" 
            title='PoC CallExternalMethodActivity x: Name = \"foo\"....System.Diagnostics.Process.Start(\"cmd.exe\", \"/c ping BurpCollabServer]\");private/**void**foobar(){//" />'>
            <img src="img/icons8-microsoft-sharepoint-40.png" /> CVE-2020-0646 SharePoint RCE</button>
    
         </div>

       </div>
       
       <br/>

       <div class="row">
         
         <div class="col-md-3">
            
            <button type="submit" name="login" class="custom btn btn-outline-dark btn-sm"><img src="img/icons8-login-40.png" /> Login Pages</button>
    
         </div>

         <div class="col-md-3">
            
            <button type="submit" name="redirects" class="custom btn btn-outline-dark btn-sm"><img src="img/icons8-remote-config-40.png" /> Open Redirects</button>
    
         </div>

         <div class="col-md-3">
            
            <button type="submit" name="s-sub" class="custom btn btn-outline-dark btn-sm"><img src="img/icons8-www-40(1).png" /> Find Sub-Subdomains</button>
    
         </div>

         <div class="col-md-3">
            
            <button type="submit" name="xml" class="custom btn btn-outline-dark btn-sm"><img src="img/icons8-xml-40.png" /> Test CrossDomain</button>
    
         </div>

       </div>

       <br/>

       <div class="row">
         
         <div class="col-md-3">
            
            <button type="submit" name="swf3" class="custom btn btn-outline-dark btn-sm"><img src="img/icons8-adobe-flash-40.png" /> Search in Wayback Machine # 3</button>
    
         </div>

         <div class="col-md-3">
            
            <button type="submit" name="api" class="custom btn btn-outline-dark btn-sm"><img src="img/icons8-api-40.png" /> API Endpoints - WSDL</button>
    
         </div>

         <div class="col-md-3">
            
            <button type="submit" name="sql" class="custom btn btn-outline-dark btn-sm"><img src="img/icons8-sql-server-40.png" /> SQL Errors</button>
    
         </div>

         <div class="col-md-3">
            
            <button type="submit" name="apache" class="custom btn btn-outline-dark btn-sm"><img src="img/icons8-server-40.png" /> APACHE STRUTS RCE</button>
    
         </div>

       </div>

       <br/>

       <div class="row">
         
         <div class="col-md-3">
            
            <button type="submit" name="word2" class="custom btn btn-outline-dark btn-sm"><img src="img/icons8-wordpress-40.png" /> Find Wordpress # 2</button>
    
         </div>

         <div class="col-md-3">
            
            <button type="submit" name="threat" class="custom btn btn-outline-dark btn-sm"><img src="img/icons8-bug-40.png" /> Check in ThreatCrowd</button>
    
         </div>

         <div class="col-md-3">
            
            <button type="submit" name="reverse" class="custom btn btn-outline-dark btn-sm"><img src="img/icons8-web-address-40.png" /> Reverse IP Lookup</button>
    
         </div>

         <div class="col-md-3">
            
            <button type="submit" name="gist" class="custom btn btn-outline-dark btn-sm"><img src="img/icons8-github-40.png" /> Github GIST searches</button>
    
         </div>

       </div>

       <br/>

       <div class="row">
         
         <div class="col-md-3">
            
            <button type="submit" name="apache-config" class="custom btn btn-outline-dark btn-sm"><img src="img/icons8-server-40.png" /> Apache Config Files</button>
    
         </div>

         <div class="col-md-3">
            
            <button type="submit" name="3rd" class="custom btn btn-outline-dark btn-sm"><img src="img/icons8-third-eye-symbol-40.png" /> 3rd Party Exposure</button>
    
         </div>

         <div class="col-md-3">
            
            <button type="submit" name="bit" class="custom btn btn-outline-dark btn-sm"><img src="img/icons8-bitbucket-40.png" /> Search in BitBucket & Atlassian</button>
    
         </div>

         <div class="col-md-3">
            
            <button type="submit" name=".git" class="custom btn btn-outline-dark btn-sm"><img src="img/icons8-git-40.png" /> .git folder</button>
    
         </div>

       </div>

       <br/>

       <div class="row">
         
         <div class="col-md-3">
            
            <button type="submit" name="traefik" class="custom btn btn-outline-dark btn-sm"><img src="img/icons8-networking-40.png" /> Traefik</button>
    
         </div>

         <div class="col-md-3">
            
            <button type="submit" name="ct" class="custom btn btn-outline-dark btn-sm"><img src="img/icons8-event-log-40.png" /> Search in CT Logs</button>
    
         </div>

         <div class="col-md-3">
            
            <button type="submit" name="txt" class="custom btn btn-outline-dark btn-sm"><img src="img/icons8-documents-40.png" /> Robots.txt file</button>
    
         </div>

         <div class="col-md-3">
            
            <button type="submit" name="headers" class="custom btn btn-outline-dark btn-sm"><img src="img/icons8-cyber-security-40.png" /> Check Security Headers</button>
    
         </div>

       </div>

       <br/>

       <div class="row">
         
         <div class="col-md-3">
            
            <button type="submit" name="total" class="custom btn btn-outline-dark btn-sm"><img src="img/icons8-cyber-security-40.png" /> Passive Total</button>
    
         </div>

         <div class="col-md-3">
            
            <button type="submit" name="you" class="custom btn btn-outline-dark btn-sm"><img src="img/icons8-youtube-40.png" /> Youtube</button>
    
         </div>

         <div class="col-md-3">
            
            <button type="submit" name="cloud" class="custom btn btn-outline-dark btn-sm"><img src="img/icons8-cloud-storage-40.png" /> Cloud Storage and Buckets</button>
    
         </div>

         <div class="col-md-3">
            
            <button type="submit" name="pass" class="custom btn btn-outline-dark btn-sm"><img src="img/icons8-password-40.png" /> Plaintext Password Leak</button>
    
         </div>

       </div>

       <br/>

       <div class="row">
         
         <div class="col-md-3">
            
            <button type="submit" name="eye" class="custom btn btn-outline-dark btn-sm"><img src="img/icons8-eye-40.png" /> DomainEye</button>
    
         </div>

         <div class="col-md-3">
            
            <button type="submit" name="gitlab" class="custom btn btn-outline-dark btn-sm"><img src="img/icons8-gitlab-40.png" /> GitLab</button>
    
         </div>

         <div class="col-md-3">
            
            <button type="submit" name="stack" class="custom btn btn-outline-dark btn-sm"><img src="img/icons8-stack-overflow-40.png" /> Search in StackOverFlow</button>
    
         </div>

         <div class="col-md-3">
            
            <button type="submit" name="digi" class="custom btn btn-outline-dark btn-sm"><img src="img/icons8-switch-host-40.png" /> Digital Ocean Spaces</button>
    
         </div>

       </div>

       <br/>

      

     </form>

    </div> 

  </body> 

  </html>
