<div class="table-responsive">
    <table class="table" id="attendances-table">
        <thead>
            <tr>
                <th>Student Id</th>
        <th>Class Id</th>
        <th>Subject Id</th>
        <th>Teacher Id</th>
        <th>Attendance Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($attendances as $attendances)
            <tr>
                <td>{{ $attendances->student_Id }}</td>
            <td>{{ $attendances->class_Id }}</td>
            <td>{{ $attendances->subject_Id }}</td>
            <td>{{ $attendances->teacher_Id }}</td>
            <td>{{ $attendances->attendance_Status }}</td>
                <td>
                    {!! Form::open(['route' => ['attendances.destroy', $attendances->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('attendances.show', [$attendances->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('attendances.edit', [$attendances->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
