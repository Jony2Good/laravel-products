@extends('admin.layouts.main')
@section('page.title', 'Добавить товар')
@section('content')
    <div class="content-wrapper">
        <div class="content-header card">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 mb-4">
                        <h2 class="m-0 text-white">
                            {{__('Добавить продукт')}}
                        </h2>
                    </div>

                    <div class="col-sm-6 d-flex justify-content-end">
                        <a href="{{ route('admin.index') }}">
                            <img src="{{asset('dist/img/close.png')}}" width="30" height="30">
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <form action="{{ route('admin.store') }}" method="post">
                            @csrf
                            @method('POST')
                            <div class="form-group mb-3 col-8">
                                <label class="text-muted" for="article">{{__('Артикул')}}</label>
                                <input type="text" name="article" id="article"
                                       class="form-control mb-2 @error('article') is-invalid @enderror"
                                       placeholder="{{__('Введите артикул товара')}}">
                                @error('article')
                                <div class="text-danger"> {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3 col-8">
                                <label class="text-muted" for="product-name">{{__('Наименование')}}</label>
                                <input type="text" name="name" id="product-name"
                                       class="form-control mb-2 @error('article') is-invalid @enderror"
                                       placeholder="{{__('Введите наименование товара')}}">
                                @error('name')
                                <div class="text-danger"> {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3 col-8" data-select2-id="29">
                                <label class="text-muted" for="status">{{__('Статус')}}</label>
                                <select class="form-control @error('status') is-invalid @enderror" name="status"
                                        id="status">
                                    <option disabled selected hidden>{{__('Без категории')}}</option>
                                    <option class="select-layout" value="available">{{ __('Доступен') }}</option>
                                    <option class="select-layout" value="unavailable">{{ __('Недоступен') }}</option>
                                </select>
                                @error('status')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-5 col-8">
                                <h4 class="text-white">{{__('Атрибуты')}}</h4>
                                <div class="row mb-3">
                                    <div class="col-5">
                                        <label class="text-muted" for="size">{{__('Размер')}}</label>
                                        <input type="text" name="size"
                                               class="form-control @error('size') is-invalid @enderror">
                                        @error('size')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-5">
                                        <label class="text-muted" for="color">{{__('Цвет')}}</label>
                                        <input type="text" name="color"
                                               class="form-control @error('color') is-invalid @enderror">
                                        @error('color')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-1 d-flex justify-content-center align-items-end">
                                        <button class="btn"><i class="fa fa-trash"></i></button>
                                    </div>
                                </div>
                                <button type="button" class="btn-add">+ Добавить атрибут</button>
                            </div>
                            <div class="form-group mb-3 col-8">
                                <button type="submit" class="btn btn-layout text-white">{{__('Добавить')}}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
