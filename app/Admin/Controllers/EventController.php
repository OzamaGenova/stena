<?php

namespace App\Admin\Controllers;

use App\Models\Event;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class EventController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Models\Event';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Event);

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
        $show = new Show(Event::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Название'));
        $show->field('date', __('Дата'));
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
        $form = new Form(new Event);

        $form->text('title', __('Название'))->rules('required');
        $form->multipleImage('img', 'Изображения')
            ->options([])
            ->move('Events')
            ->removable()
            ->uniqueName()
            ->rules(function () {
                return 'mimes:jpg,png';
            });

        $form->date('date', __('Дата'));
        $form->ckeditor('description', __('Текст'));

        return $form;
    }
}
