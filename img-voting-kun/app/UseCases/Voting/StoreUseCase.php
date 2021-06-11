<?php


namespace App\UseCases\Voting;

use App\Models\Voting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StoreUseCase
{
    public function __invoke(Request $request)
    {
        $name = $request->input("name");

        $selectedImgIds = $request->input("img");
        $votingList = [];
        foreach ($selectedImgIds as $imgId) {
            $voting = new Voting();
            $voting->name = $name;
            $voting->image_id = $imgId;

            $votingList[] = $voting;
        }

        try {
            DB::beginTransaction();

            foreach ($votingList as $voting) {
                $voting->save();
            }

            $request->session()->flash("message", "投票に成功しました。開票をお待ちください。");

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            report($e);

            $request->session()->flash("error", "投票に失敗しました。しばらく時間をおいてからもう一度行ってください。");
            return false;
        }

        return true;
    }
}
