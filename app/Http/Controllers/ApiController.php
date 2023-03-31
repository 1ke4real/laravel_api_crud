<?php

namespace App\Http\Controllers;

use App\Models\testApiModel;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ApiController extends BaseController
{
    public function home() {
        $data = testApiModel::all();
        return response()->json($data);
    }
    public function add(Request $request){
        $input1 = array_values($request->only('input1'))[0];
        $input2 = array_values($request->only('input2'))[0];

        $insertinput = new testApiModel();
        $insertinput->name = $input1;
        $insertinput->title = $input2;
        $insertinput->save();
        return response()->json([$input1 , $input2]);

    }
    public function destroy($id){
        $input = testApiModel::find($id);
        $input->destroy($id);
        return redirect("http://127.0.0.1:3000/home");
    }

    public function detail($id){
        $data = testApiModel::find($id);
        return response()->json($data);
    }
    public function update(Request $request, $id){
        $input1 = array_values($request->only('nameinput'))[0];
        $input2 = array_values($request->only('contentinput'))[0];

        $data = testApiModel::find($id);
        $data->name = $input1;
        $data->title = $input2;
        $data->update();
        return redirect("http://127.0.0.1:3000/update"+$id);
    }
//    public function update(Request $request, $id){
//        $article = ArticleModel::find($id);
//        $article->title = $request->input('title');
//        $article->content = $request->input('content');
//        $article->update();
//        return redirect('/all');
//    }
}
