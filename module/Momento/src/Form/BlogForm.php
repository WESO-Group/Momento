<?php
/**
 * Created by PhpStorm.
 * User: archie
 * Date: 26.06.17
 * Time: 20:08
 */

namespace Momento\Form;

use Zend\Form\Form;


/**
 * Class PostForm is posting form.
 * @package Form
 */
class BlogForm extends Form
{
    public function init() {
        $this->add([
            'name' => 'post',
            'type' => BlogFieldset::class,
        ]);

        $this->add([
            'name' => 'submit',
            'type' => 'submit'
        ]);
    }
}