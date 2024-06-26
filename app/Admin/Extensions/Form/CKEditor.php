<?php

namespace App\Admin\Extensions\Form;

use Encore\Admin\Form\Field;

class CKEditor extends Field
{
    public static $js = [
        'https://istu.ru/packages/ckeditor/ckeditor.js',
        'https://istu.ru/packages/ckeditor/adapters/jquery.js',
    ];

    protected $view = 'admin.ckeditor';

    public function render()
    {
        $this->script = "$('textarea.{$this->getElementClassString()}').ckeditor();";

        return parent::render();
    }
}