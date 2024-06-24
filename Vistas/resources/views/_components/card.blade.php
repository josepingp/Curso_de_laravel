<div>
    {{-- Asi definimos un slot que seria una variable donde podremos inyectar datos --}}
    <h3>{{ $title }}</h3>
    {{-- Para cargar recursos estaticos --}}
    <img src="{{ asset('./assets/img/B20132024.06.14172435.png') }}" alt="example" width="200">
{{-- hay que hubicarlos en la carpeta public para cumplir
    con las buenas practicas en assets--}}
    <p>{{ $content }}</p>
</div>