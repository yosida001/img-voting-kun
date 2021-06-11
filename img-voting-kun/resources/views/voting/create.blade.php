@extends("app")

@section("main")
    <form action="{{ route("section.store") }}" method="post">
        @csrf
        <input type="hidden" name="_method" value="post" />

        <div class="container">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">投票画面</h5>
                    <h6 class="card-subtitle" style="margin-bottom: 1rem;">お気に入りの写真３つをクリックして投票してください。</h6>
                    <div class="form-group">
                        <label for="name">投稿者名</label>
                        <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp">
                        <small id="nameHelp" class="form-text text-muted">あなたの名前を入力してください。</small>
                    </div>
                </div>
            </div>

        </div>

        <div class="container-fluid mt-2">
            <div class="row">
                @foreach($images as $index => $image)
                <div class="col-12 col-sm-4">
                    <figure class="figure">
                        <img src="{{ url("storage/{$image->path}") }}" alt="{{ $image->title }}" class="bd-placeholder-img figure-img img-fluid mx-auto rounded img-thumbnail" width="480" height="270">
                        <figcaption class="figure-caption">
                            <input type="checkbox" name="img[]" value="{{ $image->id }}">&nbsp;
                            {{ $image->title }}
                        </figcaption>
                    </figure>
                </div>
                @endforeach
            </div>
        </div>

        <div class="container mt-2">
            <div class="card">
                <div class="card-body">
                    <p class="card-text">
                        <button type="submit" class="btn btn-primary btn-block btn-lg">投票する</button>
                    </p>
                </div>
            </div>
        </div>
    </form>
@endsection
