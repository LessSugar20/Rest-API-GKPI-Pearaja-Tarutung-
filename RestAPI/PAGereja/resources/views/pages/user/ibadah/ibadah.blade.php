@extends('layouts.user.master')
@section('title', 'Dashboard')
@section('content')
<section class="wrapper bg-soft-primary text-white">
     <div class="container pt-20 pt-md-20 pb-15 pb-md-15 text-center">
       <div class="row">
         <div class="col-lg-8 mx-auto">
           <h1 class="display-1 text-dark mb-3">Jadwal Acara</h1>
           <nav class="d-inline-block" aria-label="breadcrumb">
             <ol class="breadcrumb text-dark">
               <li class="breadcrumb-item"><a href="#">Home</a></li>
               <li class="breadcrumb-item active" aria-current="page">Jadwal</li>
             </ol>
           </nav>
           <!-- /nav -->
         </div>
         <!-- /column -->
       </div>
       <!-- /.row -->
     </div>
     <!-- /.container -->
   </section>
   <!-- /section -->
   <section class="wrapper col-lg-11 mx-auto pb-5 mb-12 bg-light">
     <div class="container col-lg-11 pb-8 pb-md-8">
          <div id="snippet-4" class="wrapper pt-6">
               <h2 class="mb-5 text-center">Jadwal Ibadah</h2>
               <div class="card">
                 <div class="card-body">
                   <table class="table table-bordered">
                     <thead>
                       <tr>
                         <th scope="col">No</th>
                         <th scope="col">Nama</th>
                         <th scope="col">Deskripsi</th>
                         <th scope="col">Tanggal</th>
                         <th scope="col">Aksi</th>
                       </tr>
                     </thead>
                     <tbody>
                       <tr>
                         <th scope="row">1</th>
                         <td>Mark</td>
                         <td>Otto</td>
                         <td>@mdo</td>
                       </tr>
                     </tbody>
                   </table>
                 </div>
               </div>
               <!--/.card -->
          </div>
          
     </div>
     <div class="container col-lg-11 pb-8 pb-md-8">
          <div id="snippet-4" class="wrapper pt-6">
               <h2 class="mb-5 text-center">Jadwal Partangiangan</h2>
               <div class="card">
                 <div class="card-body">
                   <table class="table table-bordered">
                     <thead>
                       <tr>
                         <th scope="col">No</th>
                         <th scope="col">Sektor</th>
                         <th scope="col">Tanggal</th>
                         <th scope="col">Keluarga</th>
                         <th scope="col">Alamat</th>
                         <th scope="col">Aksi</th>
                       </tr>
                     </thead>
                     <tbody>
                       <tr>
                         <th scope="row">1</th>
                         <td>Mark</td>
                         <td>Otto</td>
                         <td>@mdo</td>
                       </tr>
                     </tbody>
                   </table>
                 </div>
               </div>
               <!--/.card -->
          </div>
          
     </div>
     <!-- /.container -->
</section>
@endsection
  
