<div class="table-responsive">
    <table class="table" id="times-table">
        <thead>
            <tr>
                <th>Time</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($times as $times)
            <tr>
                <td>{{ $times->time }}</td>
                <td>
                    {!! Form::open(['route' => ['times.destroy', $times->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('times.show', [$times->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('times.edit', [$times->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
