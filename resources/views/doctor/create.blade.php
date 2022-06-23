@extends('layouts.master')
@section('content')




<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">أعضاء هيئة التدريس</h2>
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">الرئيسية</a>
                        </li>
                        <li class="breadcrumb-item active">عضو هيئة تدريس جديد
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
                {{-- @if ($errors->count())
                    <div class="alert alert-danger">
                        <ul>
                            @if ($errors->all() != null)
                                <li>يرجى تعبئة الحقول المطلوبة</li>
                            @endif
                        </ul>
                    </div>
                @endif --}}
                    <div class="card-header">
                        <h4 class="card-title">بيانات عضو هيئة تدريس جديد</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form-horizontal" action="{{route('Doctor.store')}}" method="POST" >
                                @csrf
                            
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label">
                                            @error('name')
                                            <p class="text-danger"> اسم عضو هيئة التدريس*</p>
                                            @else	
                                            اسم عضو هيئة التدريس
                                            @enderror	                        
                                        </label>
                                        <div class="col-sm-4">
                                        <input type="text" name="name" value="{{old('name')}}" class="form-control" autocomplete="on">
                                        </div>
                                        <label class="col-sm-2 control-label">
                                            @error('email')
                                            <p class="text-danger">البريد الإلكتروني*</p>
                                            @else	
                                             البريد الإلكتروني
                                            @enderror
                                        </label>
                                        <div class="col-sm-4">
                                            <input type="email" name="email" value="{{old('email')}}" class="form-control" >
                                        </div>                
                                    </div>  
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label">
                                            @error('password')
                                            <p class="text-danger"> كلمة المرور*</p>
                                            @else	
                                            كلمة المرور
                                            @enderror	                        
                                        </label>
                                        <div class="col-sm-4">
                                        <input type="password" name="password" value="{{old('password')}}" class="form-control" autocomplete="on">
                                        </div>
                                        <label class="col-sm-2 control-label">
                                            @error('password_confirmation')
                                            <p class="text-danger">تأكيد كلمة المرور*</p>
                                            @else	
                                             تأكيد كلمة المرور
                                            @enderror
                                        </label>
                                        <div class="col-sm-4">
                                            <input type="password" name="password_confirmation" value="{{old('password_confirmation')}}" class="form-control" >
                                        </div>                
                                    </div>  
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label">
                                            @error('place_of_living')
                                            <p class="text-danger"> مكان السكن*</p>
                                            @else	
                                            مكان السكن
                                            @enderror
                                        </label>
                                        <div class="col-sm-4">
                                        <input type="text" name="place_of_living" value="{{old('place_of_living')}}" class="form-control" >
                                        </div>
                
                
                                        <label class="col-sm-2 control-label">
                                            @error('phone')
                                            <p class="text-danger"> رقم الهاتف*</p>
                                            @else	
                                            رقم الهاتف
                                            @enderror
                                        </label>
                                        <div class="col-sm-4">
                                        <input type="text" name="phone" value="{{old('phone')}}" class="form-control">
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
