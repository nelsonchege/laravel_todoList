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
    public function show($id)
    {
        $listItem = ListItem::where('id', '=', $id)->first();

        return view('edit', ['listItem' => $listItem]);
    }
}
