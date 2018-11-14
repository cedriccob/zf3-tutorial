<?php
/**
 * Created by IntelliJ IDEA.
 * User: cedri
 * Date: 13/11/2018
 * Time: 19:47
 */

namespace Album\Form;


use Zend\Form\Form;

class AlbumForm extends Form
{
    public function __construct($name = null)
    {
        parent::__construct('album');

        $this->add([
            'name'=>'id',
            'type'=>'hidden',
        ]);

        $this->add([
            'name'=>'title',
            'type'=>'text',
            'options' => [
                'label' => 'Title',
            ],
        ]);

        $this->add([
            'name'=>'artist',
            'type'=>'text',
            'options'=>[
                'label'=>'Title',
            ],
        ]);

        $this->add([
            'name'=>'submit',
            'type'=>'submit',
            'attributes' => [
                'value' => 'Go',
                'id' => 'submitbutton',
            ],
        ]);
    }

}