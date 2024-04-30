<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
    </style>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Edit Category
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('admin.categories') }}" style="color: whitesmoke" class="btn btb-success pull-right"> All Categories</a>
                            </div>
                        </div>
                    </div>
                    @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                    @endif
                    <div class="panel-body">
                        <form action="" class="form-horizontal" wire:submit.prevent="updateCategory">
                            <div class="form-group">
                                <label for="" class="col-md-4 control-lable">Category Name</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Category Name" class="form-control input-md" wire:model="name" wire:keyup="generateslug">
                                    @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-lable">Category Slug</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Category Slug" class="form-control input-md" wire:model="slug">
                                    @error('slug')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                </div>
                            </div>
                            {{-- <div class="form-group">
                                <label for="" class="col-md-4 control-lable">Product Type</label>
                                <div class="col-md-4">
                                    <select name="" id="p-type" class="form-control input-md" wire:model="type">
                                        <option value="" class="active" >Select Type</option>
                                        <option value="product">Product</option>
                                        <option value="input">Input</option>
                                    </select>
                                    @error('type')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                </div>
                            </div> --}}
                            <div class="form-group">
                                <label for="" class="col-md-4 control-lable"></label>
                                <div class="col-md-4">
                                    <Button type="submit" class="btn btn-primary">Update</Button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
{{-- <script>
    var input = document.getElementById("p-type");
    var type = {!! json_encode($type) !!};
    $(input).on('change', function() {
        $('option:selected', this).addClass('active').siblings().removeClass('active');
        @this.set('type', this.value )

});
</script> --}}

@endpush
