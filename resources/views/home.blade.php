@extends('layouts.admin')

@section('content')
{{--  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>  --}}
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="/home">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Data Masukan Mahasiswa</li>
        </ol>

        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Example</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th width="10%">Nama</th>
                    <th width="5%">Fakultas</th>
                    <th width="10%">Email</th>
                    <th width="10%">File</th>
                    <th width="50%">Masukan</th>
                    <th width="20%">Tanggal</th>
                    <th width="30%">Action</th>
                  </tr>
                </thead>
                {{--  <tfoot>
                  <tr>
                    <th width="35%">Nama</th>
                    <th width="10%">Fakultas</th>
                    <th width="35%">Email</th>
                    <th width="10%">File</th>
                    <th width="50%">Masukan</th>
                    <th width="35%">Tanggal</th>
                    <th width="30%">Action</th>
                  </tr>
                </tfoot>  --}}
                <tbody>                
                @foreach ($complaints as $row)
                  {{--  @foreach($row->facultys as $fa)  --}}
                  <tr>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->fakultas }}</td>
                    <td>{{ $row->email }}</td>
                    <td><img src="{{URL::to('/file/'.$row->file) }}" class="img-thumbnail" width="75" /></td>
                    <td>{{ substr(strip_tags($row->masukan),0,25) }}<a href="/baca"> ...baca lainnya</a> </td>
                    <td>{{ substr(strip_tags($row->created_at),0,10) }}</td>
                    <td>
                      <button class="btn btn-primary" type="button">
                        tampilkan
                      </button>
                    </td>
                  </tr>
                  {{--  {!! $data->links() !!}    --}}
                  {{--  @endforeach   --}}
                
                  
                @endforeach                                              
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
@endsection
