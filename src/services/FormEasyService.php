<?php
/**
 * Form plugin for Craft CMS 3.x
 *
 * Form
 *
 * @link      https://github.com/phuongit0301
 * @copyright Copyright (c) 2019 phuongpt
 */

namespace formeasy\form\services;

use formeasy\form\Form;

use Craft;
use craft\base\Component;

/**
 * FormEasyService Service
 *
 * All of your plugin’s business logic should go in services, including saving data,
 * retrieving data, etc. They provide APIs that your controllers, template variables,
 * and other plugins can interact with.
 *
 * https://craftcms.com/docs/plugins/services
 *
 * @author    phuongpt
 * @package   Form
 * @since     1.0.0
 */
class FormEasyService extends Component
{
    // Public Methods
    // =========================================================================

    /**
     * This function can literally be anything you want, and you can have as many service
     * functions as you want
     *
     * From any other plugin file, call it like this:
     *
     *     Form::$plugin->formEasyService->exampleService()
     *
     * @return mixed
     */
    public function exampleService()
    {
        $result = 'something';
        // Check our Plugin's settings for `someAttribute`
        if (Form::$plugin->getSettings()->someAttribute) {
        }

        return $result;
    }
}
