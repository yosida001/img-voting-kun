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
                    <figure class="figure img-big">
                        <img src="{{ url("storage/{$image->path}") }}" alt="{{ $image->title }}" class="bd-placeholder-img figure-img img-fluid mx-auto rounded img-thumbnail biggable-image" width="480" height="270">
                        <figcaption class="figure-caption">
                            <label>
                                <input type="checkbox" name="img[]" value="{{ $image->id }}">&nbsp;
                                {{ $image->title }}
                            </label>
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


    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <img id="modal-img" src="#" style="max-width: 100%">
            </div>
        </div>
    </div>

    <script>
        $(".img-big").on("click", function(e) {
            let srcPath = $(e.target).children(".biggable-image").attr("src");
            console.log(srcPath);
            $("#modal-img").attr("src", srcPath);

            $(".modal").modal();
        });
    </script>
@endsection
