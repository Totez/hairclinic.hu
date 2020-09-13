@extends("layouts.admin")

@section("content")
    <form method="POST" action="{{ route("admin.product.update") }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group products">
            @foreach($products as $product)
                <div class="form-group row product">

                    <input type="hidden" name="products[{{ $loop->index }}][key]" value="{{ $product->key }}">

                    <div class="form-group">
                        <input type="text" class="form-control" disabled value="{{ $product->key }}" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control @error("products.$loop->index.name") is-invalid @enderror" name="products[{{ $loop->index }}][name]" value="{{ $product->name }}" required>
                        @error("products.$loop->index.name")
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control @error("products.$loop->index.price") is-invalid @enderror" name="products[{{ $loop->index }}][price]" value="{{ $product->price }}" required>
                        @error("products.$loop->index.price")
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control @error("products.$loop->index.shop_url") is-invalid @enderror" name="products[{{ $loop->index }}][shop_url]" value="{{ $product->shop_url }}" required>
                        @error("products.$loop->index.shop_url")
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control @error("products.$loop->index.update_url") is-invalid @enderror" name="products[{{ $loop->index }}][update_url]" value="{{ $product->update_url }}" required>
                        @error("products.$loop->index.update_url")
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control @error("products.$loop->index.selector") is-invalid @enderror" name="products[{{ $loop->index }}][selector]" value="{{ $product->selector }}" required>
                        @error("products.$loop->index.selector")
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control @error("products.$loop->index.protocol") is-invalid @enderror" name="products[{{ $loop->index }}][protocol]" value="{{ $product->protocol }}" required>
                        @error("products.$loop->index.protocol")
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                </div>
            @endforeach
        </div>
        <input type="submit" value="Mentés">
    </form>
@endsection
