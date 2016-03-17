<table>
    <thead>
    <th style="width:20px;"><input type="checkbox"></th>

    <th>Individual User</th>
    </thead>
    <tbody>
<form class="form-horizontal" method="POST" action="{{ url('/individualrole') }}"/>
{!! csrf_field() !!}
<tr>
    <td><input type="checkbox"></td>
    <td>Add Task</td>
</tr>
<tr>
    <td><input type="checkbox"></td>
    <td>Delete task</td>
</tr>
<tr>
    <td><input type="checkbox"></td>
    <td>Update task</td>
</tr>
<tr>
    <td><input type="checkbox"></td>
    <td>View Task</td>
</tr>
<tr>
    <td><input type="checkbox"></td>
    <td>Add Campaign</td>
</tr>
<tr>
    <td><input type="checkbox"></td>
    <td>Delete Campaign</td>
</tr>

<tr>
    <td><input type="checkbox"></td>
    <td>Update Campaign</td>
</tr>
<tr>
    <td><input type="checkbox"></td>
    <td>View Campaign</td>
</tr>

</tbody>
    </table>