<?php

declare(strict_types=1);

namespace DefaultBundle\Controller;

use ZeroBundle\Bundle\Controller;
use ZeroBundle\Bundle\Responses\Response;
use ZeroBundle\Bundle\Responses\Types\Json;

/**
 * @Route("/", name="Default Controller")
 */
class DefaultController extends Controller {

    /**
     * @Route("/", name="HelloWord test")
     * @Method({"GET"})
     */
    public function DashboardAction() {
        //$page = new PhpEcho([__DIR__, '.. View Layout.php'], ['body' => new PhpEcho([realpath(__DIR__), '.. View Dashboard.php'])]);
        $this->setResponse(new Response("hello word", ['HTTP/1.0 200']));
    }

}
