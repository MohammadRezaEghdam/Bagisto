@extends('admin.layout')
@section('content')
<div class="container-fluid">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"><a href="#">خانه</a></li>
            <li class="breadcrumb-item font-size-12"><a href="#">بخش فروش</a></li>
            <li class="breadcrumb-item font-size-12 active" aria-current="page">دسته بندی</li>
        </ol>
    </nav>


    <section class="row">
        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h5>
                        دسته بندی
                    </h5>
                </section>
                
                <x-show-messages></x-show-messages>
                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom">
                    <a href="{{route('categories.create')}}" class="btn btn-info btn-sm">ایجاد دسته بندی</a>
                    <div class="width-16-rem">
                        <input type="text" class="form-control form-control-sm form-text" placeholder="جستجو">
                    </div>
                </section>

                <section class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th><span class="badge badge-info">{{count($categories)}}</span></th>
                                <th>نام دسته بندی</th>
                                <th>دسته والد</th>
                                <th><i class="fa fa-cogs"></i>تنظیمات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                
                            <tr>
                                <th>{{$category->id}}</th>
                                <td>{{$category->name}} </td>
                                <td>{{$category->parent == null ? "بدون دسته والد" : $category->parent}}</td>
                                <td>
                                    <a href="{{route('categories.edit', $category)}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i>ویرایش</a>
                                    <a class="btn btn-danger btn-sm" type="submit" href="{{ route('categories.destroy', $category->id) }}"><i
                                            class="fa fa-trash-alt"></i>حذف</a>
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
