@extends('layouts.app-master')
<div class="col-lg-6">
    <form method="POST" action="/konsumen/update/{{ $konsumen->id }}">
        @method("put")
        @csrf
        <div class="form-group">
            <label for="Nama">Nama</label>
            <input name="Nama" type="text" class="form-control" id="Nama" value="{{ old('Nama', $konsumen->Nama) }}">
        </div>
        <div class="form-group">
            <label for="Email">Email</label>
            <input name="Email" type="text" class="form-control" id="Email" value="{{ old('Email', $konsumen->Email) }}">
        </div>
        <div class="form-group">
            <label for="Waktu">Jam</label>
            <input name="Waktu" type="number" class="form-control" id="Waktu">
        </div>
        <div class="form-group">
            <label for="Number">Phone Number</label>
            <input name="Number" type="text" class="form-control" id="Number" value="{{ old('Number', $konsumen->Number) }}">
        </div>
        <div class="form-group">
                            <label for="Tanggal">Tanggal</label>
                            <input name="Tanggal" type="date" class="form-control" id="Tanggal">
                        </div>
        <div class="form-group">
            <label for="Message">Message</label>
            <textarea name="Message" class="form-control" id="Message" rows="3"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Ok</button>
        </div>
    </form>