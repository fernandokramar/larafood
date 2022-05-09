@extends ('adminlte::page')

@section('title', "Detalhes do plano {$detail->name}")

@section('content_header')
    
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{route('plans.index')}}">Planos</a></li>
        <li class="breadcrumb-item"><a href="{{route('plans.show', $plan->url)}}">{{$plan->name}}</a></li>
        <li class="breadcrumb-item "><a href="{{route('details.plans.index', $plan->url)}}">Detalhe</a></li>
        <li class="breadcrumb-item active"><a href="{{route('details.plans.show', [$plan->url, $detail->id])}}">Detealhes</a></li>
    </ol>

    <h1>Detalhes do plano {{$detail->name}}<a href="{{route('plans.create')}}" class="btn btn-dark"><i class="fas fa-plus-square"></i></a> </h1>

@stop

@section('content')

    <div class="card">
        <div class="card-body">
            <ul>
                <li>
                    <strong>Nome:</strong> {{ $detail->name }}
                </li>
            </ul>
        </div>
        <div class="card-footer">
            <form action="{{ route('details.plans.destroy', [$plan->url, $detail->id]) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Deletar o detalhe {{ $detail->name }}, do plano {{$plan->name}}</button>
            </form>
        </div>
    </div>
@endsection