@extends("app")

@section("main")
    <form action="{{ route("section.store") }}">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">写真投票</h5>
            </div>
        </div>
    </form>
@endsection
