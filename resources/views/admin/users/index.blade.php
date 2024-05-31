<!-- resources/views/admin/users/index.blade.php -->

@extends('layouts.homelayouts1')

@section('konten')
    <div class="container mx-auto mt-8 bg-white bg-opacity-25 p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">User List</h2>
        <a href="{{ route('admin.users.create') }}" class="bg-gray-800 text-white font-semibold py-2 px-4 rounded-md mb-4 inline-block hover:bg-gray-700 focus:outline-none focus:bg-gray-700">Add User</a>
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">User Type</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($users as $user)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-800">{{ $user->name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-800">{{ $user->email }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-800">{{ $user->usertype }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="{{ route('admin.users.edit', $user->id) }}" class="text-gray-800 hover:text-gray-600">Edit</a>
                            <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700 ml-2">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
