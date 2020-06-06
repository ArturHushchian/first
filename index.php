<?php
    $timeZone = new DateTimeZone('Europe/Kiev');
    $dateObject = new DateTime();

    $dateObject->setTimezone($timeZone);



     echo 'good morning, time is ' .  $dateObject->format('H:i:s');