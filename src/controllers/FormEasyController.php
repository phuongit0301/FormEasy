<?php
/**
 * Form plugin for Craft CMS 3.x
 *
 * Form
 *
 * @link      https://github.com/phuongit0301
 * @copyright Copyright (c) 2019 phuongpt
 */

namespace formeasy\form\controllers;

use formeasy\form\Form;

use Craft;
use craft\web\Controller;

/**
 * FormEasy Controller
 *
 * Generally speaking, controllers are the middlemen between the front end of
 * the CP/website and your plugin’s services. They contain action methods which
 * handle individual tasks.
 *
 * A common pattern used throughout Craft involves a controller action gathering
 * post data, saving it on a model, passing the model off to a service, and then
 * responding to the request appropriately depending on the service method’s response.
 *
 * Action methods begin with the prefix “action”, followed by a description of what
 * the method does (for example, actionSaveIngredient()).
 *
 * https://craftcms.com/docs/plugins/controllers
 *
 * @author    phuongpt
 * @package   Form
 * @since     1.0.0
 */
class FormEasyController extends Controller
{

    // Protected Properties
    // =========================================================================

    /**
     * @var    bool|array Allows anonymous access to this controller's actions.
     *         The actions must be in 'kebab-case'
     * @access protected
     */
    protected $allowAnonymous = ['index', 'do-something'];

    // Public Methods
    // =========================================================================

    /**
     * Handle a request going to our plugin's index action URL,
     * e.g.: actions/form/form-easy
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $result = 'Welcome to the FormEasyController actionIndex() method';

        return $result;
    }

    /**
     * Handle a request going to our plugin's actionDoSomething URL,
     * e.g.: actions/form/form-easy/do-something
     *
     * @return mixed
     */
    public function actionDoSomething()
    {
        $result = 'Welcome to the FormEasyController actionDoSomething() method';

        return $result;
    }
}
