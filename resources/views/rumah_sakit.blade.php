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

      @forelse ($dataRumahSakit as $row)
      <tr>
        <td class="text-center">{{ $row->id }}</td>
        <td class="pl-3">{{ $row->nama_rumah_sakit }}</td>
        <td class="pl-3">{{ $row->alamat }}</td>
        <td class="pl-3">{{ $row->telp }}</td>
        <td class="pl-3">
          <span class="btn btn-outline-danger" id="del-6442c9a2fd86920c0496b79c" onclick="validateDel('/admin/source/6442c9a2fd86920c0496b79c', '6442c9a2fd86920c0496b79c')">
            <i class="fa fa-trash"></i></span>
          <a href="/admin/source/update/6442c9a2fd86920c0496b79c" class="btn btn-outline-info">
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