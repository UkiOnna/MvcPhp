<?php

use Core\Helpers;
use Klein\Klein;

final class App
{
    public function __construct()
    {
        $this->initRouter();
    }

    private function initRouter()
    {
        include Helpers::path("app", "routing", "web.php");
    }
}