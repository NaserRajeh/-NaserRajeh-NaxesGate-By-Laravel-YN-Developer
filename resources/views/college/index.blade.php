@extends('layouts.master')
@section('content')

<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">الكليات</h2>
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">الرئيسية</a>
                        </li>
                        <li class="breadcrumb-item active">عرض الكليات
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<section id="column-selectors">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">قائمة بجميع الكليات</h4>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">

                        @if($Collage->count() == 0)
                                <div class="card-body">
                                    <div class="text-center">
                                        <img  width="200" src="{{URL::asset('app-assets/images/error-empty.png')}}" class="img-fluid">
                                        <p data-v-99f11192="">لا يوجد كليات حتى الأن</p>
                                        <a href="{{route('Collage.create') }}" class="btn btn-primary">إضافة كلية </a>
                                    </div>
                                 </div>
                        @else
                                <div class="table-responsive">
                                    <table class="table table-striped table zero-configuration " id="ex_table" >
                                        <thead>
                                            <tr>
                                                <th>ر.ت</th>
                                                <th>اسم الكلية </th>
                                                <th>  رمز الكلية   </th>
                                                <th>تاريخ الانشاء</th>
                                                <th>الإجراءات</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($Collage as $index => $Collage)
                                            <tr class="rowdate">
                                                <td>{{++$index}}</td>
                                                <td>{{$Collage->co_name}}</td>
                                                <td>{{$Collage->co_code}}</td>
                                                <td>{{$Collage->created_at}}</td>
                                                <td>
                                                   <a href="{{route('Collage.edit',$Collage) }}"><i class="feather icon-edit"></i>{{ 'تعديل ' }}</a>
                                                   <a href="{{route('Collage.show',$Collage) }}"><i class="feather icon-eye"></i>{{ ' عرض' }}</a>
                                                   {{-- <a href="{{ route('',$Collage->un_id) }}"><i class="feather icon-trash"></i>{{ 'حذف' }}</a>  --}}
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>عدد الكليات</th>
                                                <th>{{$Collage->count()}}</th>
                                            </tr>
                                        </tfoot>
                                    </table>

                                </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@push('js')
    <script src="{{URL::asset('app-assets/vendors/js/tables/datatable/pdfmake.min.js')}}"></script>
    <script src="{{URL::asset('app-assets/vendors/js/tables/datatable/vfs_fonts.js')}}"></script>
    <script src="{{URL::asset('app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>

    <script src="{{URL::asset('app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>

    <script src="{{URL::asset('app-assets/js/scripts/datatables/datatable.js')}}"></script>
        <script>

            $('#ex_table').DataTable({

                "language": {
                        "url": "{{ asset('app-assets/js/ar.json') }}"
                    },
                });
        </script>

@endpush

@endsection
