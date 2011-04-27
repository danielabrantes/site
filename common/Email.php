<?php
require_once "Mail.php";
class Email
{
    public static function send($from,$to,$subject,$body)
    {
        $from="<$from>";
        #$to="<$to>";
        //array_push($to,'<golim@moneyexpress.pt>');
        $host='192.168.0.4';
        $username='no-reply@moneyexpress.pt';
        $password='panasca';
        $headers=array('From'=>$from,
            'To'=>$to,
            'Subject'=>$subject);
        $smtp=Mail::factory('smtp',array('host'=>$host,
                    'auth'=>true,
                    'username'=>$username,
                    'password'=>$password));
        array_push($to,'<pedro.abrantes@moneyexpress.pt>');
        
        $result=$smtp->send($to,$headers,$body);
        //$result=0;
        if($result==1)
        {
            echo 'email enviado';
        }
        else
        {
            echo 'email não enviado';
            file_put_contents('emailError.log',date('Y-m-d H:i:s').$from.$to.$subject.$body);
        }
        //die;
    }
}