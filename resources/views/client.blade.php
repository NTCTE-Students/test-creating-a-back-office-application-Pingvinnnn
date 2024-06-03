@extends('layouts.app')

@section('content')
    
    <h1>Клиенты</h1>
    <table>
        <thead>
            <tr>
                <th>Имя</th>
                <th>Email</th>
                <th>Телефон</th>
                <th>Адрес</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
                <tr>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->email }}</td>
                    <td>{{ $client->phone }}</td>
                    <td>{{ $client->address }}</td>
                    <td>
                        <a href="{{ route('client.edit', $client->id) }}">Редактировать</a>
                        <a href="{{ route('client.destroy', $client->id) }}">Удалить</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection    
