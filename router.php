<?php
/**
 * Created by PhpStorm.
 * User: hat.dao
 * Date: 11/1/2014
 * Time: 9:39 AM
 */
session_start();
$host = explode("/",$_SERVER['REQUEST_URI']);
switch($host[1]){
    case '':  // home page
        $_SESSION['locale'] = 'en_US';
        break;
    case 'en':
        $_SESSION['locale'] = 'en_US';
        break;
    case 'jp':
        $_SESSION['locale'] = 'ja_JP';
        break;
    default: // 404 pages
        echo '<center><h1>Page not found!!!</h1><p>You will be redirected to home page in next
            <span style="color:#0a2a49;font-weight:bold;" id="countdown">5</span> second(s).</p></center>';
        echo '
            <script type="text/javascript">
                (function () {
                    var timeLeft = 5,
                        cinterval;

                    var timeDec = function (){
                        timeLeft--;
                        document.getElementById("countdown").innerHTML = timeLeft;
                        if(timeLeft === 0){
                            window.location = "/";
                            clearInterval(cinterval);
                        }
                    };

                    cinterval = setInterval(timeDec, 1000);
                })();
            </script>
            ';
        exit();
        $_SESSION['locale'] = 'en_US';
        break;
}
