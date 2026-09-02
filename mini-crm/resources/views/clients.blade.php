@extends ('layouts.app')

@section('content')
    <table>
        <tbody>
            @foreach ($clients as $c)
                <tr>
                    <td>{{ $c['name'] }}</td>
                    <td>{{ $c['email'] }}</td>
                    <td>{{ $c['city'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>