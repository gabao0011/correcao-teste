<?php

namespace App\Livewire\Categoria;

use App\Models\Categoria;
use Livewire\Component;

class CategoriaEdit extends Component
{
    public $categoria_id;
    public $nome;
    // função mount {
    // receber id de referencia
    // buscar por id
    // validar se retornoiu resultado
    // preencher os campos
    //}
    public function mount($id){
        $categoria = Categoria::find($id);
        if($categoria == null){
            session()->flash('error', 'Categoria não encontrada');
            return redirect()->route('categoria.index');
        }

        $this->categoria_id = $categoria->id;
        $this->nome = $categoria->nome;
    }

    // função update {
    // receber id de referencia
    // buscar por id
    // validar se retornou resultado
    // capturar os dados dos campos
    // atualizar
    // retornar e redirecionar
    //}

    public function update(){
        $categoria = Categoria::find($this->categoria_id);
        if($categoria == null){
            session()->flash('error', 'Categoria não encontrada');
            return redirect()->route('categoria.index');
        }

        $categoria->nome = $this->nome;

        $categoria->save();

        session()->flash('success', 'Atualizado');
            return redirect()->route('categoria.index');
    }

    public function render()
    {
        return view('livewire.categoria.categoria-edit');
    }
}
