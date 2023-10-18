@extends('admin.layouts.main')
@section('page.title', $item->name)
@section('content')
    <div class="content-wrapper card">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 mb-4">
                        <h1 class="m-0 mr-2 text-white">{{ $item->name }}</h1>
                    </div>
                    <div class="col-sm-6 d-flex justify-content-end">
                        <div class="d-flex pt-1 mr-2">
                            <div class="mr-2">
                                <a class="d-block link-layout text-center bg-dark opacity-50" href="{{ route('admin.edit', $item->id) }}">
                                    <i style="color: #C4C4C4;" class="fas fa-pencil-alt"></i>
                                </a>
                            </div>
                            <form action="{{ route('admin.destroy', $item->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="border-0 bg-dark opacity-50" type="submit">
                                    <i style="color: #C4C4C4;" class="fa fa-trash"></i>
                                </button>
                            </form>
                        </div>
                        <a href="{{ route('admin.index') }}">
                            <img src="{{asset('dist/img/close.png')}}" width="30" height="30" alt="icon">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row invoice-info">
                    <div class="col-sm-2 invoice-col">
                        <div class="p-2 text-secondary">{{ __('Артикул') }}</div>
                        <div class="p-2 text-secondary">{{ __('Название') }}</div>
                        <div class="p-2 text-secondary">{{ __('Статус') }}</div>
                        <div class="p-2 text-secondary">{{ __('Размер') }}</div>
                        <div class="p-2 text-secondary">{{ __('Цвет') }}</div>
                    </div>
                    <div class="col-sm-10 invoice-col">
                        <div class="p-2 text-white align-self-end">{{ $item->article }}</div>
                        <div class="p-2 text-white">{{ $item->name }}</div>
                        <div class="p-2 text-white">
                            @if($item->status === 'available')
                                {{__('Доступен')}}
                            @endif
                        </div>
                        <div class="p-2 text-white">{{ $item->attributes['size'] }}</div>
                        <div class="p-2 text-white">{{ $item->attributes['color'] }}</div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
