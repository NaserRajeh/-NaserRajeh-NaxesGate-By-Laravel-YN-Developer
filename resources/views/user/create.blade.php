@extends('layouts.master')
@section('content')




<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">المستخدمين</h2>
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">الرئيسية</a>
                        </li>
                        <li class="breadcrumb-item active">مستخدم جديد
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
                        <h4 class="card-title">بيانات مستخدم جديد</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" method="POST" action="{{route('User.store')}}"  >
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-label-group">
                                                <input type="text" id="first-name-floating" class="form-control" value="{{ old('name') }}" placeholder="اسم المستخدم" name="name">
                                                <label for="first-name-floating">اسم المستخدم</label>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-label-group">
                                                <input type="email" id="first-name-floating" class="form-control" value="{{ old('email') }}" placeholder="البريد الإلكتروني" name="email">
                                                <label for="first-name-floating">البريد الإلكتروني</label>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-label-group">
                                                <input type="password" id="first-name-floating" class="form-control" placeholder="كلمة المرور" name="password">
                                                <label for="first-name-floating">كلمة المرور</label>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-label-group">
                                                <input type="password" id="first-name-floating" class="form-control" placeholder=" تأكيد كلمة المرور" name="password_confirmation">
                                                <label for="first-name-floating"> تأكيد كلمة المرور</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary mr-1 mb-1">حفظ</button>
                                            <button type="reset" class="btn btn-outline-warning mr-1 mb-1">جديد</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>















@endsection
