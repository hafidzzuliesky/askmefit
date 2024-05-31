<!-- resources/views/admin/users/edit.blade.php -->

@extends('layouts.homelayouts1')

@section('konten')
    <div class="container mx-auto mt-8 bg-white bg-opacity-25 p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Edit User</h2>
        <form action="{{ route('admin.users.update', $user->id) }}" method="POST" class="max-w-md mx-auto">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="name" class="block text-gray-800">Name:</label>
                <input type="text" name="name" class="form-input mt-1 block w-full rounded-md border-gray-300" value="{{ $user->name }}" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-800">Email:</label>
                <input type="email" name="email" class="form-input mt-1 block w-full rounded-md border-gray-300" value="{{ $user->email }}" required>
            </div>
            <!-- tambahkan bidang lain sesuai kebutuhan -->
            <button type="submit" class="bg-gray-800 text-white font-semibold py-2 px-4 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700">Submit</button>
            <a href="{{ route('admin.users.index') }}" class="bg-gray-300 text-gray-800 font-semibold py-2 px-4 rounded-md ml-4 hover:bg-gray-400 focus:outline-none focus:bg-gray-400">Back</a>
        </form>
    </div>
@endsection
