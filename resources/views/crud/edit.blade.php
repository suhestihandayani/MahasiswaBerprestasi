@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Data Mahasiswa
        </h1>
   </section>
   <div class="content">
       <div class="box box-warning">
           <div class="box-body">
               <div class="row">

                 {!! Form::model($datamahasiswa, ['route' => ['$datamahasiswa.update', $datamahasiswa->id], 'method' => 'patch','enctype' => 'multipart/form-data']) !!}

                        @include('$datamahasiswa.fields')

                   {!! Form::close() !!}
            
               </div>
           </div>
       </div>
   </div>
@endsection