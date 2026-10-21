<div>
    <!-- He who is contented is rich. - Laozi -->
    <h1>Hello Users</h1>
    <h3>{{-- $users[2] --}}</h3>

    @if ($users[0]=='anil')
        <h3>Welcome admin</h3>
    @elseif ($users[0]=='sidhu')
        <h3>Welcome manager</h3>
    @else
        <h3>Welcome User</h3>
    @endif

    <h2>{{ printName() }}</h2>

    @foreach ($users as $user )
        {{-- laravel comment --}}
        <h4>{{ $user }}</h4>
    @endforeach
    @for ($i=0;$i<10;$i++)
        <h4>{{ $i }}</h4>
    @endfor

    @php
        function printName(){
            return ("Hello Anil");
        }
    @endphp


</div>
