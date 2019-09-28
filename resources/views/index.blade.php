@extends('layouts.layout')

@section('content')

@if ($message = Session::get('success'))
    <div class="alert alert-success" autofocus>
        <p>{{ $message }}</p>
    </div>
@endif

    <div class="site-section" id="contact-section">
      <div class="container">

        <div class="row justify-content-center">
          <div class="col-md-7">


            
            <h2 class="section-title mb-3">Mulai Sekarang!</h2>
            <p class="mb-5">Silahkan kamu tulisakan ide dan masukanmu untuk Univeritas, mari kita bangun universitas dari ide dan gagasan kita.</p>
          
            <form method="post" action="{{ route('complain.store') }}" enctype="multipart/form-data">
            @csrf
              
              <div class="form-group row">
                <div class="col-md-6 mb-3 mb-lg-0">
                  <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Siapa namamu?" value="{{ old('name') }}" required autocomplete="name">                   
                   @error('name')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
                <div class="col-md-6">
                  <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Masukan alamat emailmu!" value="{{ old('email') }}" required autocomplete="email">
                    
                    @error('email')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
 
                </div>                
              </div>

              <div class="form-group row">
                <div class="col-md-12">                            
                  <select class="form-control" name="fakultas">
                    <option>Dari fakultas apa kamu?</option>                                        
                    <option value="FISIP">FISIP</option>
                    <option value="FKIP">FKIP</option>
                    <option value="FEB">FEB</option>
                    <option value="FAPERTA">FAPERTA</option>
                    <option value="FAI">FAI</option>
                    <option value="FT">FT</option>
                    <option value="FH">FH</option>
                    <option value="PASCASARJANA">PASCASARJANA</option>      
                  </select>                                                                             
                </div> 
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <strong>Masukan file jika perlu</strong> 
                  <a href="#" data-toggle="collapse" data-target="#file"><i class="fas fa-file"></i></a>
                    <div id="file" class="collapse in">
                      <input type="file" name="file" class="form-control">
                    </div>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <textarea class="form-control" name="masukan" cols="30" rows="10" placeholder="Tuliskan Ide dan gagsanmu disini."></textarea>
                </div>
              </div>

              <div class="form-group row">                           
                <div class="col-md-12">
                  <select class="form-control" name="tipe_masukan">
                    <option>Apa tipe laporanmu?</option>                                        
                    <option value="umum">umum</option>
                    <option value="rahasia">rahasia</option>    
                  </select>
                </div> 
              </div>
                 

              <div class="form-group row">
                <div class="col-md-6">                  
                  <input type="submit" name="kirim" class="btn btn-primary py-3 px-5 btn-block" value="Kirimkan!">
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
@endsection
