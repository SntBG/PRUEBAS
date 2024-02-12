@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Regional Stock
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Regional Stockm Bogota</span>
                    </div>
                    <div class="card-body">
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
