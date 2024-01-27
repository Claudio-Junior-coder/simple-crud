<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use Illuminate\Http\Request;

class carsController extends Controller
{
    //
    public function index () {
        $data = Cars::get();
        return view('cars.index', compact('data'));
    }

    public function create (Request $request) {

        $id = Cars::create(['name' => 'Descritivo não informado.'])->id;

        return redirect()->route('cars.index');

    }

    public function update (Request $request) {

        $data = $request->all();
        unset($data['_token']);
        unset($data['id']);

        $id = $this->checkId ($request->all()['id']);

        Cars::where('id', $id)->update($data);

        return redirect()->route('cars.index', ['message' => 'Carro atualizado com sucesso!']);

    }

    public function delete (Request $request) {

        $id = $this->checkId ($request->all()['id']);

        Cars::where('id', $id)->delete();

        return redirect()->route('cars.index', ['message' => 'Carro excluído com sucesso!']);

    }

    public function checkId ($id) {

        $element = isset($id) ? $id : false;

        if($element == false) {
            return redirect()->back()->with('message', 'Id informado não existe.');
        }

        return $element;

    }
}
