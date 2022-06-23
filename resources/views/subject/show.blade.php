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
                                <li class="breadcrumb-item"><a href="{{ route('Student.index') }}">عرض الطلاب</a>
                                </li>
                                <li class="breadcrumb-item active">عرض بيانات طالب
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <section id="column-selectors">
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-xl-12 col-md-12 col-sm-12">
                            <div class="card">

                                <div class="card-content">
                                    <div class="card-body">
                                        <table class="table table-striped table zero-configuration ">
                                            <tr>
                                                <td>
                                                    <h5> اسم المادة : {{ $subject->name }}</h5>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h5> السنة الدراسية  : {{ $subject->AcademicYear->academic_years }}<h5>
                                                </td>                                                        
                                            </tr>
                                            <tr >
                                                <td >
                                                    <h5> أعمال الفصل  : {{ $subject->year_works }}</h5>
                                                </td>
                                            </tr>
                                            <tr >
                                                <td >
                                                    <h5>  النهائي  : {{ $subject->final }}</h5>
                                                </td>
                                            </tr>
                                            <tr >
                                                <td >
                                                    <h5> النهاية العظمى  : {{ $subject->end_degree }}</h5>
                                                </td>
                                            </tr>
                                            <tr >
                                                <td >
                                                    <h5> أستاد المادة  : {{$subject->Doctor ?? 'لايوجد'}} </h5>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h5>تاريخ تسجيل البيانات  : {{ $subject->created_at }}</h5>
                                                </td>
                                            </tr>
                                        </table>
                                        
                                       
                                    </div>
                                    <div class="card-footer">
                                        <a href="" class="btn btn-warning">تعديل البيانات</a>
                                        <a href="" class="btn btn-danger">حدف البيانات</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                
                </section>
@endsection
