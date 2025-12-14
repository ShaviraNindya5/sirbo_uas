@extends('layouts.app')

@section('content')
<h1>Data Reservasi</h1>

<div class="card">
    <table>
        <tr>
            <th>User</th>
            <th>Layanan</th>
            <th>Tanggal</th>
            <th>Status</th>
        </tr>
        <tr>
            <td>Budi</td>
            <td>Ruangan</td>
            <td>20-01</td>
            <td>Pending</td>
        </tr>
        <tr>
            <td>Ani</td>
            <td>Hotel</td>
            <td>22-01</td>
            <td>Paid</td>
        </tr>
    </table>
</div>
@endsection