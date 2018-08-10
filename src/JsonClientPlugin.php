<?php

/**
 * Craft jsonclient plugin
 *
 * @author    dolphiq
 * @copyright Copyright (c) 2017 dolphiq
 * @link      https://dolphiq.nl/
 */

namespace jaybox325\jsonclient;

use Craft;
use craft\base\Plugin;
use jaybox325\jsonclient\twigextensions\JsonClientTwigExtension;

class JsonClientPlugin extends \craft\base\Plugin
{
    public static $plugin;

    public $hasCpSettings = false;

    // table schema version
    public $schemaVersion = '1.0.0';

    public function init()
    {
        parent::init();

        self::$plugin = $this;

        Craft::$app->view->twig->addExtension(new JsonClientTwigExtension());

        Craft::info('jaybox325/jsonclient plugin loaded', __METHOD__);
    }
}
