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
                                <li class="breadcrumb-item"><a href="{{ route('Collage.index') }}">عرض الكليات</a>
                                </li>
                                <li class="breadcrumb-item active">عرض بيانات الكليات
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
                                                    <h5> اسم الكلية   : {{ $Collage->co_name }}</h5>
                                                </td>
                                                <td>
                                                    <h5>  رمز الكلية  : {{ $Collage->co_code }}</h5>
                                                </td>
                                                <td>
                                                    <h5> تاريخ الانشاء : {{ $Collage->created_at }}</h5>
                                                </td>
                                            </tr>
                                        </table>   
                                    </div>
                                    <div class="card-footer">
                                        <a href="{{ route('Collage.edit',$Collage) }}" class="btn btn-warning">تعديل البيانات</a>
                                        <a href="" class="btn btn-danger">حدف البيانات</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                
                </section>
@endsection
