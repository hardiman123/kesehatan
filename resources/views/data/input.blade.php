@extends('layout/main')

@section('container')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>input data</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <div class="container">
       <div class="row">
            <div class="col-md-12">
                    <form>
                    <div class="form-group">
                       <label for="exampleFormControltext">Nama Fasilitas</label>
                        <input type="text" class="form-control" id="exampleFormControltext" placeholder="NamaFasilitas">
                    </div>
                        <div class="form-group">
                          <label for="exampleFormControlTextarea1">Deskripsi</label>
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                      <label for="default check">Jenis Fasilitas</label>
                      <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="Rumahsakit">
  <label class="form-check-label" for="Rumahsakit">
    Rumah Sakit
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="puskesmas">
  <label class="form-check-label" for="puskesmas">
    puskesmas
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="klinik">
  <label class="form-check-label" for="klinik">
    klinik
  </label>
</div>

 <label for="default check">Jenis Tes</label>
                      <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="SWAB">
  <label class="form-check-label" for="SWAB">
    SWAB
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="rapid">
  <label class="form-check-label" for="rapid">
    rapid
  </label>
</div>
<hr size: 0,5px>

<div class="col">
<div class="input-group mb-2">
  <div class="input-group-prepend">
    <span class="input-group-text">harga</span>
  </div>
  <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
</div>

<div class="input-group mb-2">
  <div class="input-group-prepend">
    <span class="input-group-text">telp</span>
  </div>
  <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
</div>

<div class="input-group mb-2">
  <div class="input-group-prepend">
    <span class="input-group-text">alamat</span>
  </div>
  <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
</div>
<div class="col">
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
  </div>
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
  </div>
</div>

  </div>

<div class="col">
<p class="text-center bg-dark text-light rounded-pill">MAP</p>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3974.435379264453!2d104.07059231429949!3d-5.0329242526038795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e478fa11ecf8bdf%3A0xb39ce5cb6ca1ee0e!2sRS%20Umum%20Alimuddin%20Umar%20Liwa!5e0!3m2!1sid!2sid!4v1600656594963!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
<a href="#" class="btn btn-secondary rounded btn-sm active" role="button" aria-pressed="true">save</a>

</div>



@endsection