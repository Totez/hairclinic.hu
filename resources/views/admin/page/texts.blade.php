@extends("layouts.admin")

@section("content")
    <form method="POST" action="{{ route("admin.page.text.update") }}">
        @csrf
        <div class="form-group page-texts">
            @foreach($pageTexts as $pageText)
                <div class="form-group row page-text">

                    <input type="hidden" name="page_texts[{{ $loop->index }}][key]" value="{{ $pageText->key }}" required>

                    <div class="form-group">
                        <input type="text" class="form-control" disabled value="{{ $pageText->key }}" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control @error("products.$loop->index.page") is-invalid @enderror" name="page_texts[{{ $loop->index }}][page]" value="{{ $pageText->page }}" required>
                        @error("products.$loop->index.page")
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control @error("products.$loop->index.name") is-invalid @enderror" name="page_texts[{{ $loop->index }}][name]" value="{{ $pageText->name }}" required>
                        @error("products.$loop->index.name")
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <textarea class="form-control @error("products.$loop->index.text") is-invalid @enderror" name="page_texts[{{ $loop->index }}][text]" required>{{ $pageText->text }}</textarea>
                        @error("products.$loop->index.text")
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            @endforeach
        </div>
        <input type="submit" value="Mentés">
    </form>
@endsection
