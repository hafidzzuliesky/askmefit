@extends('layouts.homelayouts1')

@section('konten')
<div class="container mx-auto mt-8">
    <h2 class="text-2xl font-bold mb-4">Daftar Feedback</h2>

    <div class="overflow-x-auto">
        <table class="table-auto border-collapse border border-gray-300 w-full">
            <thead>
                <tr class="bg-gray-200">
                    <th class="px-4 py-2">No</th>
                    <th class="px-4 py-2">Email</th>
                    <th class="px-4 py-2">Rating</th>
                    <th class="px-4 py-2">Komentar</th>
                    <th class="px-4 py-2">Tanggal</th>
                </tr>
            </thead>
            <tbody>
                @foreach($feedbacks as $feedback)
                <tr class="hover:bg-gray-100">
                    <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                    <td class="border px-4 py-2">{{ $feedback->user->email }}</td>
                    <td class="border px-4 py-2">{{ $feedback->rating }}</td>
                    <td class="border px-4 py-2">{{ $feedback->comment }}</td>
                    <td class="border px-4 py-2">{{ $feedback->created_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
