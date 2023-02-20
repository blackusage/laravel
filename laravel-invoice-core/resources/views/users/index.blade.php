<h1>Users</h1>
<a href="{{route("users.create")}}">Vytvořit nový</a>
<table>
    @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
            <td>
                {!! Form::open(["route" => ["users.destroy", $user->id], "method"=>"delete"]) !!}

                <a href="{{ route("users.edit", $user->id) }}">Edit</a>
                <a href="{{ route("users.show", $user->id) }}">View</a>

                {!! Form::button('<span>Delete</span>', ["type" => "submit",
                "onclick"=> "return confirm('Opravdu chcete tento user odebrat?')"]) !!}

                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
</table>
