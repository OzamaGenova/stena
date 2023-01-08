<?php

namespace App\Admin\Controllers;

use App\Models\SEO;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class SeoController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Models\SEO';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new SEO);

        $grid->column('id', __('Id'));
        $grid->column('url', __('Url'));
        $grid->column('title', __('Название'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(SEO::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('url', __('Url'));
        $show->field('title', __('Название'));
        $show->field('description', __('Описание'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new SEO);

        $form->text('url', __('Url'))->rules('required');
        $form->text('title', __('Название'))->rules('required');
        $form->textarea('description', __('Описание'));

        return $form;
    }
}
