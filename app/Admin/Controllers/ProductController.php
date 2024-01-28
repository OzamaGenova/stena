<?php

namespace App\Admin\Controllers;

use App\Models\ProductCatalog;
use App\Models\Product;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProductController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Models\Product';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Product);

        $grid->column('id', __('Id'));
        $grid->column('title', __('Название'));
        $grid->column('code', __('Артикул'));

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
        $show = new Show(Product::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Название'));
        $show->field('catalog_id', __('Категория id'));

        $show->field('volume', __('Объём'));
        $show->field('code', __('Артикул'));
        $show->field('consumption', __('Расход'));
        $show->field('drying_time', __('Время высыхания'));
        $show->field('applying', __('Нанесение'));
        $show->field('possible_volume', __('Возможный объём'));
        $show->field('fire_resistance', __('Огнестойкость'));
        $show->field('colored', __('Колеруется'));

        $show->field('short_description', __('Краткое описание'));
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
        $form = new Form(new Product);

        $form->text('title', __('Название'))->rules('required');
        $form->select('catalog_id', trans('Категория'))->options(ProductCatalog::selectOptions())->rules('required');
        $form->multipleImage('img', 'Изображения')
            ->options([])
            ->move('products')
            ->removable()
            ->uniqueName()
            ->rules(function () {
                return 'mimes:jpg,png';
            });

        $form->text('volume', __('Объём'));
        $form->text('code', __('Артикул'));
        $form->text('consumption', __('Расход ФОРМАТ СТРОГО *л / *м², ОТ ЭТОГО ЗАВИСИТ РАБОТА КАЛЬКУЛЯТОРА'));
        $form->text('drying_time', __('Время высыхания'));
        $form->text('applying', __('Нанесение'));
        $form->text('possible_volume', __('Возможный объём'));
        $form->text('fire_resistance', __('Огнестойкость'));
        $form->text('colored', __('Колеруется'));

        $form->textarea('short_description', __('Краткое описание'));
        $form->ckeditor('description', __('Описание'));

        return $form;
    }
}
