<?php

namespace Modules\Card\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Card\Models\Card;
use Modules\Card\Models\Page;

class BackendModuleCardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cards = Card::all();
        return view('default.card.backend.index', compact('cards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pages = Page::all();
        return view('default.card.backend.create', compact('pages'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valid_data = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'page_id' => 'numeric|required'
        ]);

        Card::create($valid_data);

        flash('New card added')->success();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Card $card)
    {
        $card = Card::find($card->id);
        return view('default.card.backend.edit', compact('card'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Card $card)
    {
        Card::destroy($card->id);
        return redirect(route('backend.card.index'));
    }

    public function change_state(Card $card)
    {
        $model = Card::findOrFail($card->id);
        $model->active = !$model->active;
        $model->save();
        return redirect(route('backend.card.index'))->with(['message' => 'Toggled']);
    }

}
