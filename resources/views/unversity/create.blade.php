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
                        <li class="breadcrumb-item active"> اضافة جامعة
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="content-body">

    <section id="floating-label-layouts">
        <div class="row match-height">
            <div class="col-md-12 ">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">بيانات الجامعات </h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form-horizontal" action="{{route('Unversity.store')}}" method="POST" >
                                @csrf
                            
                                <div class="card-body">                            
                                    <div class="form-group row"> 
                                        <label class="col-sm-2 control-label">
                                            @error('un_name')
                                            <p class="text-danger">اسم الجامعة*</p>
                                            @else	
                                            اسم الجامعة
                                            @enderror
                                        </label> 
                                         <div class="col-sm-4">
                                            <input type="text" name="un_name" value="{{old('un_name')}}" class="form-control" >
                                        </div>
                            
                                        <label class="col-sm-2 control-label">
                                            @error('un_address')
                                            <p class="text-danger"> عنوان الجامعة*</p>
                                            @else	
                                            عنوان الجامعة
                                            @enderror
                                        </label> 
                                             
                                        <div class="col-sm-4">
                                            <input type="text" name="un_address" value="{{old('un_address')}}" class="form-control" >
                                        </div>
                                    </div>
                                </div> 
                                     
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label">
                                            @error('un_web')
                                            <p class="text-danger"> الموقع الالكتروني*</p>
                                            @else	
                                            الموقع الالكتروني
                                            @enderror
                                        </label> 
                                        <div class="col-sm-4">
                                        <input type="text" name="un_web" value="{{old('un_web')}}" class="form-control" >
                                        </div>
                                        <label class="col-sm-2 control-label">
                                            @error('un_sys')
                                            <p class="text-danger"> التدريس *</p>
                                            @else	
                                             التدريس
                                            @enderror
                                        </label> 
                                        <div class="col-sm-4">
                                        <input type="text" name="un_sys" value="{{old('un_sys')}}" class="form-control" >
                                        </div>
                                    </div>
                            
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label">
                                            @error('un_email')
                                            <p class="text-danger"> البريد الالكتروني*</p>
                                            @else	
                                            البريد الالكتروني
                                            @enderror
                                        </label>
                                        <div class="col-sm-4">
                                        <input type="email" name="un_email" value="{{old('un_email')}}" class="form-control">
                                        </div>

                                        <label class="col-sm-2 control-label">
                                            @error('un_phone')
                                            <p class="text-danger"> رقم الهاتف*</p>
                                            @else	
                                            رقم الهاتف
                                            @enderror
                                        </label>
                                        <div class="col-sm-4">
                                        <input type="number" name="un_phone" value="{{old('un_phone')}}" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label">
                                            @error('un_branchs')
                                            <p class="text-danger">  الفروع*</p>
                                            @else	
                                            الفروع
                                            @enderror
                                        </label>
                                        <div class="col-sm-4">
                                        <input type="text" name="un_branchs" value="{{old('un_branchs')}}" class="form-control">
                                        </div>

                                        <label class="col-sm-2 control-label">
                                            @error('un_code')
                                            <p class="text-danger"> رمز الجامعة*</p>
                                            @else	
                                            رمز الجامعة
                                            @enderror
                                        </label> 
                                             
                                        <div class="col-sm-4">
                                            <input type="text" name="un_code" value="{{old('un_code')}}" class="form-control" >
                                        </div>
                                        </div>
                                    </div>
                                        </div>
                                    </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">إضـافـة</button>
                                </div>
                                <!-- /.card-footer -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>















@endsection
