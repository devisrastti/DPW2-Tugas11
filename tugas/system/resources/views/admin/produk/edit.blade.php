@extends ('admin.template.base')

@section('content')

<!-- start coding -->

   
    <div class="container">
        <div class="row">
   		    <div class="card mt-3 pt-3">
				<div class="container-fluid">
		   			<div class="row ml-1 mr-2 mb-3">
		   				    <h4>Ubah Data Produk</h4>
		   			</div>
                    <div class="card-body">
                  <form action="{{ url('admin/produk', $produk->id) }}" method="post">
                    @csrf
                    @method("PUT")
                      <div class="form-group">
                          <label for="" class="control-label">Nama</label>
                          <input type="text" class="form-control" name="nama" value="{{$produk->nama}}">
                      </div>

                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="" class="control-label">Harga</label>
                                  <input type="text" class="form-control" name="harga" value="{{$produk->harga}}">
                              </div>
                          </div>
                          <div class="col-md-3">
                              <div class="form-group">
                                  <label for="" class="control-label">Berat</label>
                                  <input type="text" class="form-control" name="berat" value="{{$produk->berat}}">
                              </div>
                          </div>
                          <div class="col-md-3">
                              <div class="form-group">
                                  <label for="" class="control-label">Stok</label>
                                  <input type="text" class="form-control" name="stok" value="{{$produk->stok}}">
                              </div>
                          </div>
                      </div>
                          <div class="col-md-100">
                             <div class="form-group">
                                  <label for="" class="control-label">Deskripsi</label>
                                  <textarea name="deskripsi" class="form-control">{{$produk->deskripsi}}</textarea>
                             </div>
                          </div>
                      <button class="btn btn-dark float-right"><i class="fa fa-save"></i> simpan</button>
                  </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection