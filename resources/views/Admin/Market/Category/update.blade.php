@extends('admin.layout')

@section('content')
<div class="container-fluid">
    
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item font-size-12"> <a href="#">خانه</a></li>
          <li class="breadcrumb-item font-size-12"> <a href="#">بخش فروش</a></li>
          <li class="breadcrumb-item font-size-12"> <a href="#">دسته بندی</a></li>
          <li class="breadcrumb-item font-size-12 active" aria-current="page"> ایجاد دسته بندی</li>
        </ol>
      </nav>
    
    
      <section class="row">
        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h5>
                      ایجاد دسته بندی
                    </h5>
                </section>
    
                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                    <a href="{{ route('category.index') }}" class="btn btn-danger btn-sm">بازگشت</a>
                </section>
    
                <section>
                    <form action="{{route('categories.update', $category)}}" method="POST">
                        @csrf
                        <section class="row">
    
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">نام دسته</label>
                                    <input name="name" type="text" class="form-control form-control-sm" value="{{$category->name}}">
                                </div>
                            </section>
    
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">دسته والد</label>
                                    <select name="parent" id="" class="form-control form-control-sm">
                                        <option value="">دسته را انتخاب کنید</option>
                                        @foreach ($categories as $item)
                                            
                                        <option value="{{$item->name}}" {{$item->name == $category->parent ? 'selected' : ''}} >{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </section>
                            <section class="col-12">
                                <input type="submit" class="btn btn-primary btn-sm" value="ثبت">
                            </section>
                        </section>
                    </form>
                </section>
    
            </section>
        </section>
    </section>
</div>

@endsection