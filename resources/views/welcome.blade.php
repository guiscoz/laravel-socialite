<head>
    <title>Login</title>
</head>
<body>
    @if(auth()->check())

    @else
        <a href="/auth/google/redirect">Login with Google</a>
    @endif
</body>
