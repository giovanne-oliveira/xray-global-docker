<?php
use Spatie\Ray\Ray;
use Spatie\Ray\Settings\SettingsFactory;

require_once __DIR__ . "/vendor/autoload.php";


$settings = SettingsFactory::createFromArray([
    /*
     *  The host used to communicate with the Ray app.
     */
    'host' => 'host.docker.internal',

    /*
     *  The port number used to communicate with the Ray app.
     */
    'port' => 23517,

    /*
     *  Absolute base path for your sites or projects in Homestead, Vagrant, Docker, or another remote development server.
     */
    'remote_path' => '/www',

    /*
     *  Absolute base path for your sites or projects on your local computer where your IDE or code editor is running on.
     */
    'local_path' => null,
]);

$ray = new Ray($settings);

$ray->enable();