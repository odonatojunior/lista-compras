<?php

namespace App\Http\Controllers;

use App\Models\ShopList;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $list = $this->showUserLists(auth()->id());
      return view('shoplist.index', ['shopList' => $list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('shoplist.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
          'title' => 'required|min:5|max:100',
          'content' => 'required|min:5|max:255'
        ]);

        ShopList::create([
          'title' => $request->input('title'),
          'content' => $request->input('content'),
          'user_id' => auth()->id()
        ]);

        $request->session()->flash('status', 'Lista inserida!');

        $list = $this->showUserLists(auth()->id());
        return redirect(route('shoplist.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $list = ShopList::find($id);
      return view('shoplist.show', ['list' => $list]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $list = ShopList::find($id);
        return view('shoplist.edit', ['list' => $list]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $list = ShopList::find($id);

        $request->validate([
          'title' => 'required|min:5|max:100',
          'content' => 'required|min:5|max:255'
        ]);

        $list->title = $request->input('title');
        $list->content = $request->input('content');

        $list->save();

        session()->flash('status', 'Lista editada!');
        return view('shoplist.show', ['list' => $list]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ShopList::destroy($id);
        session()->flash('status', 'Lista deletada!');
        return redirect()->route('shoplist.index');
    }


    public function showUserLists($id)
    {
      $user = User::find($id);
      $list = $user->shopList;
      return $list;
    }
}
