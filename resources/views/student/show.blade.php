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
                                                    <h5> اسم الطالب : {{ $student->name }}</h5>
                                                </td>
                                                <td>
                                                    <h5> رقم الملف : {{ $student->id }}</h5>
                                                </td>
                                                <td>
                                                    <h5>  اس الكلية  : {{$student->Collage->co_name }}</h5>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h5>اسم الأم : {{ $student->mother_name }}</h5>
                                                </td>  
                                                <td>
                                                    <h5> الجنس  : 
                                                    @if ($student->gender == 0)
                                                     دكر
                                                     @else
                                                     أنثى 
                                                    @endif </h5>
                                                </td>  
                                                <td>
                                                </td>                                                
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h5>الجنسية  : {{ $student->Nationality->name }}</h5>
                                                </td>  
                                                <td>
                                                    <h5> تاريخ الميلاد  : {{ $student->date_of_birth }}</h5>
                                                </td>  
                                                <td>
                                                    <h5>اسم التخصص : {{ $student->Specialization->sp_name ?? 'لا يوجد تخصص ' }}</h5>
                                                </td>                                                
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h5>مكان السكن : {{ $student->place_of_living }}</h5>
                                                </td>  
                                                <td>
                                                    <h5> رقم الهاتف : {{ $student->phone }}</h5>
                                                </td>  
                                                <td>
                                                    <h5>البريد الإلكتروني : {{ $student->email }}</h5>
                                                </td>                                                
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h5> السنة الدراسية  : {{ $student->AcademicYear->academic_years }}<h5>
                                                </td> 
                                                <td>
                                                    <h5> صفة القيد  :
                                                        @if ($student->recipe == 0)
                                                        مستجد
                                                        @else
                                                        نظامي 
                                                       @endif<h5>
                                                </td><td></td>                                               
                                            </tr>
                                            <tr >
                                                <td >
                                                    <h5> الملاحظات  : {{ $student->note }}</h5>
                                                </td><td></td><td></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h5>تاريخ تسجيل البيانات  : {{ $student->created_at }}</h5>
                                                </td><td></td><td></td>
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
