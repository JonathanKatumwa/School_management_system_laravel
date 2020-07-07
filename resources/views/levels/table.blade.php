<div class="table-responsive">
    <table class="table" id="levels-table">
        <thead>
            <tr>
                <th>Level</th>
        <th>Level Description</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($levels as $levels)
            <tr>
                <td>{{ $levels->level }}</td>
            <td>{{ $levels->level_Description }}</td>
                <td>
                    {!! Form::open(['route' => ['levels.destroy', $levels->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('levels.show', [$levels->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('levels.edit', [$levels->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
