@extends('layouts.master')
@section('content')

<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">المواد</h2>
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">الرئيسية</a>
                        </li>
                        <li class="breadcrumb-item active">عرض المواد
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
                    <h4 class="card-title">قائمة بجميع المواد في الكلية </h4>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">

                        @if($subjects->count() == 0)

                                <div class="card-body">
                                    <div class="text-center">
                                        <img  width="200" src="{{URL::asset('app-assets/images/error-empty.png')}}" class="img-fluid">
                                        <p data-v-99f11192="">لا يوجد مواد حتى الأن</p>
                                        <a href="{{route('Subject.create') }}" class="btn btn-primary">إضافة مادة جديدة</a>
                                    </div>
                                 </div><!-- bd -->
                        @else
                                <div class="table-responsive">
                                    <table class="table table-striped table zero-configuration " id="ex_table" >
                                        <thead>
                                            <tr>
                                                <th>ر.ت</th>
                                                <th>اسم المادة </th>
                                                <th>السنة الدراسية</th>                                           
                                                <th>الإجراءات</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($subjects as $index => $subject)
                                            <tr class="rowdate">
                                                <td>{{++$index}}</td>
                                                <td>{{$subject->name}}</td>
                                                <td>{{$subject->AcademicYear->academic_years}}</td>
                                                <td>
                                                    <a href="{{route('Subject.show',$subject) }}"><i class="feather icon-eye"></i></a>
                                                    <a href="{{route('Subject.edit',$subject) }}"><i class="feather icon-edit"></i></a>
                                                    <a href=""> <i class="feather icon-trash"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>عدد المواد</th>
                                                <th>{{$subjects->count()}}</th>

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
