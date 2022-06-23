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
                        <li class="breadcrumb-item active">مادة جديدة
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
                        <h4 class="card-title">بيانات المادة الجديدة</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form-horizontal" action="{{route('Subject.store')}}" method="POST" >
                                @csrf
                            
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label">
                                            @error('name')
                                            <p class="text-danger"> اسم المادة*</p>
                                            @else	
                                            اسم المادة
                                            @enderror	                        
                                        </label>
                                        <div class="col-sm-4">
                                        <input type="text" name="name" value="{{old('name')}}" class="form-control" autocomplete="on">
                                        </div>
                                        <label class="col-sm-2 control-label">
                                            @error('academic_year_id')
                                            <p class="text-danger">السنة الدرسية*</p>
                                            @else	
                                             السنة الدرسية
                                            @enderror
                                        </label>
                                        <div class="col-sm-4">
                                            <select name="academic_year_id" class="form-control">
                                                @foreach ($academic_year as $item)
                                                   <option value="{{$item->id}}">{{$item->academic_years}}</option>   
                                                @endforeach
                                            </select>
                                        </div>                
                                    </div>
                
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label"> 
                                            @error('year_works')
                                            <p class="text-danger">أعمال السنة*</p>
                                            @else	
                                             أعمال السنة
                                            @enderror        
                                        </label>
                                        <div class="col-sm-4">
                                        <input type="number" name="year_works" value="{{old('year_works')}}" class="form-control" >
                                        </div>
                                        <label class="col-sm-2 control-label"> 
                                            @error('final')
                                            <p class="text-danger">الامتحان النهائي*</p>
                                            @else	
                                             الامتحان النهائي
                                            @enderror  
                                        </label>
                                        <div class="col-sm-4">
                                        <input type="number" name="final" value="{{old('final')}}" class="form-control" >
                                        </div>
                                    </div>                                
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row match-height">
            <div class="col-md-12 ">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">بيانات  الجامعة</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form-horizontal" action="{{route('Subject.store')}}" method="POST" >
                                @csrf
                            
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label">
                                            @error('name')
                                            <p class="text-danger"> اسم الجامعة*</p>
                                            @else
                                            اسم الجامعة	
                                            @enderror	                        
                                        </label>
                                        <div class="col-sm-4">
                                        <input type="text" name="name" value="{{old('name')}}" class="form-control" autocomplete="on">
                                        </div>
                                        <label class="col-sm-2 control-label">
                                            @error('academic_year_id')
                                            <p class="text-danger">الكلية*</p>
                                            @else	
                                              الكلية
                                            @enderror
                                        </label>
                                        <div class="col-sm-4">
                                            <select name="academic_year_id" class="form-control">
                                                @foreach ($academic_year as $item)
                                                   <option value="{{$item->id}}">{{$item->academic_years}}</option>   
                                                @endforeach
                                            </select>
                                        </div>                
                                    </div>
                
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label"> 
                                            @error('year_works')
                                            <p class="text-danger">التخصص *</p>
                                            @else	
                                              التخصص
                                            @enderror        
                                        </label>
                                        <div class="col-sm-4">
                                        <input type="number" name="year_works" value="{{old('year_works')}}" class="form-control" >
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
