<?php

namespace App\Admin\Controllers;

use App\Size;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class SizeController extends Controller
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

            $content->header('header');
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
        return Admin::grid(Size::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->name_ru('RU')->sortable();
            $grid->name_inter('International')->sortable();
            $grid->name_it('IT')->sortable();
            $grid->name_us('US')->sortable();
            $grid->name_uk('UK')->sortable();

        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Size::class, function (Form $form) {

            $form->display('id', 'ID');
            $form->text('name_ru', 'RU')->rules('required');
            $form->text('name_inter', 'International')->rules('required');
            $form->text('name_it', 'IT');
            $form->text('name_us', 'US');
            $form->text('name_uk', 'UK');
            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }
}
