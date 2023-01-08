<?php

namespace App\Admin\Controllers;

use App\Models\Catalog;
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
        $grid->column('brand', __('Бренд'));

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
        $show->field('title', __('Title'));
        $show->field('catalog_id', __('Catalog id'));
        $show->field('code', __('Code'));
        $show->field('brand', __('Brand'));
        $show->field('series', __('Series'));
        $show->field('description', __('Description'));
        $show->field('specifications', __('Specifications'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

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
        $form->select('catalog_id', trans('Категория'))->options(Catalog::selectOptions())->rules('required');
        $form->multipleImage('img', 'Изображения')
            ->options([])
            ->move('products')
            ->removable()
            ->uniqueName()
            ->rules(function () {
                return 'mimes:jpg,png';
            });
        $form->text('code', __('Артикул'));
        $form->text('brand', __('Бренд'));
        $form->text('series', __('Серия'));
        $form->textarea('short_description', __('Краткое описание'));
        $form->ckeditor('description', __('Описание'));
        $form->textarea('specifications', __('Хар-ки'));

        return $form;
    }
}
