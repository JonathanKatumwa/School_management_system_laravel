<div class="table-responsive">
    <table class="table" id="admissions-table">
        <thead>
            <tr>
                <th>Roll No</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Father Name</th>
        <th>Father Phone</th>
        <th>Mother Name</th>
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
        @foreach($admissions as $admissions)
            <tr>
                <td>{{ $admissions->roll_No }}</td>
            <td>{{ $admissions->first_Name }}</td>
            <td>{{ $admissions->last_Name }}</td>
            <td>{{ $admissions->father_Name }}</td>
            <td>{{ $admissions->father_Phone }}</td>
            <td>{{ $admissions->mother_Name }}</td>
            <td>{{ $admissions->gender }}</td>
            <td>{{ $admissions->email }}</td>
            <td>{{ $admissions->dob }}</td>
            <td>{{ $admissions->phone }}</td>
            <td>{{ $admissions->address }}</td>
            <td>{{ $admissions->current_Address }}</td>
            <td>{{ $admissions->nationality }}</td>
            <td>{{ $admissions->passport_No }}</td>
            <td>{{ $admissions->status }}</td>
            <td>{{ $admissions->dateregistered }}</td>
            <td>{{ $admissions->user_Id }}</td>
            <td>{{ $admissions->class_Id }}</td>
            <td>{{ $admissions->image }}</td>
                <td>
                    {!! Form::open(['route' => ['admissions.destroy', $admissions->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admissions.show', [$admissions->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('admissions.edit', [$admissions->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
