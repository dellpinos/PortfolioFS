@extends('layout.home')

@section('contenido')

<div class="apps">
    <img src="{{ asset('img/home/commerce.svg') }}" alt="Choose imagen">
    <div>
        <h3>Por que elegirnos</h3>

        <div class="apps__grid">
            <div class="apps__item">
                <h4>Equipo Experimentado</h4>
                <p>Os sed voluptate unde incidunt quidem natus possimus eaque laborum accusamus! Numquam, tempora?
                    Velit, nesciunt perferendis.</p>
            </div>
            <div class="apps__item">
                <h4>Equipo Experimentado</h4>
                <p>Os sed voluptate unde incidunt quidem natus possimus eaque laborum accusamus! Numquam, tempora?
                    Velit, nesciunt perferendis.</p>
            </div>
            {{-- <div class="apps__item">
                <h4>Equipo Experimentado</h4>
                <p>Os sed voluptate unde incidunt quidem natus possimus eaque laborum accusamus! Numquam, tempora?
                    Velit, nesciunt perferendis.</p>
            </div>
            <div class="apps__item">
                <h4>Equipo Experimentado</h4>
                <p>Os sed voluptate unde incidunt quidem natus possimus eaque laborum accusamus! Numquam, tempora?
                    Velit, nesciunt perferendis.</p>
            </div> --}}
        </div>
    </div>
</div>


@endsection
