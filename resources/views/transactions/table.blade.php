<div class="table-responsive">
    <table class="table" id="transactions-table">
        <thead>
            <tr>
                <th>Student Id</th>
        <th>Fee Id</th>
        <th>User Id</th>
        <th>Paid</th>
        <th>Transaction Date</th>
        <th>Remark</th>
        <th>Description</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($transactions as $transactions)
            <tr>
                <td>{{ $transactions->student_Id }}</td>
            <td>{{ $transactions->fee_Id }}</td>
            <td>{{ $transactions->user_Id }}</td>
            <td>{{ $transactions->paid }}</td>
            <td>{{ $transactions->transaction_Date }}</td>
            <td>{{ $transactions->remark }}</td>
            <td>{{ $transactions->description }}</td>
                <td>
                    {!! Form::open(['route' => ['transactions.destroy', $transactions->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('transactions.show', [$transactions->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('transactions.edit', [$transactions->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
