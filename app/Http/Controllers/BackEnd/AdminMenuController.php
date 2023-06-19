<?php

namespace App\Http\Controllers\BackEnd;

use App\Components\MenuRecusive;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminMenuRequest;
use App\Models\Menu;
use App\Trait\DeleteModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;


class AdminMenuController extends Controller
{
    use DeleteModel;
    private $menuRecusive;
    public function __construct() {
        $this->menuRecusive = new MenuRecusive();
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::where('active', 1)->latest()->paginate(5);
        return view('be.components.menu.index', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $optionHtml = $this->menuRecusive->menuRecusiveCreate();
        return view('be.components.menu.create', compact('optionHtml'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminMenuRequest $request)
    {
        try {
            DB::beginTransaction();
            Menu::create([
                'name' => $request->name,
                'parent_id' => $request->parent_id,
                'slug' => Str::slug($request->name)
            ]);
            DB::commit();
            return redirect()->route('menu.index');

        } catch (\Exception $ex) {
            DB::rollBack();
            Log::error("Message: {$ex->getMessage()} --- Line: {$ex->getLine()} --- File: {$ex->getFile()}");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        $optionHtml = $this->menuRecusive->menuRecusiveEdit($menu->parent_id);
        return view('be.components.menu.edit', compact('optionHtml', 'menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(AdminMenuRequest $request, Menu $menu)
    {
        try {
            DB::beginTransaction();
            $menu->update([
                'name' => $request->name,
                'parent_id' => $request->parent_id,
                'slug' => Str::slug($request->name)
            ]);
            DB::commit();
            return redirect()->route('menu.index');
            
        } catch (\Exception $ex) {
            DB::rollBack();
            Log::error("Message: {$ex->getMessage()} --- Line: {$ex->getLine()} --- File: {$ex->getFile()}");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        $this->TraitHideRecord($menu);
    }
}
