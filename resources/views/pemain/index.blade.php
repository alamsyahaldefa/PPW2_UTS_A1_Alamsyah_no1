@extends('layouts.master')

@section('title', 'Pemain')

@section('content')
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Pemain</th>
                <th>No Punggung</th>
                <th>Posisi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pemain as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nama_pemain }}</td>
                    <td>{{ $item->no_punggung }}</td>
                    <td>{{ $item->posisi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
