<h1>{{$user->name}}</h1>

<div>
    <p>{{$user->description}}</p>
</div>

<ul>
    <li>NAME: {{$user->name}}</li>
    <li>PASSWORD: {{$user->password}}</li>
    <li>CREATED: {{$user->created_at}}</li>
    <li>UPDATED: {{$user->updated_at}}</li>
    @if($user->deleted_at != null)
        <li>DELETED: {{$user->deleted_at}}</li>
    @endif
</ul>
