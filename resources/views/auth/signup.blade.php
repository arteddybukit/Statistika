@extends('app')

@section('content')
<main class="cotainer mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Register | Statistika</h3>
                    <div class="card-body">
                        <form action="{{ route('user.registration') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" name="nama" placeholder="Nama" id="nama" class="form-control">
                                @if ($errors->has('nama'))
                                <span class="text-danger">{{ $errors->first('nama') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" name="jabatan" placeholder="Jabatan" id="jabatan" class="form-control">
                                @if ($errors->has('jabatan'))
                                <span class="text-danger">{{ $errors->first('jabatan') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-2">
                                <input type="text" name="username" placeholder="Username" id="username" class="form-control">
                                @if ($errors->has('username'))
                                <span class="text-danger">{{ $errors->first('username') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-2">
                                <input type="password" name="password" placeholder="Password" id="password" class="form-control">
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>

                            <div class="mb-3">
                                <select id="role" name="role" class="form-select" aria-label="Default select example" required>
                                    <option>Jenis role akun</option>
                                    <option value="pm">Project Manager</option>
                                    <option value="owner">Owner</option>
                                </select>
                            </div>

                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-success btn-block">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</main>
@endsection