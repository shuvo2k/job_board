@extends('layouts.auth')

   @section('content')
   <div class="container">
       <div class="row justify-content-center">
           {{-- <div class="col-md-3">
               <div class="card">
                   <div class="card-header">Dashboard</div>

                   <div class="card-body">

                   </div>
               </div>
           </div> --}}
           <div class="col-md-9">
               <div class="card">
                   <div class="card-header"><b> {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}'s Profile </b></div>

                   <div class="card-body">
                     <form method="POST" action="{{ route('apllicant.profile.update') }}" aria-label="" enctype="multipart/form-data">
                         @csrf
                     <div class="form-group row">
                         <label for="first_name" class="col-md-3 col-form-label text-md-right">{{ __('First Name') }}</label>

                         <div class="col-md-7">
                             <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ Auth::user()->first_name }}" required autocomplete="first_name" autofocus>

                             @error('first_name')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                             @enderror
                         </div>
                     </div>
                     <div class="form-group row">
                         <label for="last_name" class="col-md-3 col-form-label text-md-right">{{ __('Last Name') }}</label>

                         <div class="col-md-7">
                             <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ Auth::user()->last_name }}" required autocomplete="last_name" autofocus>

                             @error('last_name')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                             @enderror
                         </div>
                     </div>
                     <div class="form-group row">
                         <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('Email') }}</label>

                         <div class="col-md-7">
                             <input id="email" type="email" readonly class="form-control @error('email') is-invalid @enderror" name="email" value="{{ Auth::user()->email }}" required autocomplete="email" autofocus>

                             @error('email')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                             @enderror
                         </div>
                     </div>
                     <div class="form-group row">
                         <label for="skill" class="col-md-3 col-form-label text-md-right">{{ __('Skills') }}</label>

                         <div class="col-md-7">
                             <input id="skill" type="text" class="form-control @error('skill') is-invalid @enderror" name="skill" value="{{ Auth::user()->skills ? Auth::user()->skills : old('skill') }}" required autocomplete="skill" autofocus>

                             @error('skill')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                             @enderror
                         </div>
                     </div>
                     <div class="form-group row">
                         <label for="profile_picture" class="col-md-3 col-form-label text-md-right">{{ __('Profile Picture') }}</label>

                         <div class="col-md-7">
                             <input id="profile_picture" type="file" class="form-control @error('profile_picture') is-invalid @enderror" name="profile_picture" value="{{ Auth::user()->image ? Auth::user()->image : old('profile_picture') }}"  autocomplete="profile_picture" autofocus>

                             @error('profile_picture')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                             @enderror
                         </div>
                     </div>
                     <div class="row" style="margin-left:120px;">
                       @if(isset(Auth::user()->image))
                    <img src="{{ asset(Auth::user()->image) }}" alt="profile picture" height="200px" width="330px" style="margin-bottom:20px;">
                       @endif
                     </div>
                     <div class="form-group row">
                         <label for="resume" class="col-md-3 col-form-label text-md-right">{{ __('Resume') }}</label>

                         <div class="col-md-7">
                             <input id="resume" type="file" class="form-control @error('resume') is-invalid @enderror" name="resume" value="{{ Auth::user()->resume ? Auth::user()->resume : old('resume') }}"  autocomplete="resume" autofocus>

                             @error('resume')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                             @enderror
                         </div>
                     </div>
                     <div class="row">
                       @if(isset(Auth::user()->resume))
                         <embed src="{{ Auth::user()->resume }}" type="application/pdf"   height="240px" width="100%">
                       @endif
                     </div>
                     <div class="form-group row mb-0 mt-3">
                         <div class="col-md-7 offset-md-5">
                             <button type="submit" class="btn btn-primary">
                                 {{ __('Update Profile') }}
                             </button>
                         </div>
                     </div>
                   </form>
                   </div>
               </div>
           </div>
       </div>
   </div>
   @endsection
