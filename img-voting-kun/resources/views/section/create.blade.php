@extends("app")

@section("main")
    <div class="container">
        <form action="{{ route("section.store") }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="_method" value="post" />
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">写真投稿</h5>
                    <h6 class="card-subtitle" style="margin-bottom: 1rem;">投票対象になるポケモンスナップの画像をアップロードしてください。</h6>
                    <div class="form-group">
                        <label for="name">投稿者名</label>
                        <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp">
                        <small id="nameHelp" class="form-text text-muted">あなたの名前を入力してください。</small>
                    </div>
                    <fieldset>
                        <div class="form-group">
                            <label for="photo1">画像１</label>
                            <input type="file" class="form-control-file" id="photo1" name="photo1">
                        </div>
                        <div class="form-group">
                            <label for="photo1_detail">画像１の説明文</label>
                            <input type="text" class="form-control" id="photo1_detail" name="photo1_detail" aria-describedby="photo1DetailHelp">
                            <small id="photo1DetailHelp" class="form-text text-muted">画像１の説明文を入力してください。そのままタイトルとして投票時に表示されます。</small>
                        </div>
                    </fieldset>
                    <fieldset>
                        <div class="form-group">
                            <label for="photo2">画像２</label>
                            <input type="file" class="form-control-file" id="photo2" name="photo2">
                        </div>
                        <div class="form-group">
                            <label for="photo2_detail">画像２の説明文</label>
                            <input type="text" class="form-control" id="photo2_detail" name="photo2_detail" aria-describedby="photo2DetailHelp">
                            <small id="photo2DetailHelp" class="form-text text-muted">画像２の説明文を入力してください。そのままタイトルとして投票時に表示されます。</small>
                        </div>
                    </fieldset>
                    <fieldset>
                        <div class="form-group">
                            <label for="photo3">画像３</label>
                            <input type="file" class="form-control-file" id="photo3" name="photo3">
                        </div>
                        <div class="form-group">
                            <label for="photo3_detail">画像３の説明文</label>
                            <input type="text" class="form-control" id="photo3_detail" name="photo3_detail" aria-describedby="photo3DetailHelp">
                            <small id="photo3DetailHelp" class="form-text text-muted">画像３の説明文を入力してください。そのままタイトルとして投票時に表示されます。</small>
                        </div>
                    </fieldset>
                    <button type="submit" class="btn btn-primary">投稿（確認ページはありません）</button>
                </div>
            </div>
        </form>
    </div>

@endsection
