<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

use  App\Http\Requests\Category\StoreRequest;
use  App\Http\Requests\Category\UpdateRequest;
use Illuminate\Support\Facades\Gate;

class CategoryController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('categories.index'),403);

        $categories = Category::paginate(10);
        return view('admin.category.index', compact('categories'));
    }


    public function create()
    {
        abort_if(Gate::denies('categories.create'),403);

        return view('admin.category.create');
    }


    public function store(StoreRequest $request)
    {
        Category::create($request->all());
        return redirect()->route('categories.index');
    }


    public function show(Category $category)
    {
        abort_if(Gate::denies('categories.show'),403);

        return view('admin.category.show', compact('category'));
    }


    public function edit(Category $category)
    {
        abort_if(Gate::denies('categories.edit'),403);

        return view('admin.category.edit', compact('category'));
    }



    public function update(UpdateRequest $request, Category $category)
    {
        $category->update($request->all());
        return redirect()->route('categories.index');
    }


    public function destroy(Category $category)
    {
        abort_if(Gate::denies('categories.destroy'),403);
        $related_items=$category->products()->count();
        if($related_items>0){
            return redirect()->back()->with('error','No se puede eliminar categoria porque tiene productos relacionados');
        }
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Categoria eliminada');
    }
}
