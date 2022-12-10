<?php
namespace Luminous\Notification;

use Dotenv\Dotenv;
use Minishlink\WebPush\WebPush;

class PushNotification extends WebPush
{
    private string $publicKey;
    private string $privateKey;

    public function __construct(array $auth = [], array $defaultOptions = [], ?int $timeout = 30, array $clientOptions = [])
    {
        $dotenv = new Dotenv(__DIR__.'/../../');
        $dotenv->load();
        $this->publicKey = getenv('VAPID_PUBLIC_KEY');
        $this->privateKey = getenv('VAPID_PRIVATE_KEY');

        $auth = array(
            'VAPID' => array(
                'subject' => 'https://github.com/Minishlink/web-push-php-example/',
                'publicKey' => $this->publicKey,
                'privateKey' => $this->privateKey
            ),
        );
        parent::__construct($auth, $defaultOptions, $timeout, $clientOptions);
    }
}