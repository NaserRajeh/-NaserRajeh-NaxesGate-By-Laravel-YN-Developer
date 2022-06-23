@extends('layouts.master')
@section('content')




<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">التخصصات</h2>
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">الرئيسية</a>
                        </li>
                        <li class="breadcrumb-item active"> اضافة تخصص 
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
                        <h4 class="card-title">بيانات  التخصص</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form-horizontal"  action="{{route('specialization.update',$Specialization)}}" method="POST" >
                                @csrf
                                @method('PUT')

                                <div class="card-body">
                            
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label">
                                            @error('sp_name')
                                            <p class="text-danger"> اسم التخصص*</p>
                                            @else	
                                            اسم التخصص
                                            @enderror	
                                        </label>
                                        <div class="col-sm-4">
                                        <input type="text"  name="co_name" value="{{$Specialization->sp_name}}" class="form-control" autocomplete="on">
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
