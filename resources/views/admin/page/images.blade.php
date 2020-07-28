@extends("layouts.admin")

@section("content")
    <form method="POST" action="{{ route("admin.page.image.update") }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group page-images">
            @foreach($pageImages as $pageImage)
                <div class="form-group row page-image">

                    <input type="hidden" name="page_images[{{ $loop->index }}][key]" value="{{ $pageImage->key }}" required>

                    <div class="form-group">
                        <input type="text" class="form-control" disabled value="{{ $pageImage->key }}" required>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control @error("page_images.$loop->index.page") is-invalid @enderror" name="page_images[{{ $loop->index }}][page]" value="{{ $pageImage->page }}" required>
                        @error("page_images.$loop->index.page")
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control @error("page_images.$loop->index.name") is-invalid @enderror" name="page_images[{{ $loop->index }}][name]" value="{{ $pageImage->name }}" required>
                        @error("page_images.$loop->index.name")
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="file" class="form-control @error("page_images.$loop->index.file") is-invalid @enderror" name="page_images[{{ $loop->index }}][file]">
                        @error("page_images.$loop->index.file")
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <img src="{{ asset($pageImage->path) }}">
                    </div>
                </div>
            @endforeach
        </div>
        <input type="submit" value="Mentés">
    </form>
@endsection
