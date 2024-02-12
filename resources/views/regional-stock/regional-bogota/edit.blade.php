@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Regional Stock
@endsection

@section('content')
<section class="container">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div>
                    <div>
                        <h1 class="text-center">Actualizar inventario de Bogotá</h1>
                    </div>
                    <div>
                        <form method="POST" action="{{ route('regional-bogota.update', $regionalStock->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('regional-stock.regional-bogota.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
