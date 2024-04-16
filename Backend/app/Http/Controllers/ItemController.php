<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    public function index()
    {
        $Items = Item::select('id', 'photo1',  'iname',  'price', 'sale', 'available')
            ->get();
        return response()->json(['success' => true, 'data' => $Items], 200);
    }

    public function show($id)
    {
        $Item = DB::table('Items')->where('id', $id)->get();
        return response()->json(['success' => true, 'data' => $Item], 200);
    }

    public function store(Request $request)
    {
        DB::table('Items')->insert([
            'photo1' => $request->photo1,
            'iname' => $request->iname,
            'sale' => $request->sale,
            'price' => $request->price,
            'available' => $request->available,
        ]);

        return response()->json(['success' => true, 'data' => 'okok'], 201);
    }

    public function update(Request $request, $id)
    {
        $Item = Item::findOrFail($id);

        $validatedData = $request->validate([
            'iname' => 'required',
            'price' => 'required',
            'sale' => 'required',
            'available' => 'required',
        ]);

        DB::table('Items')->where('id', $id)->update([
            'iname' => $request->iname,
            'price' => $request->price,
            'sale' => $request->sale,
            'available' => $request->available
        ]);

        return response()->json([
            'data' => $Item,
            'message' => 'Item updated successfully',
        ]);
    }

    public function destroy($id)
    {
        $Item = Item::find($id);

        if (!$Item) {
            return response()->json(['success' => false, 'message' => 'Item not found'], 404);
        }

        $Item->delete();

        return response()->json(['success' => true, 'message' => 'Item deleted successfully']);
    }
}
