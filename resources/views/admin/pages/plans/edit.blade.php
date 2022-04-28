@extends ('adminlte::page')

@section('title', "Editar Plano {$plans->name}")

@section('content_header')
     <h1>Editar Plano {{$plans->name}}</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-body">
            <form action="{{ route('plans.update', $plans->url)}}" class="form" method="POST">
                @csrf
                @method('PUT')

                @include('admin.pages.plans._partials.form')
            </form>
        </div>
    </div>
@endsection