@extends('starter')
@section('main-contain')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-3 header-title">Thêm mới lĩnh vực</h4>

                <form action="{{ route('linh-vuc.xu-ly-them-linh-vuc') }}">
                    <div class="form-group">
                        <label for="ten_linh_vuc">Tên lĩnh vực</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                        
                    </div>
                    <button type="button" class="btn btn-primary waves-effect waves-light">Thêm lĩnh vực</button>
                    <div class="form-group mb-3">
                        
                    </div>
                    
                </form>

            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div>
    <!-- end col -->

    

</div>
@endsection