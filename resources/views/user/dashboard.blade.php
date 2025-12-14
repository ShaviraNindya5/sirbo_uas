@extends('layouts.app')

@section('content')
<h1>Dashboard</h1>

<div class="stats">
    <div class="card">
        <h2>25</h2>
        <p>Total Booking</p>
    </div>
    <div class="card">
        <h2>18</h2>
        <p>Paid</p>
    </div>
    <div class="card">
        <h2>Status</h2>
        <p>Export</p>
    </div>
</div>

<h2>Booking Terbaru</h2>
<div class="card">
    <table>
        <tr>
            <th>Layanan</th>
            <th>Tanggal</th>
            <th>Status</th>
        </tr>
        <tr>
            <td>Ruangan</td>
            <td>22-01-25</td>
            <td>Pending</td>
        </tr>
        <tr>
            <td>Hotel</td>
            <td>22-01-25</td>
            <td>Paid</td>
        </tr>
    </table>
</div>
@endsection