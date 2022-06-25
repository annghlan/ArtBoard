<table class="table table-responsive" id="dataTable">
    <thead>
        <tr>
            <th>Name</th>
        <th>Email</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($users as $users)
        <tr>
            <td>{!! $users->name !!}</td>
            <td>{!! $users->email !!}</td>
            <td>
                {!! Form::open(['route' => ['users.destroy', $users->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('users.show', [$users->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Ти впевнений?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>