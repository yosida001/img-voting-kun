<?php


namespace App\UseCases\Section;

use App\Models\Image;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StoreUseCase
{
    /**
     * @param Request $request
     * @return bool
     */
    public function __invoke(Request $request)
    {
        $section = new Section();
        $section->name = $request->input("name");

        $photo1 = new Image();
        $path1 = $request->file("photo1")->store("public");
        $photo1->path = str_replace('public/', '', $path1);
        $photo1->title = $request->input("photo1_detail");

        $photo2 = new Image();
        $path2 = $request->file("photo2")->store("public");
        $photo2->path = str_replace('public/', '', $path2);
        $photo2->title = $request->input("photo2_detail");

        $photo3 = new Image();
        $path3 = $request->file("photo3")->store("public");
        $photo3->path = str_replace('public/', '', $path3);
        $photo3->title = $request->input("photo3_detail");

        try {
            DB::beginTransaction();

            $section->save();

            $photo1->section_id = $section->id;
            $photo1->save();
            $photo2->section_id = $section->id;
            $photo2->save();
            $photo3->section_id = $section->id;
            $photo3->save();


            $request->session()->flash("message", "画像投稿に成功しました。投票をお待ちください。");

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            report($e);

            $request->session()->flash("error", "画像投稿に失敗しました。しばらく時間をおいてからもう一度行ってください。");
            return false;
        }
        return true;
    }
}
