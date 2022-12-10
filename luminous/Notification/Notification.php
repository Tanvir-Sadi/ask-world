<?php

namespace Luminous\Notification;

use Luminous\Model\Model;
use Minishlink\WebPush\Subscription;

class Notification extends Model
{
    private $subscription;

    public function make($title, $body, $notficable_class=null)
    {
        $attributes=[
            'title' => $title,
            'body'  => $body,
        ];
        if ($notficable_class){
            $attributes['notificable_id'] = $notficable_class->id;
            $attributes['notificable_type'] = get_class($notficable_class);
        }
        return $this->create($attributes);
    }

    public function sendNotifications(){
        $this->subscription = Subscription::create(json_decode(file_get_contents('php://input'), true));
        $pushNotification = new PushNotification();

        $notifications = $this->query("SELECT * FROM notification WHERE notificable_id = ".auth()->id)->fetchAll();


        foreach ($notifications as $notification) {
            $pushNotification->queueNotification($this->subscription,$notification->body);
        }

        /**
         * Check sent results
         * @var MessageSentReport $report
         */
        foreach ($pushNotification->flush() as $report) {
            $endpoint = $report->getRequest()->getUri()->__toString();

            if ($report->isSuccess()) {
                echo "[v] Message sent successfully for subscription {$endpoint}.";
            } else {
                echo "[x] Message failed to sent for subscription {$endpoint}: {$report->getReason()}";
            }
        }

    }

}