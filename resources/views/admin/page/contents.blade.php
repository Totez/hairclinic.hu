@extends("layouts.admin")

@section("content")
    <form method="POST" action="{{ route("admin.page.text.update") }}">
        @csrf
        <div class="form-group page-texts">
            @foreach($page_contents as $pageContent)
                <div class="form-group row page-text">

                    <input type="hidden" name="page_contents[{{ $loop->index }}][key]" value="{{ $pageContent->key }}" required>

                    <div class="form-group">
                        <input type="text" class="form-control" disabled value="{{ $pageContent->key }}" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control @error("products.$loop->index.page") is-invalid @enderror" name="page_contents[{{ $loop->index }}][page]" value="{{ $pageContent->page }}" required>
                        @error("page_contents.$loop->index.page")
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control @error("products.$loop->index.title") is-invalid @enderror" name="page_contents[{{ $loop->index }}][title]" value="{{ $pageContent->title }}" required>
                        @error("page_contents.$loop->index.title")
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <textarea class="form-control @error("products.$loop->index.content") is-invalid @enderror" name="page_contents[{{ $loop->index }}][content]" required>{{ $pageContent->content }}</textarea>
                        @error("page_contents.$loop->index.content")
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            @endforeach
        </div>
        <input type="submit" value="Mentés">
    </form>
@endsection
