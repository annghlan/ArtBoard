<style>
    .cloth{
        width: 150px;
        max-width: 150px;
        max-height: 200px;
    }
</style>
<table class="table table-responsive" id="dataTable">
    <thead>
        <tr>
            <th>Name</th>
            <th>A photo</th>
            <th>Size</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($clothes as $clothes)
        <tr>
            <td>{!! $clothes->name !!}</td>
            <td>
                <img class="cloth" src="img/t-shirts/{!! $clothes->image !!}_front.png">
            </td>
            <td>{!! $clothes->size !!}</td>
            <td>{!! $clothes->price !!}</td>

            <td>
                {!! Form::open(['route' => ['clothes.destroy', $clothes->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('clothes.show', [$clothes->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>