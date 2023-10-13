@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 ">
                            <span class="text-danger border-bottom border-danger pb-2">{{__('ПРОДУКТЫ')}}</span>
                        </h1>
                    </div>
                    <div class="col-sm-6 d-flex justify-content-end">
                        <a class="btn btn-layout text-white" href="{{ route('admin.create') }}">{{__('Добавить')}}</a>
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
                                <th>{{__('Дата создания')}}</th>
                                <th>{{__('Действия')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{$item->article}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>
                                        @if($item->status === 'available')
                                            {{__('Доступен')}}
                                        @endif
                                    </td>
                                    <td>
                                        <ul class="list-group">
                                            @dump(json_encode($item->attributes))
                                            <li class="d-block">Size:  </li>
                                            <li class="d-block">Color:  </li>
                                        </ul>
                                    </td>
                                    <td>{{$item->created_at}}</td>
                                    <td class="d-flex">
                                        <a href=""><i
                                                class="far fa-eye mr-2"></i></a>
                                        <a class="text-success"
                                           href=""><i
                                                class="fas fa-pencil-alt mr-2"></i></a>
                                        <form action="" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="border-0 text-danger bg-transparent" type="submit">
                                                <i class="far fa-times-circle"></i>
                                            </button>
                                        </form>
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
