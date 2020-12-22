<h2 style="color: white;" class="text-center">Profile Details</h2>
@foreach ($user as $key => $item)
    <p style="color: white;">{{ $key }} : {{ $item }}</p>
@endforeach

