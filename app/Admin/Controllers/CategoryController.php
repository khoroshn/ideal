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
use Encore\Admin\Widgets\Box;


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
                //$row->column(6, $this->form());
                $row->column(6, function (Column $column) {
                    $form = new \Encore\Admin\Widgets\Form();
                    $form->action(admin_base_path('categories'));
                    $form->select('parent_id', 'Parent')->options(ACategory::selectOptions());
                    $form->text('name', 'Name')->rules('required');
                    $form->icon('icon', 'Icon')->default('fa-bars')->rules('required')->help($this->iconHelp());
                    $form->text('path', 'Path')->rules('required');
                    $form->hidden('_token')->default(csrf_token());
                    $column->append((new Box('New Categories', $form))->style('success'));
                });
            });
        });

    }

    public function show($id)
    {
        //$form->setAction('/admin/categories');
        return redirect()->route('/admin/categories', ['id' => $id]);
    }

    protected function treeView()
    {

        return ACategory::tree(function (Tree $tree) {
            $tree->disableCreate();
            $tree->disableSave();
            $tree->branch(function ($branch) {
                $payload = "<i class='fa {$branch['icon']}'></i>&nbsp;<strong>{$branch['name']}</strong>";

                $uri = $branch['path'];
                $payload .= "&nbsp;&nbsp;&nbsp;<a href=\"$uri\" _target=\"blank\" class=\"dd-nodrag\">$uri</a>";
                return $payload;
                //return "{$branch['id']} - {$branch['name']} ";
            });


        });

    }


    public function edit($id)
    {


        return Admin::content(function (Content $content) use ($id) {
            //redirect('/sdf');
            $content->header('header');
            $content->description('description');
            $content->row($this->form()->edit($id));
        });
        //return redirect()->route('/admin/categories', ['id' => $id]);

    }

    protected function form()
    {
        return ACategory::form(function (Form $form) {
/*            $form->tools(function (Form\Tools $tools) {

                //$tools->disableBackButton();
                $tools->disableListButton();
            });*/
            //$form->setAction('/admin/categories/');

            $form->select('parent_id', 'parent_id')->options(ACategory::selectOptions());
            $form->text('name', 'Name')->rules('required');
            $form->text('path', 'Path')->rules('required');
            $form->text('icon', 'Icon')->rules('required');

            //$form->display('created_at', 'Created At');
            //$form->display('updated_at', 'Updated At');

        });
    }

    protected function iconHelp()
    {
        return 'For more icons please see <a href="http://fontawesome.io/icons/" target="_blank">http://fontawesome.io/icons/</a>';
    }

}
