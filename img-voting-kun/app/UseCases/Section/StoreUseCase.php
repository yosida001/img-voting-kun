<?php


namespace App\UseCases\Section;

use App\Models\Image;
use App\Models\Section;
use Illuminate\Http\Request;

class StoreUseCase
{
    public function __invoke(Request $request)
    {
        $section = new Section();
        $section->name = $request->input("name");

        $photo1 = new Image();
        $photo1->path = $request->file("photo1")->store("images");
        $photo1->title = $request->input("photo1_detail");

        $photo2 = new Image();
        $photo2->path = $request->file("photo2")->store("images");
        $photo2->title = $request->input("photo2_detail");

        $photo3 = new Image();
        $photo3->path = $request->file("photo3")->store("images");
        $photo3->title = $request->input("photo3_detail");

        try {

            $section->save();

            $photo1->section_id = $section->id;
            $photo1->save();
            $photo2->section_id = $section->id;
            $photo2->save();
            $photo3->section_id = $section->id;
            $photo3->save();


            $request->session()->flash("message", "画像投稿に成功しました。投票をお待ちください。");
            return true;
        } catch (\Exception $e) {
            report($e);

            $request->session()->flash("error", "画像投稿に失敗しました。しばらく時間をおいてからもう一度行ってください。");
            return false;
        }
    }
}
