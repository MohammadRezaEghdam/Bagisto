<?php

namespace App\Http\Controllers\Admin\Market;

use App\Models\Market\Category;
use Illuminate\Routing\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('Admin.Market.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('Admin.Market.Category.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        Category::create($request->all());
        return redirect()->route('category.index')->with('success', __('message.category_success'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Market\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Market\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $category = Category::find($category->id);
        $categories = Category::all();
        return view('Admin.Market.Category.update', compact('category', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryRequest  $request
     * @param  \App\Models\Market\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $category->update($request->all());
        return redirect()->route('category.index')->with('warning', __('message.category_update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Market\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        Category::find($category->id)->delete();
        return back()->with('danger', __('message.category_deleted'));
    }
}
