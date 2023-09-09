<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Condominium;

class CondominiumController extends Controller
{
    public Condominium $condominiuns;
    public function __construct(Condominium $condominiuns) {
        $this->condominiuns = $condominiuns;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $condominiuns = $this->condominiuns->all();
        return view('condominiuns.index', ['condominiuns' => $condominiuns]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $condominiums = $this->condominiuns->all();
        return view('condominiuns.create', compact('condominiums'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $created = $this->condominiuns->create([
            'name' => $request->input('name'),
            'condominia_id' => $request->input('condominia_id'),
        ]);
        if ($created) {
            return redirect()->route('condominiuns.index')->with('message', 'Condomínio cadastrado com sucesso');
        }
        return redirect()->back()->with('message', 'Erro ao cadastrar o morador');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $condominium = $this->condominiuns->find($id);
        return view('condominiuns.show', ['condominium' => $condominium]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Condominium $condominium)
    {
        return view('condominiuns.edit', ['condominium' => $condominium]);
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
        $updated = $this->condominiuns->where('id', $id)->update($request->except('_token', '_method'));
        if ($updated) {
            return redirect()->back()->with('message', 'Condomínio atualizado com sucesso');
        }
        return redirect()->back()->with('message', 'Erro ao atualizar o morador');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->condominiuns->where('id', $id)->delete();
        return redirect()->route('condominiuns.index')->with('message', 'Condomínio deletado com sucesso');
    }
}
