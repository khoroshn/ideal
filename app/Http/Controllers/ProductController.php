<?php

namespace App\Http\Controllers;


use App\Product;
use App\Repositories\ProductRepository;
use App\Category;
use App\Image;
use View;
use Illuminate\Http\Request;

class ProductController extends SiteController
{

    public function __construct(ProductRepository $all_products){

        $this->all_products = $all_products;

        $this->template = env('THEME').'.products.index';
    }

/*    public function index()
    {
     $products=Product::all();

        return view('theme.products.indexR',compact('products'));
    }*/

    public function index()
    {
        $products=Product::all();
        $products->load('categories');
        $products->load('images');

        return response()->json($products);
        //return view('theme.products.indexR',compact('products'));
    }

    public function create()
    {
        //Category::create(['name' => 'Root category']);
        $categories=Category::all()->toHierarchy();
        return view('admin.products.create', compact('categories'));
    }

    public function store(Request $request)
    {

        dd($request);
        $formInput = $request->except(['images', 'categories']);

        $this->validate($request, [
            'name' => 'required',
            'title' => 'required',
            'description' => 'required',
            'images' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        Product::create($formInput);

        $product = Product::orderby('id', 'desc')->first();

        if($request->hasfile('images'))
        {
            foreach($request->file('images') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/images/', $name);
                $form= new Image();
                $form->filename = $name;
                $form->product_id = $product->id;
                $form->save();
            }
        }


        $category = Category::where('id', '=', '10')->first();

        $product->categories()->attach($category);


        return back()->with('success', 'Your items have been successfully added');
    }

    public function showProducts(){
        $items = Product::paginate(4);
        if (request()->ajax()) {
            return Response::json(View::make('theme.products.items', array('items' => $items))->render());
        }
        return View::make('theme.products.products', array('items' => $items));
    }

    public function product($id)
    {
        $item = Product::where('id', $id)->get();
        $item->load('images','colors','sizes','groups');
        return response()->json($item);

    }

    public function show($alias)
    {
        $item = Product::where('alias', $alias)->get();
        $item->load('images','colors','sizes','groups');

        $content = $item;

        $content = view(env('THEME').'.products.content')
            ->with('content',$content)->render();

        $this->vars = array_add($this->vars,'content',$content);

        $this->keywords = 'Ideal';
        $this->meta_desc = 'Ideal';
        $this->title = 'Ideal';

        return $this->renderOut();

    }

    public function edit(Product $product)
    {
        //
    }

    public function update(Request $request, Product $product)
    {
        //
    }

    public function destroy(Product $product)
    {
        //
    }
}
