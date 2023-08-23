 @extends('template.layout')
 @section('content')
     <div class="content-body">
         <div class="container">
             <div class="col-6">
                 <div class="card-body">
                     <form action="{{ url('/update', ['user_id' => $user->user_id]) }}" method="post">
                         @csrf
                         @method('PATCH')
                         <div class="mb-3">
                             <label for="exampleInputEmail1" class="form-label">Nama</label>
                             <input type="text" class="form-control" name="nama" value="{{ $user->nama }}">
                         </div>
                         <div class="mb-3">
                             <label for="exampleInputEmail1" class="form-label">NISN</label>
                             <input type="text" class="form-control" name="nisn" value="{{ $user->nisn }}">
                         </div>
                         <div class="mb-3">
                             <label for="exampleInputEmail1" class="form-label">Jurusan</label>
                             <input type="text" class="form-control" name="jurusan" value="{{ $user->jurusan }}">
                         </div>
                         <div class="mb-3">
                             <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                             <input type="text" class="form-control" name="jenis_kelamin"
                                 value="{{ $user->jenis_kelamin }}">
                         </div>
                         <div class="mb-3">
                             <label for="exampleInputEmail1" class="form-label">No Telepon</label>
                             <input type="text" class="form-control" name="no_telepon" value="{{ $user->no_telepon }}">
                         </div>
                         <button type="submit" class="btn btn-primary">Submit</button>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 @endsection
