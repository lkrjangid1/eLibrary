<?php
error_reporting(E_ALL);
//admin page

//functions
function prt_html(){
    echo '
        <!DOCTYPE html>
        <html>
            <head>
                <title>DIGILIB | ADMIN PANEL</title>
            </head>
            <body>
                <h1>DIGILIB ADMIN PANEL 6.58.16Wc</h1>
                <hr>
                <div class="main">
                    <div class="stats">
                </div>

                    <hr>

                    <div class="sidebar">
                        <div class="sql_tables"></div>
                        <hr>
                        <div class="objectBrew">
                        </div>
                    </div>
                    <div class="mainwin">
                    ';
    
    
    
    echo'
                    </div>

                    <hr>

                    <div class="logs"></div><div class="user_loggedin"></div>
                </div>
                <hr>
                <h4>Designed and Developed by Sal64dd</h4>
                ';
}
function prt_style(){ echo'
            <style>
                html,body{
                    background: #181818;
                    color: #00ff00;
                    font-family: monospace;
                }
                .sidebar .objectBrew{
                    positon: relative;
                    display: block; width: calc(100% - 5px);
                    height: 80px;
                    margin-right:5px;
                    margin-top:10px;
                }
                .sidebar .sql_tables{
                    positon: relative;
                    display: block; width: calc(100% - 5px);
                    height: 305px;
                    margin-right:5px;
                }
                .sidebar{
                    positon: relative;
                    display: inline-block; width:calc(100% - 80% - 10px);
                    border-right: solid 1px white; 
                    height: 400px;
                    margin: 5px;
                    margin-right:0;
                    padding-right:5px;
                }
                .mainwin{
                    positon: relative;
                    display: inline-block; width:calc(100% - 20% - 22px);

                    height: 400px;
                    margin: 5px;
                }
                .stats{
                    positon: relative;
                    display: block; width: auto;

                    height: 20px;
                    margin: 5px;
                }
                .logs{
                    positon: relative;
                    display: inline-block; width:calc(100% - 30% - 10px);

                    height: 130px;
                    margin: 5px;
                }
                .user_loggedin{
                    positon: relative;
                    display: inline-block; width:calc(100% - 70% - 15px);

                    height: 130px;
                    margin: 5px;
                }
            </style>
        </body>
    </html>
    ';
}
//function fcall(){}

//menu
//div_menu[0] = array("Save","Link","fcall");
//div_menu[1] = array("Load","Link","fcall");
//div_menu[2] = array("Discard","Link","fcall");
//div_menu[3] = array("Publish","Link","fcall");

//div_object[][];
//div_display[][];

//prt_html();
//prt_style();

$to = 'sal.uncd@gmail.com';
    $subject = 'Hello from XAMPP!';
    $message = 'This is a test';
    if (mail($to, $subject, $message)) {
        echo "SUCCESS"; 
    } 
    else {
        echo "ERROR"; 
    }

?>