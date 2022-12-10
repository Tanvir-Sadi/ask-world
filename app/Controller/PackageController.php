<?php

namespace App\Controller;

use App\Model\User;
use Luminous\Notification\Notification;
use Luminous\Request\Request;
use Luminous\View\View;
use Luminous\Controller\Controller;
use Minishlink\WebPush\Subscription;
use Minishlink\WebPush\WebPush;
use Stripe\StripeClient;


class PackageController extends Controller
{

    private StripeClient $stripe;

    public function __construct()
    {
        $this->stripe = new StripeClient('sk_test_51M8NJSE2z3vC17OQhRnhiS4hUN6pID50YcRnyop7zncnbL8MAq0wsJOTqDH25zJVDfXyZiOAOMuckgr2zs9gnWK100qMMNRvB3');
    }

    public function index(){
        loggedIn();
        View::call('package.index', null,'app');
    }

    public function store(){
        loggedIn();
        $user = new User();
        $request = new Request();

        if(auth()->customer_id==""){
            $customer=$this->stripe->customers->create(
                [
                    'name' => auth()->name,
                    'email' => auth()->email,
                    'payment_method' => 'pm_card_visa',
                    'invoice_settings' => ['default_payment_method' => 'pm_card_visa'],
                    'metadata' => ["user_id" => auth()->id]
                ]
            );
            $stmt = $user->prepare("UPDATE user set customer_id = :customer_id where id=".auth()->id);
            $stmt->execute(['customer_id'=>$customer->id]);
        }

        $response = $this->stripe->subscriptions->create([
            'customer' => auth()->customer_id,
            'items' => [
                [
                    'price' => $request->priceId
                ],
            ],
        ]);
        header('Location: /', true, 303);
    }

    public function create(){
        loggedIn();
        View::call('question.create',null,'app');
    }

    public function history(){
        loggedIn();
        $histories = null;
        if (auth()->customer_id)
            $histories = $this->stripe->subscriptions->all(['customer'=> auth()->customer_id]);
        View::call('package.history',compact('histories'),'app');
    }

    public function webhook(){
        $notification = new Notification();
        $notification->sendNotifications();

//        $subscription = Subscription::create(json_decode(file_get_contents('php://input'), true));
//
//        $auth = array(
//            'VAPID' => array(
//                'subject' => 'https://github.com/Minishlink/web-push-php-example/',
//                'publicKey' => 'BNM_Z-BptwxKRu0KWtZ6OT0anYfHJHVMPLKlCV0NWvY8uv400LL2z1HUqABCwL0lfL17E75zL4LFFhGomTKlank',
//                'privateKey' => 'Ad9tG3dSHODqMDsCFVJ5m-lZnz5tV0lEJp1bDCLUqJc'
//            ),
//        );
//
//        $webPush = new WebPush($auth);
//
//        $report = $webPush->sendOneNotification(
//            $subscription,
//            "Hello Dear! 👋"
//        );
//
//// handle eventual errors here, and remove the subscription from your server if it is expired
//        $endpoint = $report->getRequest()->getUri()->__toString();
//
//        if ($report->isSuccess()) {
//            echo "[v] Message sent successfully for subscription {$endpoint}.";
//        } else {
//            echo "[x] Message failed to sent for subscription {$endpoint}: {$report->getReason()}";
//        }
    }
}