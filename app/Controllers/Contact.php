<?php

namespace App\Controllers;

// сюда нужно вписать токен вашего бота
define('TELEGRAM_TOKEN', '5097380476:AAEh9CwEwKI9mclCDuUdJqzzl4iBFydH9Bc');

// сюда нужно вписать ваш внутренний айдишник, свой айдишник в телеграмм
define('TELEGRAM_CHATID', '706281876');

// 559455901 - Ксюша
// 360418950 - Артем
// 706281876 - Леха

class Contact extends BaseController
{
    public function index()
    {
        $request = \Config\Services::request();
        $firstname = $request->getVar('firstname');
        $phone = $request->getVar('phone');
        $message = $request->getVar('message');

        $email = \Config\Services::email();

        $email->setFrom('your@example.com', 'Your Name'); // от кого письмо
        $email->setTo('someone@example.com'); // абонент
        $email->setCC('another@another-example.com'); // копия письма
        $email->setBCC('them@their-example.com'); // скрытая копию

        $email->setSubject('Запрос на консультацию');
        $email_message = 'Пользователь ' . $firstname . ' запрашивает консультацию по телефону ' . $phone . ' ' . $message;
        $email->setMessage($message);

        $email->send();

        $this->message_to_telegram($email_message);
    }

    function message_to_telegram($text)
    {
        $ch = curl_init();
        curl_setopt_array(
            $ch,
            array(
                CURLOPT_URL => 'https://api.telegram.org/bot' . TELEGRAM_TOKEN . '/sendMessage',
                CURLOPT_POST => TRUE,
                CURLOPT_RETURNTRANSFER => TRUE,
                CURLOPT_TIMEOUT => 10,
                CURLOPT_POSTFIELDS => array(
                    'chat_id' => TELEGRAM_CHATID,
                    'text' => $text,
                ),
            )
        );
        curl_exec($ch);
    }
}
