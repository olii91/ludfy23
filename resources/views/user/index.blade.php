@extend('layouts.app')

@section('contect')
<div class="card">
    <div class="card-header">{{_('user')}}</div>
    <div class="card-body">
        @if (session('status'))
        <div class="alert alert-success"role="alert>
        {{ session('status'))}}
</div>
@endif
<a href="{{route('user.create')}}" class="btn btn-md btn-succes mx-1 shadow"> <i class="fa fa-lg fa-fw fa-plus"><i/>Tambah User</a>
<br/> <br/>
<div class="table-responsive">
    <table id="table_user" class="table-striped table-hover table-condensed table-bordered">
        <thead>
            <tr style="background-color: "darkgrey">
            <th>No</th>
            <th>Username</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Level</th>
            <th class="text-center" width="70">Aksi</th>
</tr>
</thead>
<tbody>
    @foreanch($user as $user)
    <tr>
        <td>{{$lopp->iteration}}</td>
        <td>{{user->username}}</td>
        <td>{{$user->name}}</td>
        <td>{{user->email}}</td>
        <td>{{user->level}}

