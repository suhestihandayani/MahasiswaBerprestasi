@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Angkatan 1 {{ $angkatan1->nim }}
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>
        
        <div class="clearfix"></div>
        <div class="box box-warning">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    
                   @include('angkatan1.show_fields')
                </div>
            </div>
            <div class="text-center">

        </div>
    </div>
@endsection
