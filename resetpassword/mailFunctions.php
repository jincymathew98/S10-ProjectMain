<?php

function current_time()
{
        $date = date_create();
        return date_format($date, 'Y-m-d G:i:s');
}
function current_new_time()
{
        $date = date_create();
        date_add($date, date_interval_create_from_date_string('5 minutes'));
        return date_format($date, 'Y-m-d G:i:s');
}

function sendmail($to, $subject, $content){
        return mail(
                $to,
                $subject,
                wordwrap($content, 70),
                "From: jincymathew147@gmail.com"."\r\n".
                "Reply-To: jincymathew@mca.ajce.in"."\r\n".
                "X-Mailer: PHP/".phpversion()
        );
}

// send email
// $result = mail("jincymathew@mca.ajce.in","My subject",$msg, "From: jincymathew147@gmail.com"."\r\n".
//         "Reply-To: jincymathew147@gmail.com"."\r\n".
//         "X-Mailer: PHP/". phpversion()
// );
?>