<div class="table-responsive">
    <table class="table" id="academics-table">
        <thead>
            <tr>
                <th>Academic Year</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($academics as $academics)
            <tr>
                <td>{{ $academics->academic_Year }}</td>
                <td>
                    {!! Form::open(['route' => ['academics.destroy', $academics->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('academics.show', [$academics->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('academics.edit', [$academics->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
