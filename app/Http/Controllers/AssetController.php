<?php
namespace App\Http\Controllers;

use App\Models\Asset;
use Illuminate\Http\Request;

class AssetController extends Controller
{
    public function index()
    {
        $asset = Asset::all();
        return view('asset.index', compact(['asset']));
    }

    public function upload()
    {
        $asset = Asset::all();
        return view('asset.upload', compact(['asset']));
    }

    public function store(Request $request)
    {
        $name = $request->file('file')->getClientOriginalName();
        $size = $request->file('file')->getSize();
        $path = cloudinary()->upload($request->file('file')->getRealPath())->getSecurePath();

        Asset::create([
            'name' => $name,
            'path' => $path,
            'size' => $size,
        ]);
        return redirect('/asset');
    }



    public function destroy($id)
    {
        $asset = Asset::find($id);
        $asset->delete();
        return redirect('/asset');
    }
}
