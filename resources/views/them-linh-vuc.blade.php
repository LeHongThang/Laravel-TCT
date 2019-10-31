@extends('starter')
@section('main-contain')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-3 header-title">Thêm mới lĩnh vực</h4>

                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tên lĩnh vực</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                        
                    </div>
                    <button type="button" class="btn btn-primary waves-effect waves-light">Thêm</button>
                    <div class="form-group mb-3">
                        
                    </div>
                    
                </form>

            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div>
    <!-- end col -->

    

</div>
@endsection