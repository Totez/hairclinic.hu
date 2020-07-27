@extends("layouts.admin")

@section("content")
    <form method="POST" action="{{ route("admin.product.update") }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group products">
            <div class="form-group row product">
                @php($product = $products["sampon"])

                <input type="hidden" name="products[0][key]" value="{{ $product->key }}" required>

                <div class="form-group">
                    <input type="text" class="form-control" name="products[0][name]" value="{{ $product->name }}" required>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control " name="products[0][package]" value="{{ $product->package }}" required>
                </div>

                <div class="form-group">
                    <input type="number" class="form-control" name="products[0][dm]" value="{{ $product->dm }}">
                </div>

                <div class="form-group">
                    <input type="number" class="form-control" name="products[0][rossmann]" value="{{ $product->rossmann }}">
                </div>
            </div>
        </div>
        <input type="submit" value="Mentés">
    </form>
@endsection
