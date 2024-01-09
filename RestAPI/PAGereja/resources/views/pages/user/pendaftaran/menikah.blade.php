@extends('layouts.user.master')
@section('title', 'Daftar Menikah')
@section('content')
<section class="wrapper bg-soft-primary text-white">
     <div class="container pt-18 pt-md-20 pb-21 pb-md-21 text-center">
       <div class="row">
         <div class="col-lg-8 mx-auto">
           <h1 class="display-1 text-dark mb-3">Menikah</h1>
           <nav class="d-inline-block" aria-label="breadcrumb">
             <ol class="breadcrumb text-dark">
               <li class="breadcrumb-item"><a href="#">Home</a></li>
               <li class="breadcrumb-item active" aria-current="page">Sign Up</li>
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
   <section class="wrapper bg-light">
     <div class="container pb-14 pb-md-16">
       <div class="row">
         <div class="col mt-n19">
           <div class="card shadow-lg">
             <div class="row gx-0 text-center">
               <div class="col-lg-12 ">
                    <form class="text-start">
                    <div class=" row justify-content-around p-10 p-md-11 p-lg-13">
                         <div class="col-lg-6 mb-lg-5">
                              <div class="form-floating mb-4">
                                <input type="text" class="form-control" placeholder="Name" id="loginName">
                                <label for="loginName">Name</label>
                              </div>
                              <div class="form-floating mb-4">
                                <input type="email" class="form-control" placeholder="Email" id="loginEmail">
                                <label for="loginEmail">Email</label>
                              </div>
                              <div class="form-floating password-field mb-4">
                                <input type="password" class="form-control" placeholder="Password" id="loginPassword">
                                <span class="password-toggle"><i class="uil uil-eye"></i></span>
                                <label for="loginPassword">Password</label>
                              </div>                     

                         </div>
                         <div class="col-lg-6 mb-lg-5">

                              <div class="form-floating mb-4">
                                 <input type="text" class="form-control" placeholder="Name" id="loginName">
                                 <label for="loginName">Name</label>
                               </div>
                               <div class="form-floating mb-4">
                                 <input type="email" class="form-control" placeholder="Email" id="loginEmail">
                                 <label for="loginEmail">Email</label>
                               </div>
                               <div class="form-floating password-field mb-4">
                                 <input type="password" class="form-control" placeholder="Password" id="loginPassword">
                                 <span class="password-toggle"><i class="uil uil-eye"></i></span>
                                 <label for="loginPassword">Password</label>
                               </div>                     
                         </div>
                              <a class="btn btn-primary rounded-pill btn-login col-lg-4 ">Daftar</a>
                         </div>
                    </div>              
               </form>                   
               <!--/column -->
             </div>
             <!--/.row -->
           </div>
           <!-- /.card -->
         </div>
         <!-- /column -->
       </div>
       <!-- /.row -->
     </div>
     <!-- /.container -->
   </section>
@endsection