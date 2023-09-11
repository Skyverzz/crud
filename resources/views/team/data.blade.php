@extends('layout.main')

@section('container')
    <div class="row">
        <div class="col-1">
            @include('partials.sidebar')
        </div>
        <div class="col-11">
            <div class="d-flex flex-column gap-3">
                @include('partials.telist')
                <div class="d-flex justify-content-between align-items-center">
                    <p>
                        <button class="btn btn-primary float-end" type="button" data-bs-toggle="collapse"
                            data-bs-target="#multiCollapseExample2" aria-expanded="false"
                            aria-controls="multiCollapseExample2">+Add User</button>
                    </p>
                </div>
                <div class="col">
                    <div class="collapse multi-collapse" id="multiCollapseExample2">
                        <div class="card card-body">
                            <form action="" method="post" autocomplete="off">
                                @csrf
                                <div class="row gap-3">
                                    <input class="form-control col" type="text" name="nama" placeholder="name">
                                    <input class="form-control col" type="text" name="posisi" placeholder="position">
                                    <input class="form-control col" type="text" name="departemen"
                                        placeholder="department">
                                    <input class="form-control col" type="text" name="email" placeholder="email">
                                    <input class="form-control col" type="text" name="no_hp" placeholder="phone">
                                    <button class="btn btn-primary col">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <table class="table table-sm" id="example">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Position</th>
                                    <th scope="col">Department</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $row)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td scope="row">{{ $row->nama }}</td>
                                        <td>{{ $row->posisi }}</td>
                                        <td>{{ $row->departemen }}</td>
                                        <td>{{ $row->email }}</td>
                                        <td>{{ formatPhoneNumber($row->no_hp) }}</td>
                                        <td class="d-flex">
                                            <a href="/edit/{{ $row->id }}" class="btn"><i class="fa-solid fa-pen-to-square fs-5"></i></a>
                                            <a href="/destroy/{{ $row->id }}" class="btn"><i class="fa-solid fa-trash fs-5"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                @php
                                    function formatPhoneNumber($phoneNumber)
                                    {
                                        $phoneNumberUtil = libphonenumber\PhoneNumberUtil::getInstance();
                                        $parsedPhoneNumber = $phoneNumberUtil->parse($phoneNumber, 'ID'); // Ganti 'US' dengan kode negara yang sesuai
                                        return $phoneNumberUtil->format($parsedPhoneNumber, libphonenumber\PhoneNumberFormat::INTERNATIONAL);
                                    }
                                @endphp
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
