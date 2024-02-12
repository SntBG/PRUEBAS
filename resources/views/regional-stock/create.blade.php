@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Regional Stock
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Creación Stock de Bogotá</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('regional-stocks.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('regional-stock.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
