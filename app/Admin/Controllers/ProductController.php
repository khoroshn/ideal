<?php

namespace App\Admin\Controllers;

use App\Group;
use App\Color;
use App\Image;
use App\Product;
use App\Category;
use App\ACategory;
use App\Size;
use App\Tag;


use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class ProductController extends Controller
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

            $content->header('Products');
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

            $content->header('Edit Product');
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

            $content->header('Add new Product');
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
        return Admin::grid(Product::class, function (Grid $grid) {

            $grid->id('ID')->sortable();

           // dd($grid->actions());


            $grid->name()->editable()->sortable();
            $grid->desc()->editable('textarea');

           $grid->images('Img')->display(function ($img) {
                $count = count($img);
               if($count>0){
                   foreach($img as $item){
                       return "<img  width=\"75\" src=/uploads/".$item['filename']."/>";
                   }
               } else {
                   return "";
               }

            });



            $states = [
                'on'  => ['value' => 1, 'text' => 'YES', 'color' => 'success'],
                'off' => ['value' => 0, 'text' => 'NO', 'color' => 'default'],
            ];

/*            $grid->column('group')->switchGroup([
                'hot'       => 'Hot',
                'new'       => 'New',
                'recommend' => 'Recommend',
            ], $states);*/


            //dd(Group::all()->pluck('name','id')->toArray());




            //$grid->group()->switchGroup(Group::all()->pluck('name','id')->toArray(),$states);

/*            $grid->groups()->display(function ($groups) {

                $groups = array_map(function ($groups) {
                    return "<span class='label label-success'>{$groups['name']}</span>";
                }, $groups);

                return join('&nbsp;', $groups);
            });*/


            $grid->groups()->display(function ($groups) {

                $groups = array_map(function ($groups) {

                    if($groups['name'] == 'Sale') {
                        return "<span class='label label-danger'>{$groups['name']}</span>";
                    } else {
                        return "<span class='label label-success'>{$groups['name']}</span>";
                    }
                }, $groups);

                return join('</br>', $groups);
            });

            //$grid->tags()->pluck('name')->implode(', ');
            $grid->tags()->display(function ($tags) {

                $tags = array_map(function ($tags) {
                    return "<span class='label label-default'>{$tags['name']}</span>";
                }, $tags);

                return join('</br>', $tags);
            });



            $grid->created_at()->sortable();
            $grid->updated_at()->sortable();


            $grid->filter(function($filter){

                // Remove the default id filter
                $filter->disableIdFilter();

                // Add a column filter
                $filter->where(function ($query) {

                    $query->where('name', 'like', "%{$this->input}%")
                        ->orWhere('desc', 'like', "%{$this->input}%");

                }, 'Text');

            });



        });

    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Product::class, function (Form $form) {
            $form->display('id', 'ID');
            $form->text('name', 'Name')->rules('required');
            $form->textarea('desc', 'Description')->rows(10)->rules('required');
            //$form->image('images'[,'Images'])->uniqueName();
            $form->hasMany('images', function (Form\NestedForm $form) {
                //$form->multipleImage('filename')->uniqueName()->move('/img/products');
                $form->image('filename')->uniqueName()->move('/img/products');
            });
            $form->text('alias', 'Alias')->help('"Product name" to "product_name" recomended. Field must be unique...')->rules('required');
            //$form->select('parent_id', 'parent_id')->options(ACategory::selectOptions());
            $form->multipleSelect('categories')->options(ACategory::selectOptions())->rules('required');
            $form->multipleSelect('tags')->options(Tag::all()->pluck('name', 'id'));
            $form->multipleSelect('groups')->options(Group::all()->pluck('name', 'id'));
            $form->multipleSelect('sizes')->options(Size::all()->pluck('name_inter', 'id'));
            $form->multipleSelect('colors')->options(Color::all()->pluck('name', 'id'));
            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }
}
