<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoriesController extends Controller
{
    protected $redirectTo = '/category';

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::where('disabled', 0)->get();
        return view('admin.inventory.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.inventory.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:100|unique:categories',
            'description' => 'required',
        ]);

        Category::create($request->all());
        return redirect()->route('admin.category.index')->with('success', 'New category added - ' . $request->name . ' !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category $category
     * @return \Illuminate\Http\Response
     */
    public function show($id, Category $category)
    {
        $category = $category->findOrFail($id);
        return view('admin.inventory.category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Category $category)
    {
        $category = $category->findOrFail($id);
        return view('admin.inventory.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Category $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $category = $category->findOrFail($request->id);

        $category->update($request->all());
        return redirect()->route('admin.category.index')->with('success', 'Category ' . $category->name . ' updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Category $category)
    {
        $category = $category->findOrFail($request->id);
        $category->disabled = 1;
        $category->save();

        return redirect()->route('admin.category.index')->with('success', 'Category ' . $category->name . ' deleted!');
    }
}
