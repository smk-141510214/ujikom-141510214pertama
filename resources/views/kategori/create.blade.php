@extends('layouts.app')
@section('content')

<br>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-info">
                <div class="panel-heading"><center><h2><b>Tambah</b></h2></center></div>

                <div class="panel-body">
                    {!! Form::open(['url' => 'kategori']) !!}

                    <div class="form-group{{ $errors->has('kode_lembur') ? ' has-error' : '' }}">
                        <label for="kode_lembur" class="col-md-4 control-label">Kode Lembur</label>
                        <div class="col-md-6">
                            <input id="kode_lembur" type="text" class="form-control" name="kode_lembur" value="{{ old('kode_lembur') }}" required autofocus>

                            @if ($errors->has('kode_lembur'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('kode_lembur') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div><br>

					<div class="form-group{{ $errors->has('jabatan_id') ? ' has-error' : '' }}">
                        <label for="jabatan_id" class="col-md-4 control-label">Nama Jabatan</label>
                            <div class="col-md-6">
                                <select name="jabatan_id" class="form-control">
                                    @foreach($jabatans as $mata)
                                        <option value="{!! $mata->id !!}" class="form-control" required>{!! $mata->nama_jabatan !!}</option>
                                    @endforeach
                                </select>
                            </div>
                    </div><br>

                    <div class="form-group{{ $errors->has('golongan_id') ? ' has-error' : '' }}">
                        <label for="golongan_id" class="col-md-4 control-label">Nama Golongan</label>
                        <div class="col-md-6">
                            <select name="golongan_id" class="form-control">
                                @foreach($golongans as $mata)
									<option value="{!! $mata->id !!}" class="form-control" required>{!! $mata->nama_golongan !!}</option>
								@endforeach
                            </select>
                        </div>
                   	</div><br>


					<div class="form-group{{ $errors->has('besaran_uang') ? ' has-error' : '' }}">
                    	<label for="besaran_uang" class="col-md-4 control-label">Besaran Uang</label>
                    	<div class="col-md-6">
                        	<input id="besaran_uang" type="besaran_uang" class="form-control" name="besaran_uang" value="{{ old('besaran_uang') }}" required>

                        	@if ($errors->has('besaran_uang'))
                            	<span class="help-block">
                                	<strong>{{ $errors->first('besaran_uang') }}</strong>
                            	</span>
                        	@endif
                    	</div>
                	</div><br>

					<div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Save
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{!! Form::close() !!}
@stop