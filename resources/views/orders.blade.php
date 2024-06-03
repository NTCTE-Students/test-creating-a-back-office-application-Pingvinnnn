@extends('layouts.app')

@section('content')
    
    <h1>Заказы</h1>
    <table>
        <thead>
            <tr>
                <th>Клиенты</th>
                <th>Дата</th>
                <th>Статус</th>
                <th>Сумма</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->client->name }}</td>
                    <td>{{ $order->date }}</td>
                    <td>{{ $order->status }}</td>
                    <td>{{ $order->total }}</td>
                    <td>
                        <a href="{{ route('orders.edit', $order->id) }}">Редактировать</a>
                        <a href="{{ route('orders.destroy', $order->id) }}">Удалить</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection    
