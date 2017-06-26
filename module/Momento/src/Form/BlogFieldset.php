<?php
/**
 * Created by PhpStorm.
 * User: archie
 * Date: 26.06.17
 * Time: 19:50
 */

namespace Momento\Form;

use Zend\Form\Fieldset;

/**
 * Class PostFieldset represents a posting fieldset
 * using in creating, editing blog items "posts".
 *
 * @package Momento\Form
 */
class BlogFieldset extends Fieldset
{
    public function init() {

        // Hidden id of a post
        $this->add([
            'name' => 'id',
            'type' => 'hidden'
        ]);

        $this->add([
            'name' => 'title',
            'type' => 'text'
        ]);

        $this->add([
            'name' => 'text',
            'type' => 'textarea'
        ]);
    }
}