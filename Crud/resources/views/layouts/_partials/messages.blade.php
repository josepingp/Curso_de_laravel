@if ($message = Session::get('success'))
    <div style="padding: 15px; background-color: green; color: white;" >
        <h3>{{ $message }}</h3>
    </div>
@endif
@if ($message = Session::get('danger'))
    <div style="padding: 15px; background-color: orange; color: white;" >
        <h3>{{ $message }}</h3>
    </div>
@endif