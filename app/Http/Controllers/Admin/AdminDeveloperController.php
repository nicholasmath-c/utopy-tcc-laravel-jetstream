<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Developer;
use App\Http\Controllers\GameController;
use App\Models\Game;
use Illuminate\Support\Facades\Storage;

class AdminDeveloperController extends Controller
{
    public function allAdmission(){
        $admission = GameController::getAllAdmissionGamePaginate(12);

        return view("admin.developer.admissions", compact(['admission']));
    }

    public function controlAdmission(Request $request){
        $developer = Developer::findOrFail($request->developer_id);

        if($request->has("approve")){
            $developer->admission = "Approved";
            $developer->save();

            return redirect()->route("developer.admissions")->with("message", "Desenvolvedor aprovado com sucesso!");
        }
        else if($request->has("reject")){
            $developer->admission = "Rejected";
            $developer->save();

            return redirect()->route("developer.admissions")->with("message", "Desenvolvedor reprovado com sucesso!");
        }
    }

    public function gameDownload($id){
        return GameController::gameDownload($id);
    }
}
