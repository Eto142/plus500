@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Candlestick Data for {{ $symbol }} ({{ $interval }})</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Open Time</th>
                    <th>Open</th>
                    <th>High</th>
                    <th>Low</th>
                    <th>Close</th>
                    <th>Volume</th>
                    <th>Close Time</th>
                </tr>
            </thead>
            <tbody>
                @foreach($candlesticks as $candlestick)
                    <tr>
                        <td>{{ date('Y-m-d H:i:s', $candlestick['openTime'] / 1000) }}</td>
                        <td>{{ $candlestick['open'] }}</td>
                        <td>{{ $candlestick['high'] }}</td>
                        <td>{{ $candlestick['low'] }}</td>
                        <td>{{ $candlestick['close'] }}</td>
                        <td>{{ $candlestick['volume'] }}</td>
                        <td>{{ date('Y-m-d H:i:s', $candlestick['closeTime'] / 1000) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
