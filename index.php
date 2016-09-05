<?php
/**
 * Created by PhpStorm.
 * User: ThinkPad
 * Date: 01/09/2016
 * Time: 11:15
 */
 include_once("controller/NewsletterController.php");
 include_once("core/database.php");

 $newsletterController = new NewsletterController();
 $newsletterController->invoke();
