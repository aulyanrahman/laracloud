<?php
namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        $category = DB::table('category')
                        ->join('asset', 'category.asset_id', '=', 'asset.id')
                        ->select('category.*', 'asset.path')->get();
        return view('category.index', compact('category'));
    }
    
    public function create()
    {
        $category = Category::all();
        $asset = Asset::all();
        return view('category.create', compact(['category', 'asset']));
    }

    public function store(Request $request)
    {
        Category::create($request->except(['_token', 'submit']));

        return redirect('/category');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        $asset = Asset::all();
        return view('category.edit', compact(['category', 'asset']));
    }

    public function update($id, Request $request)
    {
        $category = Category::find($id);
        $category->update($request->except(['_token', 'submit']));
        return redirect('/category');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('/category');
    }
}
