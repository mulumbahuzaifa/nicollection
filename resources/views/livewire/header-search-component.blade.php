<div class="block-search-block">
    <form action="{{ route('product.search') }}" class="form-search form-search-width-category">
        <div class="form-content">
            {{-- <div class="category">
                <input type="hidden" name="product_cat" value="{{ $product_cat }}" id="product-cate">
                <input type="hidden" name="product_cat_id" value="{{ $product_cat_id }}" id="product-cate-id">
                <select title="Category" data-placeholder="{{ str_split($product_cat, 12)[0] }}" class="chosen-select" tabindex="1">
                    <option value="">All</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}" data-id="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div> --}}
            <div class="inner">
                <input type="text" class="input" name="search" value="{{ $search }}" placeholder="Search here">
            </div>
            <button class="btn-search" type="submit">
                <img width="20" src="{{asset('assets/images/png/004-loupe.png')}}" alt="">
            {{-- <span class="icon-search"></span> --}}
        </button>
        </div>
    </form>
</div>
