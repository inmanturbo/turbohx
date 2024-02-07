
@switch(request()->method())
    @case('GET')
        <h1>get</h1>
        @break
    @case('POST')
        <h1>post</h1>
        @break
    @case('PUT')
        <h1>put</h1>
        @break
    @case('PATCH')
        <h1>patch</h1>
        @break
    @case('DELETE')
        <h1>delete</h1>
        @break
    @default
        @php
        throw new Exception('This should never happen');
        @endphp
@endswitch

