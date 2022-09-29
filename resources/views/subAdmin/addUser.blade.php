@extends('layouts.subAdmin')

@section('content')
<div class="flex flex-col flex-1 items-center mt-10 ml-[15rem]">
    <p class="font-bold">Add User</p>
    @if(!empty($status))
        <div class="">
            {{ $status }}
        </div>
    @endif
    <form action="{{ route('subAdmin.addUser') }}" method="POST" class="flex flex-col gap-3 mt-5">
        @csrf
        <p>Name*</p>
        <input type="text" name="name" value="{{old('name')}}" placeholder="Your Name" class="border-[2px] border-gray-300 px-[1rem] h-[2.5rem] w-[18rem] rounded-full" required autofocus>
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <p>Email*</p>
        <input type="email" name="email" value="{{old('email')}}" placeholder="Your email" class="border-[2px] border-gray-300 px-[1rem] h-[2.5rem] w-[18rem] rounded-full" required autofocus>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <p>Password*</p>
        <input type="password" name="password" placeholder="Your password" class="border-[2px] border-gray-300 px-[1rem] h-[2.5rem] w-[18rem] rounded-full" required>
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <p>Confirm Password*</p>
        <input type="password" name="password_confirmation" placeholder="Your password" class="border-[2px] border-gray-300 px-[1rem] h-[2.5rem] w-[18rem] rounded-full" required>

        <p>Gender*</p>
        <div class="flex gap-2">
            <div class="flex gap-2">
                <input type="radio" name="gender" value="male" id="">
                <span>Male</span>
            </div>
            <div class="flex gap-2">
                <input type="radio" name="gender" value="female" id="">
                <span>Female</span>
            </div>
        </div>

        <p>Message*</p>
        <input type="text" name="message" placeholder="" class="border-[2px] border-gray-300 px-[1rem] h-[2.5rem] w-[18rem] rounded-full" required>
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <p>Address*</p>
        <input type="text" name="address" placeholder="" class="border-[2px] border-gray-300 px-[1rem] h-[2.5rem] w-[18rem] rounded-full" required>
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input type="submit" value="Create" class="cursor-pointer bg-green-400 text-white rounded-full h-[2.5rem] mt-5">
    </form>
</div>
@endsection
