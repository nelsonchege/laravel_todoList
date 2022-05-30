<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListItem;
use Illuminate\Support\Facades\Log;

class TodoListController extends Controller
{
    public function index()
    {
        $listItem = ListItem::all();

        return view('welcome', ['listItems' => $listItem]);
    }
    public function saveItem(Request $request)
    {
        $newListItem = new ListItem;
        $newListItem->name = $request->listItem;
        $newListItem->is_complete = 0;
        $newListItem->save();

        return view('welcome', ['listItems' => ListItem::all()]);
    }
    public function updatePage($id)
    {
        // do update here
        $listItem = ListItem::where('id', '=', $id)->first();
        return view('update', ['listItem' => $listItem]);
    }
    public function updateItem(Request $request, $id)
    {
        // do update here
        $listItem = ListItem::where('id', '=', $id)->first();
        $item = $listItem;
        $item->name = $request->name;
        $item->is_complete = $request->is_complete;
        $item->save();

        return view('welcome', ['listItems' => ListItem::all()]);
    }
    public function deleteItem($id)
    {
        // do delete here
        $listItem = ListItem::where('id', '=', $id)->first();
        $listItem->delete();

        return view('welcome', ['listItems' => ListItem::all()]);
    }
}
