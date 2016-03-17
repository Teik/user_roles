

<!DOCTYPE html>
<html>
<head>
    <script src="[[asset(js/jquery.tablecheckbox)]]"></script>
    <script src="[[asset(js/jquery.tablecheckbox.min)]]"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">
    <form class="form-horizontal" method="POST" action="{{ url('/permissions') }}"/>
    {!! csrf_field() !!}
    <h3>Users Roles</h3>
    <ul class="nav nav-tabs">
        <li><a href="{{url('companyrole')}}">COMPANY PERMISSIONS</a></li>
        <li><a href="{{url('individualrole')}}">INDIVIDUAL PERMISSIONS</a></li>
        <li><a href="{{url('superadmin')}}">ADMIN PERMISSIONS</a></li>
        <li><a href="{{url('addpermission')}}">ADD PERMISSIONS</a></li>
    </ul>


</div>


</body>
</html>
