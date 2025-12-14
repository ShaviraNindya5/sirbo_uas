<x-app-layout>
    <h1 class="text-xl font-bold mb-4">Dashboard Admin</h1>

    <div class="grid grid-cols-3 gap-4 mb-6">
        <div class="bg-white p-4 rounded shadow">Total Booking: 25</div>
        <div class="bg-white p-4 rounded shadow">Paid: 18</div>
        <div class="bg-white p-4 rounded shadow">Pending: 7</div>
    </div>

    <div class="bg-white p-4 rounded shadow">
        <h2 class="font-semibold mb-2">Booking Terbaru</h2>
        <table class="w-full text-sm">
            <tr class="border-b">
                <th>User</th>
                <th>Layanan</th>
                <th>Status</th>
            </tr>
            <tr>
                <td>Rudi</td>
                <td>Hotel</td>
                <td>Pending</td>
            </tr>
        </table>
    </div>
</x-app-layout>