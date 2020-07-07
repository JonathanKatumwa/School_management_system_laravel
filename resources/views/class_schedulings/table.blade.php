<div class="table-responsive">
    <table class="table" id="classSchedulings-table">
        <thead>
            <tr>
                <th>Course Id</th>
        <th>Level Id</th>
        <th>Shift Id</th>
        <th>Classroom Id</th>
        <th>Batch Id</th>
        <th>Day Id</th>
        <th>Time Id</th>
        <th>Teacher Id</th>
        <th>Start Time</th>
        <th>End Time</th>
        <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($classSchedulings as $classSchedulings)
            <tr>
                <td>{{ $classSchedulings->course_Id }}</td>
            <td>{{ $classSchedulings->level_Id }}</td>
            <td>{{ $classSchedulings->shift_Id }}</td>
            <td>{{ $classSchedulings->classroom_Id }}</td>
            <td>{{ $classSchedulings->batch_Id }}</td>
            <td>{{ $classSchedulings->day_Id }}</td>
            <td>{{ $classSchedulings->time_Id }}</td>
            <td>{{ $classSchedulings->teacher_Id }}</td>
            <td>{{ $classSchedulings->start_Time }}</td>
            <td>{{ $classSchedulings->end_Time }}</td>
            <td>{{ $classSchedulings->status }}</td>
                <td>
                    {!! Form::open(['route' => ['classSchedulings.destroy', $classSchedulings->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('classSchedulings.show', [$classSchedulings->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('classSchedulings.edit', [$classSchedulings->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
