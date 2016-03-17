<table>
    <thead>
    <th>Company User</th>
    </thead>
    <tbody>
    </thead>
    <tbody>
    <form class="form-horizontal" method="POST" action="{{ url('/companyrole') }}"/>
    {!! csrf_field() !!}
    <div>
        <label class="col-md-4 control-label">Permission Name</label>

        <div class="col-md-6">
            <input type="text" class="form-control" name="task_name">


        </div>
    </div>
    <div>
        <label class="col-md-4 control-label">Display Name</label>

        <div class="col-md-6">
            <input type="text" class="form-control" name="task_name">


        </div>
    </div>
    <div>
        <label class="col-md-4 control-label">Description</label>

        <div class="col-md-6">
            <input type="text" class="form-control" name="task_name">


        </div>
    </div>
    <div>
        <label class="col-md-4 control-label">ADD PERMISSION</label>

        <div class="col-md-6">
            <input type="submit" class="btn btn-primary" name="add_name">


        </div>
    </div>

    </div>
    </tbody>
</table>