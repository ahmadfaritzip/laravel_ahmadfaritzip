@extends('master')

@section('konten')

<div class="shadow col p-3 ml-md-3 mt-md-0 mt-3">
  <p class="fs-5">Tampil Data</p>
  <hr>
  <table id="dataTable" class="table table-sm table-hover table-striped table-bordered dt-responsive nowrap" style="width:100%">
    <thead>
      <tr>
        <th class="text-center">No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>No Telp</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

      @forelse ($dataPasien as $pasien)
      <tr>
        <td class="text-center">{{ $pasien->id }}</td>
        <td class="pl-3">{{ $pasien->nama }}</td>
        <td class="pl-3">{{ $pasien->alamat }}</td>
        <td class="pl-3">{{ $pasien->telp }}</td>
        <td class="pl-3">
          <span class="btn btn-outline-danger" 
            id="del-{{ $pasien->id }}" 
            onclick="validateDel('{{route('pasiens.destroy', $pasien->id)}}', '{{ $pasien->id }}')">
            <i class="fa fa-trash"></i></span>
          <a href="/admin/source/update/{{ $pasien->id }}" class="btn btn-outline-info">
            <i class="fa fa-upload"></i>
          </a>
        </td>
      </tr>

      @empty
      <tr>
        <td colspan="8">
          No record found!
        </td>
      </tr>

      @endforelse

    </tbody>
  </table>
</div>

@endsection