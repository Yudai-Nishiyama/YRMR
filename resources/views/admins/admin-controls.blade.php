<div class="admin-control col-1" style="width: 264px; min-height: 100vh;">
    <div class="list-group" style="width: 100%;">
        <a href="{{ route('admin.rooms.index') }}" class="list-group-item p-3 text-center {{ request()->is('admin') || request()->is('admin/rooms*') ? 'active' : '' }}">Rooms</a>
        <a href="{{ route('admin.cleaners.showCleanersPage') }}" class="list-group-item p-3 text-center {{ request()->is('admin/cleaners*') ? 'active' : '' }}">Cleaners</a>
        <a href="{{ route('admin.guests.guestReservationManagement') }}" class="list-group-item p-3 text-center {{ request()->is('admin/guests*') ? 'active' : '' }}">Guests</a>
    </div>
</div>
