@extends('layout.main')

@section('container')
<div class="row">
    <div class="col-1">
        @include('partials.sidebar')
    </div>
    <div class="col-11">
        <div class="d-flex flex-column gap-3">
            @include('partials.telist')
            <form action="/edit/{{ $data->id }}" method="post" autocomplete="off">
                @csrf
                <div class="row gap-3">
                    <input class="form-control col" type="text" name="nama" value="{{ $data->nama }}" placeholder="name">
                    <input class="form-control col" type="text" name="posisi" value="{{ $data->posisi }}" placeholder="position">
                    <input class="form-control col" type="text" name="departemen" value="{{ $data->departemen }}"
                        placeholder="department">
                    <input class="form-control col" type="text" name="email" value="{{ $data->email }}" placeholder="email">
                    <input class="form-control col" type="text" name="no_hp" value="{{ $data->no_hp }}" placeholder="phone">
                </div>
                <button class="btn btn-primary mt-3" type="submit">Save</button>
                <a href="/" class="btn btn-primary mt-3 me-3" type="submit">Back</a>
            </form>
        </div>
    </div>
</div>
@endsection
