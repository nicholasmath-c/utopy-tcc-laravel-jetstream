<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Developer;
use App\Http\Controllers\GameController;
use App\Models\Game;

class AdminDeveloperController extends Controller
{
    public function allAdmission(){
        $admission = GameController::getAllAdmissionGamePaginate(12);

        return view("admin.developer.admissions", compact(['admission']));
    }

    public function controlAdmission(Request $request, $id){
        $developer = Developer::findOrFail($request->developer_id);
        $admissionGame = Game::findOrFail($id);

        if($request->has("approve")){
            $developer->admission = "Approved";
            $developer->save();

            $admissionGame->status = "Admission Active";
            $admissionGame->save();

            return redirect()->route("developer.admissions")->with("message", "Desenvolvedor aprovado com sucesso!");
        }
        else if($request->has("reject")){
            $developer->admission = "Rejected";
            $developer->save();

            $admissionGame->status = "Admission Rejected";
            $admissionGame->save();

            return redirect()->route("developer.admissions")->with("message", "Desenvolvedor reprovado com sucesso!");
        }
    }

    public function gameDownload($id){
        return GameController::gameDownload($id);
    }
}
