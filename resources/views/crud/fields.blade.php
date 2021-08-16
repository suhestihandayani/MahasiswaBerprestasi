<div class="form-group col-sm-6">
    {!! Form::label('nim', 'Nim:') !!}
    {!! Form::text('nim', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('nama', 'Nama :') !!}
    {!! Form::text('nama', null,['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('tanggal_lahir', 'Tanggal Lahir :') !!}
    {!! Form::text('tanggal_lahir', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('jenis_kelamin', 'Jenis Kelamin :') !!}
    {!! Form::text('jenis_kelamin', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('alamat', 'Alamat :') !!}
    {!! Form::text('alamat', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('no_hp', 'No Hp :') !!}
    {!! Form::text('no_hp', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('angkatan1.index') }}" class="btn btn-default">Cancel</a>
</div>
