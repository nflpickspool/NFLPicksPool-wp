<?php
$host_name = 'db702351851.db.1and1.com';
$database = 'db702351851';
$user_name = 'dbo702351851';
$password = 'Youbestn0tmiss!';

$connect = mysqli_connect($host_name, $user_name, $password, $database);
mysqli_query($connect, "INSERT INTO `Odds` (`ID`,`Date`,`Time`,`Away`,`Home`,`Favorite`,`Spread`,`ML`) VALUES (NULL, '2017-10-15', CURRENT_DATE(), 'Kac', 'NEW', 'NEW', '-9', '-4')");

/*
if($_POST[submit])
    {
     foreach ($_POST['Date'] as $key => $value) 
        {
            $date 	= $_POST["date"][$key];
            $time 	= $_POST["time"][$key];
            $away 	= $_POST["away"][$key];
            $home 	= $_POST["home"][$key];
            $favorite 	= $_POST["favorite"][$key];
            $spread 	= $_POST["spread"][$key];
            $ml 	= $_POST["ml"][$key];

            //$sql = mysql_query("insert into your_table_name values ('','$item', '$price', '$qty')");
	    //$sql = mysqli_query($connect, "INSERT INTO `Odds` (`Date`,`Time`,`Away`,`Home`,`Favorite`,`Spread`,`ML`) VALUES ('$date','$time','$away','$home','$favorite','$spread','$ml')"); //SQL query
	$sql = 
	//INSERT INTO `db702351851`.`Odds` (`ID`, `Date`, `Time`, `Away`, `Home`, `Favorite`, `Spread`, `ML`) VALUES (NULL, '2017-10-15', CURRENT_DATE(), 'Kac', 'NEW', 'NEW', '-9', '-4');
        
        }

    }
*/
Print 'Odds written to DB'

?>
