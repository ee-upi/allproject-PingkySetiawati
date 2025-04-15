<div>{{-- MENU --}}
    @if(Auth::user()->hasRole('super_admin'))
        <h2>
            <b>Super Admin</b>
        </h2>
        <x-menu-sub title="Users" icon="o-cog-6-tooth">
            <x-menu-item title="Staff" icon="o-sparkles" link="/super-admin/user/staff" />
            <x-menu-item title="Student" icon="o-sparkles" link="/super-admin/user/student" />
        </x-menu-sub>
    @endif

    @if(Auth::user()->hasRole('staff'))
        <h2>
            <b>Staff</b>
        </h2>
        <x-menu-sub title="Research" icon="o-cog-6-tooth">
            <x-menu-item title="Supervise" icon="o-sparkles" link="/staff/research/supervise" />
            <x-menu-item title="Review" icon="o-sparkles" link="/staff/research/review" />
        </x-menu-sub>
        <x-menu-sub title="Event" icon="o-cog-6-tooth">
            <x-menu-item title="Pre Defense" icon="o-sparkles" link="/staff/event/pre-defense" />
            <x-menu-item title="Final Defense" icon="o-sparkles" link="/staff/event/final-defense" />
            <x-menu-item title="Seminar" icon="o-sparkles" link="/staff/event/seminar" />
        </x-menu-sub>
    @endif
    @if(Auth::user()->hasRole('student'))
        <h2>
            <b>Student</b>
        </h2>
        <x-menu-item title="Research" icon="o-sparkles" link="/student/research" />
    @endif
    <h2>
        <b>Student</b>
    </h2>
    <x-menu-item title="Research" icon="o-sparkles" link="/student/research" />
</div>
