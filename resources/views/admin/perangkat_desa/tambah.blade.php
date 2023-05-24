@extends('admin.layouts.navbar')
@section('container')

<form action="{{ route('perangkatdesa.store') }}" method="post">
    @csrf
      <div class="row">
        <div class="col-md-12">
    <div class="form-group">
        <label for="nama_mapel">Periode Jabatan</label><br>
        <select   class="js-example-basic-single" id="id_periode" name="mapel_id" data-width="100%">
          <option value="">--- Pilih Periode---</option>
          @foreach ($periode as $data)
            <option value="{{ $data->id }}">{{ $data->periode_awal }}/{{$data->periode_akhir}}</option>
          @endforeach
        </select>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
  </form>
</div>
</div>
@endsection
