<?php

/**
 * Created by PhpStorm.
 * User: ThinkPad
 * Date: 01/09/2016
 * Time: 11:17
 */

include_once("model/NewsletterSubscription.php");

class NewsletterController {

//    public $model;

    public function __construct()
    {
//        $this->model = new Model();

    }

    public function invoke()
    {
        $nameErr = $emailErr = "";
        if(isset($_POST['name']) && isset($_POST['email'])) {
            $name = trim($_POST["name"]);
            $email = trim($_POST["email"]);

            if (empty($name)) {
                $nameErr = "Name is required!";
            }

            if (empty($email)) {
                $emailErr = "E-mail is required!";
            } else {
                $newsletter = NewsletterSubscription::findByEmail($email);
                if($newsletter) {
                    $emailErr = "Already exists a subscription for this E-mail!";
                }
            }

            if (($nameErr != '') || ($emailErr != '')) {
                include 'view/form_newsletter_subscription.php';
            } else {
                $newsletterSubscription = new NewsletterSubscription();
                $newsletterSubscription->setName($name);
                $newsletterSubscription->setEmail($email);
                if (NewsletterSubscription::insert($newsletterSubscription)) {
                    $msg = 'Newsletter subscription created succesfully!';
                } else {
                    $msg = 'Failed to create Newsletter subscription!';
                }
                include 'view/result_subscription.php';
            }
        } else {
            $name = $email = "";
            include 'view/form_newsletter_subscription.php';
        }
    }
}