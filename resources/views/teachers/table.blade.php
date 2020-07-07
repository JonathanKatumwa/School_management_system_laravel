<div class="table-responsive">
    <table class="table" id="teachers-table">
        <thead>
            <tr>
                <th>First Name</th>
        <th>Last Name</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Dob</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Current Address</th>
        <th>Nationality</th>
        <th>Passport No</th>
        <th>Status</th>
        <th>Dateregistered</th>
        <th>User Id</th>
        <th>Class Id</th>
        <th>Image</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($teachers as $teachers)
            <tr>
                <td>{{ $teachers->first_Name }}</td>
            <td>{{ $teachers->last_Name }}</td>
            <td>{{ $teachers->gender }}</td>
            <td>{{ $teachers->email }}</td>
            <td>{{ $teachers->dob }}</td>
            <td>{{ $teachers->phone }}</td>
            <td>{{ $teachers->address }}</td>
            <td>{{ $teachers->current_Address }}</td>
            <td>{{ $teachers->nationality }}</td>
            <td>{{ $teachers->passport_No }}</td>
            <td>{{ $teachers->status }}</td>
            <td>{{ $teachers->dateregistered }}</td>
            <td>{{ $teachers->user_Id }}</td>
            <td>{{ $teachers->class_Id }}</td>
            <td>{{ $teachers->image }}</td>
                <td>
                    {!! Form::open(['route' => ['teachers.destroy', $teachers->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('teachers.show', [$teachers->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('teachers.edit', [$teachers->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
