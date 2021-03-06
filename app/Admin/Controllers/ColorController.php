<?php

namespace App\Admin\Controllers;

use App\Color;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class ColorController extends Controller
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

            $content->header('Colors');
            $content->description('description');

            $content->body($this->grid());
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('header');
            $content->description('description');

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {

            $content->header('header');
            $content->description('description');

            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(Color::class, function (Grid $grid) {

            $grid->id('ID')->sortable();


            $grid->name('Name')->sortable();

            $grid->color()->display(function ($name) {

                return "<i class='fa fa-adjust' style='color: $name'></i>";


               // return "<span class='label' style='color: $name'>$name</span>";
            });

            //$grid->color('Color');

/*            $grid->created_at();
            $grid->updated_at();*/
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Color::class, function (Form $form) {

            $form->display('id', 'ID');
            $form->text('name', 'Name');
            $form->color('color', 'Color');

/*            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');*/
        });
    }
}
