@extends('Admin.layout')

@section('content')
    <div class="container-fluid">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item font-size-12"> <a href="#">خانه</a></li>
                <li class="breadcrumb-item font-size-12"> <a href="#">بخش فروش</a></li>
                <li class="breadcrumb-item font-size-12 active" aria-current="page"> روش های ارسال </li>
            </ol>
        </nav>
        <x-show-messages></x-show-messages>

        <section class="row">
            <section class="col-12">
                <section class="main-body-container">
                    <section class="main-body-container-header">
                        <h5>
                            روش های ارسال
                        </h5>
                    </section>

                    <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                        <a href="{{ route('delivery.create')}}" class="btn btn-info btn-sm">ایجاد روش ارسال
                            جدید </a>
                        <div class="max-width-16-rem">
                            <input type="text" class="form-control form-control-sm form-text" placeholder="جستجو">
                        </div>
                    </section>

                    <section class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>نام روش ارسال</th>
                                    <th>هزینه ارسال</th>
                                    <th>زمان ارسال</th>
                                    <th class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> تنظیمات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($deliveryWay as $delivery)
                                    
                                <tr>
                                    <th>{{$delivery->id}}</th>
                                    <td>{{$delivery->name}}</td>
                                    <td>{{$delivery->cost}}</td>
                                    <td>{{$delivery->delivery_time . ' روز '}}</td>
                                    <td class="width-16-rem text-left">
                                        <a href="{{route('delivery.edit', $delivery)}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> ویرایش</a>
                                        <a class="btn btn-danger btn-sm" href="{{route('delivery.destroy', $delivery)}}"><i class="fa fa-trash-alt"></i>
                                            حذف</a>
                                    </td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </section>

                </section>
            </section>
        </section>
    </div>
@endsection
