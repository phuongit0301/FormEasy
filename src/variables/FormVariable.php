<?php
/**
 * Form plugin for Craft CMS 3.x
 *
 * Form
 *
 * @link      https://github.com/phuongit0301
 * @copyright Copyright (c) 2019 phuongpt
 */

namespace formeasy\form\variables;

use formeasy\form\Form;

use Craft;

/**
 * Form Variable
 *
 * Craft allows plugins to provide their own template variables, accessible from
 * the {{ craft }} global variable (e.g. {{ craft.form }}).
 *
 * https://craftcms.com/docs/plugins/variables
 *
 * @author    phuongpt
 * @package   Form
 * @since     1.0.0
 */
class FormVariable
{
    // Public Methods
    // =========================================================================

    /**
     * Whatever you want to output to a Twig template can go into a Variable method.
     * You can have as many variable functions as you want.  From any Twig template,
     * call it like this:
     *
     *     {{ craft.form.exampleVariable }}
     *
     * Or, if your variable requires parameters from Twig:
     *
     *     {{ craft.form.exampleVariable(twigValue) }}
     *
     * @param null $optional
     * @return string
     */
    public function exampleVariable($optional = null)
    {
        $result = "And away we go to the Twig template...";
        if ($optional) {
            $result = "I'm feeling optional today...";
        }
        return $result;
    }
}
