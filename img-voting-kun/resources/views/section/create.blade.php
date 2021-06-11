@extends("app")

@section("main")
    <form action="{{ route("section.store") }}">
        @csrf
        <input type="hidden" name="_method" value="post" />
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">写真投稿</h5>
                <h6 class="card-subtitle">投票対象になるポケモンスナップの画像をアップロードしてください。</h6>
                <div class="form-group">
                    <label for="name">投稿者名</label>
                    <input type="name" class="form-control" id="name" aria-describedby="nameHelp">
                    <small id="nameHelp" class="form-text text-muted">あなたの名前を入力してください。</small>
                </div>
                <fieldset>
                    <div class="form-group">
                        <label for="photo1">画像１</label>
                        <input type="file" class="form-control-file" id="photo1" name="photo1">
                    </div>
                    <div class="form-group">
                        <label for="photo1_detail">画像１の説明文</label>
                        <input type="text" class="form-control" id="photo1_detail" aria-describedby="photo1DetailHelp">
                        <small id="photo1DetailHelp" class="form-text text-muted">画像１の説明文を入力してください。そのままタイトルとして投票時に表示されます。</small>
                    </div>
                </fieldset>
            </div>
        </div>
    </form>
@endsection
