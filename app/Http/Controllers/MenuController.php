<?php

namespace App\Http\Controllers;

use App\Components\menuRecusive;
use App\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class MenuController extends Controller
{

    private $menuRecusive;
    private $menu;
    public function __construct(menuRecusive $menuRecusive, Menu $menu)
    {
        $this->menuRecusive = $menuRecusive;
        $this->menu = $menu;
    }

    public function index()
    {
        $menus = $this->menu->paginate(5);
        return view('admin.menus.index',compact('menus'));
    }


    public function create()
    {
        $optionSelect = $this->menuRecusive->menuRecusiveAdd();
        return view('admin.menus.create', compact('optionSelect'));
    }

    public function store(Request $request)
    {
        $this->menu->create([
            'name' => $request->get('name'),
            'parent_id' => $request->get('parent_id'),
            'slug' => Str::slug($request->name),
        ]);
        return redirect()->route('list.menus');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $menuEdit = $this->menu->find($id);
        $optionSelect = $this->menuRecusive->menuRecusiveEdit( $menuEdit->parent_id);
        return view('admin.menus.edit',compact('optionSelect','menuEdit'));
    }

    public function update(Request $request, $id)
    {
        $this->menu->find($id)->update([
            'name' => $request->get('name'),
            'parent_id' => $request->get('parent_id'),
            'slug'=> str::Slug($request->name),
        ]);
        return redirect()->route('list.menus');
    }

    public function destroy($id)
    {
        $this->menu->find($id)->delete();
        return redirect()->route('list.menus');
    }
}
