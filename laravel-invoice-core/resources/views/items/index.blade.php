<h1>Items</h1>
<a href="{{route("items.create")}}">Vytvořit nový</a>
<table>
    @foreach($items as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->currency}}</td>
            <td>{{$item->price}}</td>
            <td>
                <!-- TODO: Form not exist - install Infyom or Collective\Html\FormFacade -->
                {!! Form::open(["route" => ["items.destroy", $item->id], "method"=>"delete"]) !!}

                    <a href="{{ route("items.edit", $item->id) }}">Edit</a>
                    <a href="{{ route("items.show", $item->id) }}">View</a>

                    {!! Form::button('<span>Delete</span>', ["type" => "submit",
                    "onclick"=> "return confirm('Opravdu chcete tento item odebrat?')"]) !!}

                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
</table>
