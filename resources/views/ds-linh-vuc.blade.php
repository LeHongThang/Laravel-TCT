@extends('starter')

@section('js')
	<!-- third party js -->
        <script src="{{ asset('assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/dataTables.bootstrap4.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/buttons.flash.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/buttons.print.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/dataTables.keyTable.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/dataTables.select.min.js') }}"></script>
        <script src="{{ asset('assets/libs/pdfmake/pdfmake.min.js') }}"></script>
        <script src="{{ asset('assets/libs/pdfmake/vfs_fonts.js') }}"></script>
        <!-- third party js ends -->

        <script type="text/javascript">
        	$(document).ready(function() {
			    $("#linh-vuc-datatable").DataTable({
			        language: {
			            paginate: {
			                previous: "<i class='mdi mdi-chevron-left'>",
			                next: "<i class='mdi mdi-chevron-right'>"
			            }
			        },
			        drawCallback: function() {
			            $(".dataTables_paginate > .pagination").addClass("pagination-rounded")
			        }
			    });
			});
        </script>
@endsection

@section('css')
	<!-- third party css -->
        <link href="{{ asset('assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/libs/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <!-- third party css end -->
@endsection

@section('main-contain')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Basic Data Table</h4>
                <a href="{{ route('linh-vuc.them-moi') }}" type="button" class="btn btn-success waves-effect waves-light">
                    <span class="btn-label"><i class="mdi mdi-cards-heart"></i></span>Thêm mới lĩnh vực
                </a>
                <p class="text-muted font-13 mb-4">
                    DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction
                    function:
                    <code>$().DataTable();</code>.
                </p>

                <table id="linh-vuc-datatable" class="table dt-responsive nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên lĩnh vực</th>
                            <th></th>
                            
                        </tr>
                    </thead>
                
                
                    <tbody>
                    	@for($i=1;$i<101;$i++)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>Lĩnh vực {{ $i }}</td>
                            <td>
                            	<button type="button" class="btn btn-info waves-effect waves-light">
                                    <span class="btn-label"><i class="mdi mdi-pencil"></i></span>Sửa
                                </button>
                                <button type="button" class="btn btn-danger waves-effect waves-light">
                                    <span class="btn-label"><i class="mdi mdi-trash-can-outline "></i></span>Xóa
                                </button>
                            </td>
                        </tr>
                         @endfor
                        
                    </tbody>
                </table>

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
@endsection