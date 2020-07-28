@extends("layouts.admin")

@section("content")
    <form method="POST" action="{{ route("admin.product.update") }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group products">
            @foreach($products as $product)
                <div class="form-group row product">

                    <div class="form-group">
                        <input type="text" class="form-control" disabled name="products[{{ $loop->index }}][key]" value="{{ $product->key }}" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="products[{{ $loop->index }}][name]" value="{{ $product->name }}" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="products[{{ $loop->index }}][price]" value="{{ $product->price }}" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="products[{{ $loop->index }}][url]" value="{{ $product->url }}" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="products[{{ $loop->index }}][selector]" value="{{ $product->selector }}" required>
                    </div>

                </div>
            @endforeach
        </div>
        <input type="submit" value="Mentés">
    </form>
@endsection
