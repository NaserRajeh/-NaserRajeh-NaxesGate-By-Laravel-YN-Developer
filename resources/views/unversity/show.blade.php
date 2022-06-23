@extends('layouts.master')
@section('content')
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">الجامعات</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">الرئيسية</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('Unversity.index') }}">عرض الجامعات</a>
                                </li>
                                <li class="breadcrumb-item active">عرض بيانات الجامعات
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
                                                    <h5> اسم الجامعة : {{ $Unversity->un_name }}</h5>
                                                </td>
                                                <td>
                                                    <h5> رقم الجامعة  : {{ $Unversity->un_id }}</h5>
                                                </td>
                                                <td>
                                                    <h5>    الهاتف     : {{ $Unversity->un_phone }}</h5>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h5> الموقع الالكتروني : {{ $Unversity->un_web }}</h5>
                                                </td>  
                                                <td>
                                                    <h5>البريد الالكتروني  : {{ $Unversity->un_email }}</h5>
                                                </td>
                                                <td>
                                                    <h5> نظام التدريس      : {{ $Unversity->un_sys }}</h5>
                                                </td>                                                
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h5> فروع الجامعة : {{ $Unversity->un_branchs }}</h5>
                                                </td>
                                                <td>
                                                    <h5> رمز الجامعة : {{ $Unversity->un_code }}</h5>
                                                </td>                                         
                                            </tr>
                                        </table>
                                        
                                       
                                    </div>
                                    <div class="card-footer">
                                        <form method="POST" action="{{ route('Unversity.destroy',$Unversity->un_id) }}">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-danger detele-user" value="حذف البيانات">
                                            <a href="{{ route('Unversity.edit',$Unversity) }}" class="btn btn-warning">تعديل البيانات</a>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                
                </section>
@endsection
