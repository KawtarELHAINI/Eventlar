@extends('layouts.master')

@section('content')
    <section >
        {{-- <div class="bg-indigo-600 hidden lg:block w-full md:w-1/2 xl:w-2/3 h-screen">
            <img src="images/image1.jpg" alt="" class="w-full h-full object-cover">
        </div> --}}
&
        <div class="h-screen flex items-center justify-center ">

            <div class="bg-white py-5 px-8 border-t-4 border-pink-700 rounded-md shadow-lg">
                <h2 class="text-3xl text-gray-400 mb-3">Login</h2>
                @if ($errors->any())
                    <div class="bg-red-500 text-white p-4 mt-4 rounded-md">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form class="mt-6" action="{{ route('logins') }}" method="POST">
                    @csrf
                    <div>
                        <label class="block text-gray-700">Email Address</label>
                        <input type="email" name="loginemail" id="" placeholder="Enter Email Address"
                        class="w-full p-2 mt-1 bg-gray-200 rounded-md focus:outline-none" autofocus autocomplete>
                    </div>

                    <div class="mt-4">
                        <label class="block text-gray-700">Password</label>
                        <input type="password" name="loginpassword" id="" placeholder="Enter Password" minlength="6"
                        class="w-full p-2 mt-1 bg-gray-200 rounded-md focus:outline-none">
                    </div>

                    <button type="submit"              
                    class="border-none bg-blue-800 py-2 px-3 text-white roudend-sm w-full mt-2 rounded-md hover:bg-blue-700 mb-5" 
                    >Log In</button>

                    <!-- Password reset link -->
                    <p class="mt-2 text-sm text-[#04BB83] hover:text-[#00875F]">
                        <a href="#">Forgot your password? Reset it here.</a>
                        {{-- <a href="{{ route('forget-password') }}">Forgot your password? Reset it here.</a> --}}
                    </p>
                </form>

                <hr class="my-6 border-gray-300 w-full">
                <p class="mt-8">You don't have an account? <a href="/registerr"
                        class="text-[#04BB83] hover:text-[#00875F] font-semibold">REGISTER</a></p>
            </div>
        </div>
    </section>
@endsection


