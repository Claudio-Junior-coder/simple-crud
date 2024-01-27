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
        $data = $request->all();
        unset($data['_token']);

        Cars::create($data);

        return response()->json(['success' => 'true']);

    }

    public function update (Request $request) {

        $data = $request->all();
        unset($data['_token']);
        unset($data['id']);

        $id = $this->checkId ($request->all()['id']);

        Cars::where('id', $id)->update($data);

        return response()->json(['success' => 'true']);

    }

    public function delete (Request $request) {

        $id = $this->checkId ($request->all()['id']);

        Cars::where('id', $id)->delete();

        return response()->json(['success' => 'true']);

    }

    public function checkId ($id) {

        $element = isset($id) ? $id : false;

        if($element == false) {
            return response()->json(['success' => 'false']);
        }

        return $element;

    }
}
