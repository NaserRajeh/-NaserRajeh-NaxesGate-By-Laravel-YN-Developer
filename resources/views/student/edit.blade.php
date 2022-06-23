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
                        <li class="breadcrumb-item active">طالب جديد
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
                        <h4 class="card-title">بيانات طالب جديد</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form-horizontal" data-parsley-validate="" action="{{route('Student.update',$student)}}" method="POST" >
                                @csrf
                                @method('PUT')

                                <div class="card-body">
                            
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label">
                                            @error('name')
                                            <p class="text-danger"> اسم الطالب*</p>
                                            @else	
                                            اسم الطالب
                                            @enderror	
                                        </label>
                                        <div class="col-sm-4">
                                        <input type="text"  name="name" value="{{$student->name}}" class="form-control" autocomplete="on">
                                        {{-- @error('name')
                                        <div class=" alert-danger">{{ $message }}</div>
                                        @enderror					    --}}
                                        </div>
                            
                                        <label class="col-sm-2 control-label">
                                            @error('number_student')
                                            <p class="text-danger"> رقم القيد*</p>
                                            @else	
                                            رقم القيد
                                            @enderror
                                        </label>
                                        <div class="col-sm-4">
                                        <input type="text" name="number_student" value="{{$student->number_student}}" class="form-control" >
                                        </div>
                                    </div>
                            
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label">
                                            @error('nationality_id')
                                            <p class="text-danger"> الجنسية*</p>
                                            @else	
                                            الجنسية
                                            @enderror
                                        </label>            			
                                        <div class="col-sm-4">
                                            <select name="nationality_id" class="form-control">
                                                @foreach ($nationality as $item)
                                                   <option value="{{$item->id}}">{{$item->name }}</option>   
                                                @endforeach
                                            </select>                                
                                        </div>
                            
                                        <label class="col-sm-2 control-label">
                                            @error('id_number')
                                            <p class="text-danger"> رقم الوطني*</p>
                                            @else	
                                            رقم الوطني
                                            @enderror
                                        </label> 
                                             
                                        <div class="col-sm-4">
                                            <input type="text" name="id_number" value="{{$student->id_number}}" class="form-control" >
                                        </div>
                                    </div> 
                                     
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label">
                                            @error('date_of_birth')
                                            <p class="text-danger"> تاريخ الميلاد*</p>
                                            @else	
                                            تاريخ الميلاد
                                            @enderror
                                        </label> 
                                        <div class="col-sm-4">
                                        <input type="date" name="date_of_birth" value="{{$student->date_of_birth}}" class="form-control" >
                                        </div>
                                        <label class="col-sm-2 control-label">
                                            @error('gender')
                                            <p class="text-danger"> الجنس*</p>
                                            @else	
                                            الجنس
                                            @enderror
                                        </label> 
                                        <div class="col-sm-4">
                                            <select name="gender" class="form-control">
                                                <option value="0" {{ $student->gender==0 ?'selected' : '' }}>دكر</option>
                                                <option value="1" {{ $student->gender==1 ?'selected' : '' }}>أنثى</option>
                                            </select>       
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
                                        <input type="text" name="place_of_living" value="{{$student->place_of_living}}" class="form-control" >
                                        </div>
                
                
                                        <label class="col-sm-2 control-label">
                                            @error('mother_name')
                                            <p class="text-danger"> اسم الأم*</p>
                                            @else	
                                            اسم الأم
                                            @enderror
                                        </label>
                                        <div class="col-sm-4">
                                        <input type="text" name="mother_name" value="{{$student->mother_name}}" class="form-control">
                                        </div>
                                    </div>
                                
                                    <div class="form-group row">
                
                                        <label class="col-sm-2 control-label">
                                            @error('email')
                                            <p class="text-danger"> البريد الإلكتروني*</p>
                                            @else	
                                            البريد الإلكتروني
                                            @enderror
                                        </label>
                                        <div class="col-sm-4">
                                        <input type="text" name="email" value="{{$student->email}}" class="form-control">
                                        </div>
                            
                                        <label class="col-sm-2 control-label">
                                            @error('phone')
                                            <p class="text-danger"> رقم الهاتف*</p>
                                            @else	
                                            رقم الهاتف
                                            @enderror
                                        </label>
                                        <div class="col-sm-4">
                                        <input type="text" name="phone" value="{{$student->phone}}" class="form-control">
                                        </div>
                                    </div>
                            
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label">
                                            @error('recipe')
                                            <p class="text-danger"> صفة القيد*</p>
                                            @else	
                                            صفة القيد
                                            @enderror
                                        </label>
                                        <div class="col-sm-4">
                                            <select name="recipe" class="form-control">
                                                <option value="0" {{ $student->recipe==0 ?'selected' : '' }}>مستجد</option>
                                                <option value="1" {{ $student->recipe==1 ?'selected' : '' }}>نظامي</option>
                                            </select>                            
                                        </div>
                            
                
                                        <label class="col-sm-2 control-label">
                                            @error('academic_year_id')
                                            <p class="text-danger"> السنة الدراسية*</p>
                                            @else	
                                            السنة الدراسية
                                            @enderror
                                        </label>
                                        <div class="col-sm-4">
                                            <select name="academic_year_id" class="form-control">
                                                @foreach ($academic_year as $item)
                                                   <option value="{{$item->id}}" {{$item->id== $student->academic_year_id ? 'selected' : ' ' }}>{{$item->academic_years}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                            
                                    <div class="form-group row">
                
                                        <label class="col-sm-2 control-label">
                                            @error('date_of_registration')
                                            <p class="text-danger"> تاريخ التسجيل*</p>
                                            @else	
                                            تاريخ التسجيل
                                            @enderror
                                        </label>
                                        <div class="col-sm-4">
                                        <input type="date" name="date_of_registration" value="{{$student->date_of_registration}}" class="form-control" >
                                        </div>
                            
                                        <label class="col-sm-2 control-label">
                                            @error('note')
                                            <p class="text-danger"> ملاحظات*</p>
                                            @else	
                                            ملاحظات
                                            @enderror
                                        </label>
                                        <div class="col-sm-4">
                                            <textarea name="note"  cols="40" rows="4"  class="form-control">{{ $student->note }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">حفظ التعديل</button>
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
