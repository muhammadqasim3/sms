<li class="nav-item">
    <a href="{{ route('classes.index') }}" class="nav-link {{ Request::is('classes*') ? 'active' : '' }}"><i class="fab fa-leanpub"></i> 
    <p>Classes</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('classrooms.index') }}"
       class="nav-link {{ Request::is('classrooms*') ? 'active' : '' }}">
       <i class="fa fa-home"></i>
       <p> Classrooms</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('levels.index') }}"
       class="nav-link {{ Request::is('levels*') ? 'active' : '' }}">
       <i class="fa fa-level-up-alt"></i>
        <p>Levels</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('batches.index') }}"
       class="nav-link {{ Request::is('batches*') ? 'active' : '' }}">
       <i class="fa fa-id-badge"></i>
        <p>Batches</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('shifts.index') }}"
       class="nav-link {{ Request::is('shifts*') ? 'active' : '' }}">
       <i class="fa fa-edit"></i>
        <p>Shifts</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('courses.index') }}"
       class="nav-link {{ Request::is('courses*') ? 'active' : '' }}">
       <i class="fa fa-book"></i>
        <p>Courses</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('faculties.index') }}"
       class="nav-link {{ Request::is('faculties*') ? 'active' : '' }}">
       <i class="fa fa-users"></i>
        <p>Faculties</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('times.index') }}"
       class="nav-link {{ Request::is('times*') ? 'active' : '' }}">
       <i class="fa fa-clock"></i>
        <p>Times</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('attendances.index') }}"
       class="nav-link {{ Request::is('attendances*') ? 'active' : '' }}">
       <i class="fa fa-calendar"></i>
        <p>Attendances</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('academics.index') }}"
       class="nav-link {{ Request::is('academics*') ? 'active' : '' }}">
       <i class="fa fa-university"></i>
        <p>Academics</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('days.index') }}"
       class="nav-link {{ Request::is('days*') ? 'active' : '' }}">
       <i class="fa fa-sun"></i>
        <p>Days</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('classAssignings.index') }}"
       class="nav-link {{ Request::is('classAssignings*') ? 'active' : '' }}">
       <i class="fa fa-clock"></i>
        <p>Class Assignings</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('classSchedulings.index') }}"
       class="nav-link {{ Request::is('classSchedulings*') ? 'active' : '' }}">
       <i class="fa fa-clock"></i>
        <p>Class Schedulings</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('transactions.index') }}"
       class="nav-link {{ Request::is('transactions*') ? 'active' : '' }}">
       <i class="fa fa-money-bill"></i>
        <p>Transactions</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('roles.index') }}"
       class="nav-link {{ Request::is('roles*') ? 'active' : '' }}">
       <i class="fa fa-edit"></i>
        <p>Roles</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('users.index') }}"
       class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
       <i class="fa fa-users"></i>
        <p>Users</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('admissions.index') }}"
       class="nav-link {{ Request::is('admissions*') ? 'active' : '' }}">
       <i class="fa fa-graduation-cap"></i>
        <p>Admissions</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('semesters.index') }}"
       class="nav-link {{ Request::is('semesters*') ? 'active' : '' }}">
       <i class="fa fa-calendar"></i>
        <p>Semesters</p>
    </a>
</li>


