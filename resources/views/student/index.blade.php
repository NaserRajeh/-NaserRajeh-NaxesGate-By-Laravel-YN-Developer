@extends('layouts.master')
@section('content')

<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">الطلاب</h2>
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">الرئيسية</a>
                        </li>
                        <li class="breadcrumb-item active">عرض الطلاب
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
                    <h4 class="card-title">قائمة بجميع الطلاب في الكلية </h4>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">

                        @if($students->count() == 0)

                                <div class="card-body">
                                    <div class="text-center">
                                        <img  width="200" src="{{URL::asset('app-assets/images/error-empty.png')}}" class="img-fluid">
                                        <p data-v-99f11192="">لا يوجد طلاب حتى الأن</p>
                                        <a href="{{route('Student.create') }}" class="btn btn-primary">إضافة طالب جديد</a>
                                    </div>
                                 </div><!-- bd -->
                        @else
                                <div class="table-responsive">
                                    <table class="table table-striped table zero-configuration " id="ex_table" >
                                        <thead>
                                            <tr>
                                                <th>ر.ت</th>
                                                <th>اسم الطالب </th>
                                                <th> الكلية</th>
                                                <th> التخصص</th>
                                                <th>السنة الدراسية</th>
                                                <th>مكان السكن </th>
                                                <th>رقم الهاتف</th>
                                                <th>الإجراءات</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($students as $index => $student)
                                            <tr class="rowdate">
                                                <td>{{++$index}}</td>
                                                <td>{{$student->name}}</td>
                                                {{-- ??'co_id Not found' عندما لاتوجد بيانات --}}
                                                <td>{{$student->Collage->co_name}}</td>
                                                <td>{{$student->Specialization->sp_id ??'co_id Not found' }}</td>
                                                <td>{{$student->AcademicYear->academic_years}}</td>
                                                <td>{{$student->place_of_living}}</td>
                                                <td>{{$student->phone}}</td>
                                                <td>
                                                    <a href="{{route('Student.show',$student) }}"><i class="feather icon-eye"></i></a>
                                                    <a href="{{route('Student.edit',$student) }}"><i class="feather icon-edit"></i></a>
                                                    <a href=""> <i class="feather icon-trash"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>عدد الطلاب</th>
                                                <th>{{$students->count()}}</th>

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
