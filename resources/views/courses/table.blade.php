<div class="table-responsive">
    <table class="table" id="courses-table">
        <thead>
            <tr>
                <th>Course Name</th>
        <th>Course Code</th>
        <th>Description</th>
        <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($courses as $courses)
            <tr>
                <td>{{ $courses->course_Name }}</td>
            <td>{{ $courses->course_Code }}</td>
            <td>{{ $courses->description }}</td>
            <td>
            @if($courses->status = 1)
            <span class="btn btn-alert-success">Active</span>
            @else
            <span class="btn btn-alert-danger">In-Active</span>
            @endif
            </td>
                <td>
                    {!! Form::open(['route' => ['courses.destroy', $courses->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('courses.show', [$courses->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('courses.edit', [$courses->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
