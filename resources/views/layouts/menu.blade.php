@if(Auth::user()->roles==2)
<li class="{{ Request::is('supervisor*') ? 'active' : '' }}">
    <a href="{{route('supervisor.index')}}"><i class="fa fa-user"></i><span>Home</span></a>
</li>
@endif

<li class="{{ Request::is('employeeleave*') ? 'active' : '' }}">
    <a href="{{ route('employeeleave.index') }}"><i class="fa fa-edit"></i><span>Employee Leave</span></a>
</li>
@if (Auth::user()->roles == 1)
<li class="treeview">
<a href="#">
<i class="fa fa-dashboard"></i>
<span>Employee Contracts</span>
<span class='pull-right-container'>
<i class="fa fa-angle-left pull-right"></i>
</span>
</a>
<ul class="treeview-menu"> 
<li class="{{ Request::is('contractStatuses*') ? 'active' : '' }}">
    <a href="{{ route('contractStatuses.index') }}"><i class="fa fa-edit"></i><span>Contract Statuses</span></a>
</li>

<li class="{{ Request::is('contracts*') ? 'active' : '' }}">
    <a href="{{ route('contracts.index') }}"><i class="fa fa-edit"></i><span>Contracts</span></a>
</li>
</ul>
</li>

<li class="{{ Request::is('roles*') ? 'active' : '' }}">
    <a href="{{ route('roles.index') }}"><i class="fa fa-user-circle"></i><span>Roles</span></a>
</li>


<li class="{{ Request::is('employees*') ? 'active' : '' }}">
    <a href="{{ route('employees.index') }}"><i class="fa fa-user"></i><span>Employees</span></a>
</li>


<li class="treeview">
<a href="#">
<i class="fa fa-dashboard"></i>
<span>Employee Discipline</span>
<span class='pull-right-container'>
<i class="fa fa-angle-left pull-right"></i>
</span>
</a>
<ul class="treeview-menu"> 
<li class="{{ Request::is('disciplainaryStatuses*') ? 'active' : '' }}">
    <a href="{{ route('disciplainaryStatuses.index') }}"><i class="fa fa-edit"></i><span>Disciplainary Status</span></a>
</li>
<li class="{{ Request::is('disciplainaries*') ? 'active' : '' }}">
    <a href="{{ route('disciplainaries.index') }}"><i class="fa fa-edit"></i><span>Disciplainaries</span></a>
</li>
</ul>
</li>

<li class="treeview">
<a href="#">
<i class="fa fa-dashboard"></i>
<span>Employee Departments</span>
<span class='pull-right-container'>
<i class="fa fa-angle-left pull-right"></i>
</span>
</a>
<ul class="treeview-menu"> 


<li class="{{ Request::is('departments*') ? 'active' : '' }}">
    <a href="{{ route('departments.index') }}"><i class="fa fa-edit"></i><span>Departments</span></a>
</li>

<li class="{{ Request::is('divisions*') ? 'active' : '' }}">
    <a href="{{ route('divisions.index') }}"><i class="fa fa-edit"></i><span>Divisions</span></a>
</li>
</ul>
</li>
@endif

<li class="treeview">
<a href="#">
<i class="fa fa-dashboard"></i>
<span>Employee Insurance</span>
<span class='pull-right-container'>
<i class="fa fa-angle-left pull-right"></i>
</span>
</a>
<ul class="treeview-menu"> 

<li class="{{ Request::is('medicalinsurances*') ? 'active' : '' }}">
    <a href="{{ route('medicalinsurances.index') }}"><i class="fa fa-edit"></i><span>Medical Insurances</span></a>
</li>

<li class="{{ Request::is('insurancecompensations*') ? 'active' : '' }}">
    <a href="{{ route('insurancecompensations.index') }}"><i class="fa fa-edit"></i><span>Insurance Compensations</span></a>
</li>
</ul>
</li>



