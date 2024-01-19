<?php

namespace App\Admin\Controllers;

use App\Models\Solution;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class SolutionController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Models\Solution';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Solution);

        $grid->column('id', __('Id'));
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
        $show = new Show(Solution::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Название'));
        $show->field('short_description', __('Короткий текст'));
        $show->field('description', __('Текст'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Solution);

        $form->text('title', __('Название'))->rules('required');
        $form->multipleImage('img', 'Изображения')
            ->options([])
            ->move('solutions')
            ->removable()
            ->uniqueName()
            ->rules(function () {
                return 'mimes:jpg,png';
            });

        $form->textarea('short_description', __('Короткий текст'));
        $form->ckeditor('description', __('Текст'));

        return $form;
    }
}
