@extends("layouts.admin")

@section("content")
    <form method="POST" action="{{ route("admin.page.text.update") }}">
        @csrf
        <div class="form-group page-texts">
            <div class="form-group row page-text">
                @php($pageText = $pageTexts["home.welcome"])

                <input type="hidden" name="page_texts[0][key]" value="{{ $pageText->key }}" required>

                <div class="col-md-6">
                    <input type="text" class="form-control" name="page_texts[0][page]" value="{{ $pageText->page }}" required>
                </div>

                <div class="col-md-6">
                    <input type="text" class="form-control" name="page_texts[0][name]" value="{{ $pageText->name }}" required>
                </div>

                <div class="col-md-6">
                    <textarea class="form-control" name="page_texts[0][text]" required>{{ $pageText->text }}</textarea>
                </div>
            </div>
        </div>>
        <input type="submit" value="Mentés">
    </form>
@endsection
