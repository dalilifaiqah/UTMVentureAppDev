@include('layout.layout')

@section('title', 'Home Page')
@include('partials._search')

@section('content')
    <h1>Welcome to UTMVenture page!</h1>
    <p>Click the link below to visit the guide page:</p>
    <a href="{{url('guide')}}">Visit Guide Page</a>
    <a href="{{url('events')}}">Events</a>
    <!-- Other content specific to the home page goes here -->
@endsection

<body>
    <h1>Welcome to my UTMVenture  page!</h1>
    <p>Click the link below to visit the guide page:</p>
    <div><ul><a href="/guide">Visit Guide Page</a></ul>
        <ul><a href="/events">Events</a><ul></div>
</body>