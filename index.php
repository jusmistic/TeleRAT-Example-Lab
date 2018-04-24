<?php
$ip = $_POST['ip'];
$output = shell_exec('ping -c 1'.$ip);
?>


<html>
    <head>
        <title>ComPro: Demo</title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
        <style>
            body{
                padding: 0px;
                margin: 0px;
                font-family: 'Muli', sans-serif;
                /* background: #e9e9e9; */
                background: #08b8d3;
            }
            h1{
                font-size: 62px;
                text-shadow: 3px 3px 0px #000000;
            }
            .top{
                text-align: center;
                padding: 30px;
                color: #ffffff;
                /* background: linear-gradient(90deg, rgba(20,88,124,1) 0%, rgba(0,212,255,1) 100%); */
                background: #08b8d3;
            }
            .output-box{
                width: 800px;
                margin: 20px auto;
                background: #b5b5b5;
                color: #242424;
                padding: 20px;
                border: 1px solid #000000;
                border-radius: 3px;
                font-family: monospace;
                text-align: left;
                min-height: 250px;
            }
            .container{
                width: 1200px;
                margin: auto;
            }
            .card{
                background: #FFFFFF;
                border-radius: 3px;
                padding: 20px;
                margin: 20px;
                box-shadow: 1px 1px 5px 1px rgba(0, 0, 0, 0.2);
            }
            .bottom{
                text-align: center;
            }
            .input-text{
                padding: 15px 25px;
                border: none;
                font-size: 21px;
            }
            .input-submit{
                padding: 15px;
                border: none;
                background: #129e2e;
                color: #FFFFFF;
                font-size: 21px;
            }
        </style>
    </head>
    <body>
        <div class="top">
            <h1>Ping tool</h1>
            <div class="input-box">
                <form method="post">
                    <input type="text" name="ip" placeholder="Input an IP."class="input-text">
                    <input type="submit" class="input-submit" value="submit">
                </form>
            </div>
        </div>
        <div class="bottom">
            <div class="container">
                <div class="card">
                    <h3>Output</h3>
                    <div class="output-box">
                        <php?
                            echo "$output";
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
