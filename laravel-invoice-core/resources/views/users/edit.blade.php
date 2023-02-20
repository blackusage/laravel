<h1>Edit: {{$users->name}}</h1>

<form method="POST" action="/items/{{$users->id}}">
    <!-- FIX CSRF policy -->
@csrf
<!-- name field -->
    <div>
        <label for="name">Název</label>
        <input type="text" id="name" name="name" value="{{$users->name}}">
    </div>
    <!-- email field -->
    <div>
        <label for="email">Email</label>
        <input type="text" id="email" name="email" value="{{$users->email}}">
    </div>

    <!-- password field -->
    <div>
        <label for="heslo">heslo</label>
        <input type="text" id="password" name="password" value="{{$users->password}}">
    </div>


    <input type="submit" value="Uložit">
</form>
