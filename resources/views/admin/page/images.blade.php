@extends("layouts.admin")

@section("content")
    <form method="POST" action="{{ route("admin.page.image.update") }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group page-images">
            <div class="form-group row page-image">
                @php($pageImage = $pageImages["home.img"])

                <input type="hidden" name="page_images[0][key]" value="{{ $pageImage->key }}" required>

                <div class="form-group">
                    <input type="text" class="form-control" name="page_images[0][page]" value="{{ $pageImage->page }}" required>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control " name="page_images[0][name]" value="{{ $pageImage->name }}" required>
                </div>

                <div class="form-group">
                    <input type="file" class="form-control" name="page_images[0][file]">
                    <img src="{{ asset($pageImage->path) }}">
                </div>
            </div>
        </div>
        <input type="submit" value="Mentés">
    </form>
@endsection
