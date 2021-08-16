<div class="form-group col-sm-6">
    {!! Form::label('nim', 'Nim :') !!}
    {!! Form::label('nim',  $angkatan1->nim, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('nama', 'Nama :') !!}
    {!! Form::label('nama',  $angkatan1->nama,['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('tanggal_lahir', 'Tanggal Lahir :') !!}
    {!! Form::label('tanggal_lahir',  $angkatan1->tanggal_lahir, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('jenis_kelamin', 'Jenis Kelamin:') !!}
    {!! Form::label('jenis_kelamin',  $angkatan1->jenis_kelamin, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('alamat', 'Alamat :') !!}
    {!! Form::label('alamat',  $angkatan1->alamat, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('no_hp', 'No Hp :') !!}
    {!! Form::label('no_hp',  $angkatan1->no_hp, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('created_at', 'Waktu Tambah:') !!}
    {!! Form::label('created_at',  $angkatan1->created_at->format('d/m/Y H:i:s'), ['class' => 'form-control']) !!}
</div>


<div class="form-group col-sm-6">
    {!! Form::label('updated_at', 'Waktu Ubah:') !!}
    {!! Form::label('updated_at',  $angkatan1->updated_at->format('d/m/Y H:i:s'), ['class' => 'form-control']) !!}
</div>
    <a href="{{ route('angkatan1.index') }}" class="btn btn-warning" style="margin-left: 15px;">Kembali</a>
</div>


