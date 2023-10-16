@extends('admin.layouts.main')
@section('page.title', 'Редактировать')
@section('content')
    <div class="content-wrapper">
        <div class="content-header card">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 mb-4">
                        <h2 class="m-0 text-white">
                            {{__('Редактировать')}}
                        </h2>
                    </div>

                    <div class="col-sm-6 d-flex justify-content-end">
                        <a href="{{ route('admin.index') }}">
                            <img src="{{asset('dist/img/close.png')}}" width="30" height="30" alt="icon">
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <form action="{{ route('admin.update', $item->id) }}" method="post">
                            @csrf
                            @method('PATCH')
                            <div class="form-group mb-3 col-8">
                                <label class="text-muted" for="article">{{__('Артикул')}}</label>
                                <input type="text" name="article" id="article"
                                       class="form-control mb-2 @error('article') is-invalid @enderror"
                                       placeholder="{{__('Введите артикул товара')}}" value="{{ $item->article }}">
                                @error('article')
                                <div class="text-danger"> {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3 col-8">
                                <label class="text-muted" for="product-name">{{__('Наименование')}}</label>
                                <input type="text" name="name" id="product-name"
                                       class="form-control mb-2 @error('article') is-invalid @enderror"
                                       placeholder="{{__('Введите наименование товара')}}" value="{{ $item->name }}">
                                @error('name')
                                <div class="text-danger"> {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3 col-8" data-select2-id="29">
                                <label class="text-muted" for="status">{{__('Статус')}}</label>
                                <select class="form-control @error('status') is-invalid @enderror" name="status"
                                        id="status">
                                    <option class="select-layout" value="available">
                                        @if($item->status === 'available')
                                            {{__('Доступен')}}
                                        @endif
                                    </option>
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
                                        <label for="size" class="text-muted" for="size">{{__('Размер')}}</label>
                                        <input type="text" name="size" id="size"
                                               class="form-control @error('size') is-invalid @enderror" value="{{ $item->attributes['size'] }}">
                                        @error('size')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-5">
                                        <label for=color" class="text-muted" for="color">{{__('Цвет')}}</label>
                                        <input type="text" name="color" id="color"
                                               class="form-control @error('color') is-invalid @enderror" value="{{ $item->attributes['color'] }}">
                                        @error('color')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-1 d-flex justify-content-center align-items-end">
                                        <button class="btn" disabled><i class="fa fa-trash"></i></button>
                                    </div>
                                </div>
                                <button type="button" class="btn-add">{{ __('+ Добавить атрибут') }}</button>
                            </div>
                            <div class="form-group mb-3 col-8">
                                <button type="submit" class="btn btn-layout text-white">{{__('Сохранить')}}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
