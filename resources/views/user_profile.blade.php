<head>
    <title>Profile</title>
</head>
<body>
    <img src="{{$user->provider_avatar}}" alt="User's profile picture">
    <h1>Welcome {{$user->name}}!</h1>
    <p>You've logged with {{$user->provider_name}}</p>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
