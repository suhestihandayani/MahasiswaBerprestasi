<div class="table-responsive">
    <table class="table" id="data_mhs-table">
            <tr>
                <th>Nim</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>No Hp</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 0;?>
        @foreach($angkatan1 as $item)
        <?php $no++ ;?>
            <tr>
                <td>{{ $item->nim }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->tanggal_lahir }}</td>
                <td>{{ $item->jenis_kelamin }}</td>
                <td>{{ $item->alamat}}</td>
                <td>{{ $item->no_hp }}</td>
                <td>

                     {!! Form::open(['route' => ['angkatan1.destroy', $item->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('angkatan1.show', [$item->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('angkatan1.edit', [$item->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Apa Kamu Yakin Untuk Hapus?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
