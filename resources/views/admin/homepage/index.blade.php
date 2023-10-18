@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-sm-12 mb-3">
                        <div class="row">
                    <div class="col-sm-6">
                        <h1 class="m-0">
                            <span class="text-danger border-bottom border-danger pb-2">{{__('ПРОДУКТЫ')}}</span>
                        </h1>
                    </div>
                    <div class="col-sm-6 d-flex justify-content-end">
                        <a class="btn btn-layout text-white" href="{{ route('admin.create') }}">{{__('Добавить')}}</a>
                    </div>
                        </div>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                            <tr>
                                <th>{{__('Номер')}}</th>
                                <th>{{__('Артикул')}}</th>
                                <th>{{__('Название')}}</th>
                                <th>{{__('Статус')}}</th>
                                <th>{{__('Атрибуты')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $item)
                                <tr class="event" onclick="window.location.href='{{ route('admin.show', $item->id) }}'">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->article }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>
                                        @if($item->status === 'available')
                                            {{__('Доступен')}}
                                        @endif
                                    </td>
                                    <td>
                                        <ul class="list-group">

                                            <li class="d-block">Size: {{ $item->attributes['size'] }} </li>
                                            <li class="d-block">Color: {{ $item->attributes['color'] }} </li>
                                        </ul>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
