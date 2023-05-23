<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{ route('courses') }}">
            <span class="align-middle">Magicians</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('courses') }}">
                    <i class="align-middle" data-feather="book"></i> <span class="align-middle">Courses</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('students') }}">
                    <i class="align-middle" data-feather="book"></i> <span class="align-middle">Students</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('registrations') }}">
                    <i class="align-middle" data-feather="book"></i> <span class="align-middle">Registrations</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
