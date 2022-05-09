@extends ('adminlte::page')

@section('title', "Editar detalhe do plano {$detail->name}")

@section('content_header')
    
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{route('plans.index')}}">Planos</a></li>
        <li class="breadcrumb-item"><a href="{{route('plans.show', $plan->url)}}">{{$plan->name}}</a></li>
        <li class="breadcrumb-item "><a href="{{route('details.plans.index', $plan->url)}}">Detalhe</a></li>
        <li class="breadcrumb-item active"><a href="{{route('details.plans.edit', [$plan->url, $detail->id])}}">Editar</a></li>
    </ol>

    <h1>Editar detalhe do plano {{$detail->name}}<a href="{{route('plans.create')}}" class="btn btn-dark"><i class="fas fa-plus-square"></i></a> </h1>

@stop

@section('content')

    <div class="card">
        <div class="card-body">
            <form action="{{ route('details.plans.update', [$plan->url, $detail->id]) }}" method="post">
                @method('PUT')

                @include('admin.pages.plans.details._partials.form')
            </form>
        </div>
    </div>
@endsection