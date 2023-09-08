<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resident;
use App\Models\Condominium;

class ResidentController extends Controller
{
    public Resident $residents;
    public Condominium $condominiuns;
    public function __construct(Resident $residents, Condominium $condominiuns) {
        $this->residents = $residents;
        $this->condominiuns = $condominiuns;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $residents = $this->residents->all();
        return view('residents.index', ['residents' => $residents]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $condominiums = $this->condominiuns->all();
        return view('residents.create', compact('condominiums'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $created = $this->residents->create([
            'name' => $request->input('name'),
            'condominia_id' => $request->input('condominia_id'),
        ]);
        if ($created) {
            return redirect()->route('residents.index')->with('message', 'Morador(a) cadastrado com sucesso');
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
        $resident = $this->residents->find($id);
        $condo = $this->condominiuns->where('id', $resident->condominia_id)->first();
        $condominiuns = [
            'name' => $condo->name
        ];
        return view('residents.show', ['resident' => $resident], compact('condominiuns'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Resident $resident)
    {
        $condominiums = $this->condominiuns->all();
        return view('residents.edit', ['resident' => $resident], compact('condominiums'));
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
        $updated = $this->residents->where('id', $id)->update($request->except('_token', '_method'));
        if ($updated) {
            return redirect()->back()->with('message', 'Morador(a) atualizado com sucesso');
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
        //
    }
}
