<?php
// Copyright 1999-2022. Plesk International GmbH. All rights reserved.
/**
 * Apache web server service interface
 * @since 18.0
 */
class pm_WebServer_Apache extends pm_WebServer_Abstract implements pm_WebServer_Interface
{

    public function __construct() { }

    public function isEnabled(): bool { }

    public function isRunning(): bool { }

}
