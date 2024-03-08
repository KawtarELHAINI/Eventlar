@extends('layouts.master')

@section('content')
    {{-- <div class="flex h-screen bg-cover bg-center bg-no-repeat" style="background-image: url('images/image1.jpg');"> --}}
        {{-- <div class="w-full flex items-center justify-center"> --}}
            {{-- <div class="max-w-2xl m-auto bg-slate-100 rounded p-5 w-4/5 text-white">  --}}
                
<div class="min-h-screen  flex justify-center items-center">
  
    <div class="py-12 px-12 bg-white rounded-2xl shadow-xl z-20">
    
        <h1 class="text-3xl font-bold text-center mb-4 cursor-pointer">Create An Account</h1>
        @if ($errors->any())
            <div class="bg-red-500 text-white p-4 mb-4 rounded-md">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/register" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="flex mb-6">
                <div class="w-1/3 pr-2">
                    <label class="block mb-2 text-[#0037AE]" for="firstname">FirstName</label>
                    <input id="firstname"
                        class="block text-sm py-3 px-4 rounded-lg w-full border outline-purple-500"
                        type="text" name="firstname" value="{{old('firstname')}}">
                </div>
                <div class="w-1/3 px-2">
                    <label class="block mb-2 text-[#0037AE]" for="lastname">LastName</label>
                    <input id="lastname"
                        class="block text-sm py-3 px-4 rounded-lg w-full border outline-purple-500"
                        type="text" name="lastname" value="{{old('lastname')}}">
                </div>
                <div class="w-1/3 pl-2">
                    <label class="block mb-2 text-[#0037AE]" for="email">Email</label>
                    <input id="email"
                        class="block text-sm py-3 px-4 rounded-lg w-full border outline-purple-500"
                        type="email" name="email" value="{{old('email')}}">
                </div>
            </div>                    
            <div class="flex mb-6">
                <div class="w-1/2 pr-2">
                    <label class="block mb-2 text-[#0037AE]" for="password">Password</label>
                    <input
                        class="block text-sm py-3 px-4 rounded-lg w-full border outline-purple-500"
                        type="password" name="password" value="{{old('password')}}">
                </div>
                <div class="w-1/2 pl-2">
                    <label class="block mb-2 text-[#0037AE]" for="cpassword"> Confirm Password</label>
                    <input
                        class="block text-sm py-3 px-4 rounded-lg w-full border outline-purple-500"
                        type="password" name="password_confirmation">
                </div>
            </div>
            
            <div class="flex mb-6">
                <div class="w-2/5 pr-2">
                    <label class="block mb-2 text-[#0037AE] " for="image">Your Profile</label>
                    <input type="file" name="image" accept="image/*" class="block text-sm py-3 px-4 rounded-lg w-full border outline-purple-500">
                </div>
                <div class="w-2/5 px-2">
                    <label class="block mb-2 text-[#0037AE]" for="phone">Phone</label>
                    <input id="phone" class="block text-sm py-3 px-4 rounded-lg w-full border outline-purple-500" type="number" name="phone" value="{{old('phone')}}">
                </div>
                <div class="w-1/5 pl-2">
                    <label class="block mb-2 text-[#0037AE]" for="role">Role</label>
                    <select name="role" class="block text-sm py-3 px-4 rounded-lg w-full border outline-purple-500">
                        <option>Selection of roles:</option>
                        <option value="utilisateur">Utilisateur</option>
                        <option value="organisateur">Organisateur</option>
                    </select>
                </div>
            </div>
            <div>
                <input class="w-full py-2 text-xl text-white bg-purple-400 rounded-lg hover:bg-purple-500 transition-all" type="submit" value="REGISTER"> <!-- Updated color to #0037AE and hover color to #004DBB -->
            </div>
        </form>
        <div class="text-center">
            <p class="text-[#0037AE]">Already have an account? <a href="/login" class="font-bold text-[#0037AE]">LOGIN HERE</a></p>
        </div>
    </div>
</div>
</div>
    <div class="w-40 h-40 absolute bg-purple-300 rounded-full top-0 right-12 hidden md:block"></div>
    <div class="w-20 h-40 absolute bg-purple-300 rounded-full bottom-20 left-10 transform rotate-45 hidden md:block"></div>
  </div>
  
       
@endsection
{{-- 
<div class="min-h-screen bg-purple-400 flex justify-center items-center">
    <div class="absolute w-60 h-60 rounded-xl bg-purple-300 -top-5 -left-16 z-0 transform rotate-45 hidden md:block"></div>
    <div class="absolute w-48 h-48 rounded-xl bg-purple-300 -bottom-6 -right-10 transform rotate-12 hidden md:block"></div>
    <div class="py-12 px-12 bg-white rounded-2xl shadow-xl z-20">
      <div>
        <h1 class="text-3xl font-bold text-center mb-4 cursor-pointer">Create An Account</h1>
        <p class="w-80 text-center text-sm mb-8 font-semibold text-gray-700 tracking-wide cursor-pointer">Create an account to enjoy all the services without any ads for free!</p>
      </div>
      <div class="space-y-4">
        <input type="text" placeholder="Email Addres" class="block text-sm py-3 px-4 rounded-lg w-full border outline-purple-500" />
        <input type="text" placeholder="Password" class="block text-sm py-3 px-4 rounded-lg w-full border outline-purple-500" />
      </div>
      <div class="text-center mt-6">
        <button class="w-full py-2 text-xl text-white bg-purple-400 rounded-lg hover:bg-purple-500 transition-all">Create Account</button>
        <p class="mt-4 text-sm">Already Have An Account? <span class="underline  cursor-pointer"> Sign In</span></p>
      </div>
    </div>
    <div class="w-40 h-40 absolute bg-purple-300 rounded-full top-0 right-12 hidden md:block"></div>
    <div class="w-20 h-40 absolute bg-purple-300 rounded-full bottom-20 left-10 transform rotate-45 hidden md:block"></div>
  </div>
   --}}