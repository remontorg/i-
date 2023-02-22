<?php
    $bytehandId = 16787;
    $bytehandKey = "800D1468DF14EF09";
    $bytehandFrom = "vzlomzamkov";
    function sendSMS($to, $text)
    {
        global $bytehandId;
        global $bytehandKey;
        global $bytehandFrom;

        $result = @file_get_contents('http://bytehand.com:3800/send?id='.$bytehandId.'&key='.$bytehandKey.'&to='.urlencode($to).'&from='.urlencode($bytehandFrom).'&text='.urlencode($text));
        if ($result === false)
            return false;
        else
            return true;
    }

    function point_url($number)
    {
    	if(is_front_page()) {
    		if($number == 1){
    			echo '<a class="secret" href="http://vzlom-zamkov27.ru/ssy-lki/">.</a>';
    		} else if($number == 2){
    			echo '<a class="secret" href="http://vzlom-zamkov27.ru/ssy-lki-na-nas/">.</a>';
    		}
    	}
    	else
    	{
    		echo '.';
    	}
    }
?>