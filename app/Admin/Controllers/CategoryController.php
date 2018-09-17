<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\ACategory;
use App\Category;
use Encore\Admin\Form;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use Encore\Admin\Controllers\ModelForm;
use Encore\Admin\Tree;


class CategoryController extends Controller
{
    use ModelForm;



    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {
            $content->header('Categories');
            $content->row(function(Row $row) {
                //$row->column(6, ACategory::tree());
                $row->column(6, $this->treeView()->render());
                $row->column(6, $this->form());
            });
        });

    }

/*    public function show($id)
    {
        return redirect()->route('categories.edit', ['id' => $id]);
    }*/

    protected function treeView()
    {
        return ACategory::tree(function (Tree $tree) {
            $tree->disableCreate();
            $tree->disableSave();
            });

    }


    public function edit($id)
    {

        return Admin::content(function (Content $content) use ($id) {
            $content->header('header');
            $content->description('description');
            $content->body($this->form()->edit($id));
        });
    }

    public function create()
    {

        return Admin::content(function (Content $content) {

            $content->header('header');
            $content->description('description');
            $content->body($this->form());
        });
    }



    protected function grid()
    {
        return Admin::grid(ACategory::class, function (Grid $grid) {
            $grid->setAction('/admin/categories');
        });
    }

    protected function form()
    {
        return Admin::form(Category::class, function (Form $form) {
            $form->tools(function (Form\Tools $tools) {

                //$tools->disableBackButton();
                $tools->disableListButton();
            });
            $form->display('id', 'ID');
            $form->text('name', 'Name')->rules('required');
            $form->text('path', 'Path')->rules('required');
            $form->select('parent_id', 'parent_id')->options(ACategory::selectOptions());
            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
            $form->setAction('/admin/categories');
        });
    }

}
