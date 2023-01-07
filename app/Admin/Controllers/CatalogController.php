<?php

namespace App\Admin\Controllers;

use App\Models\Catalog;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use Encore\Admin\Show;
use Encore\Admin\Tree;
use Encore\Admin\Widgets\Box;

class CatalogController extends AdminController
{
    use HasResourceActions;

    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Models\Catalog';

    public function index(Content $content)
    {
        return $content->row(function (Row $row) {
                $row->column(6, $this->treeView()->render());

                $row->column(6, function (Column $column) {
                    $form = new \Encore\Admin\Widgets\Form();
                    $form->action(admin_base_path('editor/catalogs'));


                    $form->select('parent_id', trans('admin.parent_id'))->options(Catalog::selectOptions());
                    $form->text('title', trans('admin.title'))->rules('required');
                    $form->text('slug', trans('admin.slug'))->rules('required');


                    $form->hidden('_token')->default(csrf_token());

                    $column->append((new Box(trans('admin.new'), $form))->style('success'));
                });
            });
    }

    /**
     * @return \Encore\Admin\Tree
     */
    protected function treeView()
    {
        return Catalog::tree(function (Tree $tree) {
            $tree->disableCreate();

            $tree->branch(function ($branch) {
                return "<strong>{$branch['title']}</strong>&nbsp;&nbsp;&nbsp;<a>/{$branch['slug']}</a>";
            });
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    public function form()
    {
        $form = new Form(new Catalog());

        $form->display('id', 'ID');

        $form->select('parent_id', trans('admin.parent_id'))->options(Catalog::selectOptions());
        $form->text('title', trans('admin.title'))->rules('required');
        $form->text('slug', trans('admin.slug'))->rules('required');

        $form->display('created_at', trans('admin.created_at'));
        $form->display('updated_at', trans('admin.updated_at'));

        return $form;
    }
}