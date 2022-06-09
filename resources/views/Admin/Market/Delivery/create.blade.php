@extends('admin.layout')
@section('content')
    <div class="container-fluid">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item font-size-12"> <a href="#">خانه</a></li>
                <li class="breadcrumb-item font-size-12"> <a href="#">بخش فروش</a></li>
                <li class="breadcrumb-item font-size-12"> <a href="#">روش های ارسال</a></li>
                <li class="breadcrumb-item font-size-12 active" aria-current="page"> ایجاد روش ارسال</li>
            </ol>
        </nav>
        <x-errors-handeling></x-errors-handeling>

        <section class="row">
            <section class="col-12">
                <section class="main-body-container">
                    <section class="main-body-container-header">
                        <h5>
                            ایجاد روش ارسال
                        </h5>
                    </section>

                    <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                        <a href="" class="btn btn-info btn-sm">بازگشت</a>
                    </section>

                    <section>
                        <form action="{{route('delivery.store')}}" method="POST">
                            @csrf
                            <section class="row">

                                <section class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="">نام روش ارسال</label>
                                        <input name="name" type="text" class="form-control form-control-sm">
                                    </div>
                                </section>
                                <section class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="">هزینه روش ارسال</label>
                                        <input name="cost" type="text" class="form-control form-control-sm">
                                    </div>
                                </section>
                                <section class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="">زمان ارسال</label>
                                        <input name="delivery_time" type="text" class="form-control form-control-sm">
                                    </div>
                                </section>
                                <section class="col-md-6">
                                    <textarea name="description" class="form-control" id="" ></textarea>
                                </section>

                                <section class="col-12">
                                    <input class="btn btn-info" type="submit" value="ثبت">
                                </section>
                            </section>
                        </form>
                    </section>

                </section>
            </section>
        </section>
    </div>
@endsection
