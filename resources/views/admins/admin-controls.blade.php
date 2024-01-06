<div class="admin-control row g-0">
    <div class="col-1" style="width: 264px;">
        <div class="list-group" style="width: 100%;">
            <a href="{{ route('admin.rooms') }}" class="list-group-item p-3 text-center {{ request()->is('admin/rooms*') ? 'active' : '' }}">Rooms</a>
    <a href="{{ route('admin.cleaners') }}" class="list-group-item p-3 text-center {{ request()->is('admin/cleaners*') ? 'active' : '' }}">Cleaners</a>
    <a href="{{ route('admin.guests') }}" class="list-group-item p-3 text-center {{ request()->is('admin/guests*') ? 'active' : '' }}">Guests</a>
        </div>
    </div>