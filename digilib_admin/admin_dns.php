<?
//settings
$dns_url[0]=array("count"=>"1");
$dns_url[1]=array("addr"=>"http:salserver.strangled.net", "update"=>"https://freedns.afraid.org/dynamic/update.php?ZE8weFhkUDgwVTI1bzVTSmZTWWo6MTQxNjY1Mjk=");
if( $SERVER['SERVER_ADDR'] = "127.0.0.1"){
    
echo '
<!DOCTYPE html>
<html>
    <head>
        <title>DIGILIB | ADMIN PANEL</title>
    </head>
    <body>
        <h1>DIGILIB ADMIN PANEL 2.1.0</h1>
        <hr>
        <div class="main">
            <div class="stats">';
    
    echo 'curr-ip('.file_get_contents("http://phihag.de/ip/").'); cur-dns('.$dns_url[1]['addr'].')';
    
    echo '</div>
        
            <div class="sidebar">
                <div class="sql_tables"></div>
                <iframe id="upd_dns_mpag" class="updateDNS" src="update.html"></iframe>
            </div>
            
            
            <iframe class="website" src="http://digilib_net_master.local"></iframe>
            
            
            <div class="logs"></div><div class="user_loggedin"></div>
        </div>
        <hr>
        <h4>Designed and Developed by Sal64dd</h4>
        <style>
            html,body{
                background: #181818;
                color: #00ff00;
                font-family: monospace;
            }
            iframe{
                background: #fff;
                color: #000;
                font-family: sans-serif;
            }
            .sidebar .updateDNS{
                positon: relative;
                display: block; width: calc(100% - 5px);
                border: dashed 1px white;
                height: 80px;
                margin-right:5px;
                margin-top:10px;
            }
            .sidebar .sql_tables{
                positon: relative;
                display: block; width: calc(100% - 5px);
                border: dashed 1px white;
                height: 305px;
                margin-right:5px;
            }
            .sidebar{
                positon: relative;
                display: inline-block; width:calc(100% - 70% - 10px);
                border-right: solid 1px white; 
                height: 400px;
                margin: 5px;
                margin-right:0;
                padding-right:5px;
            }
            .website{
                positon: relative;
                display: inline-block; width:calc(100% - 30% - 22px);
                border: dashed 1px white; 
                height: 400px;
                margin: 5px;
            }
            .stats{
                positon: relative;
                display: block; width: auto;
                border: dashed 1px white;
                height: 40px;
                margin: 5px;
            }
            .logs{
                positon: relative;
                display: inline-block; width:calc(100% - 30% - 10px);
                border: dashed 1px white; 
                height: 130px;
                margin: 5px;
            }
            .user_loggedin{
                positon: relative;
                display: inline-block; width:calc(100% - 70% - 15px);
                border: dashed 1px white; 
                height: 130px;
                margin: 5px;
            }
        </style>
    </body>
</html>
';
    }
?>