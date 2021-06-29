<body>
    <h1>Algum título</h1>
    @if (10 > 15)
        <p>A condição é true</p>
    @endif

    @if ($nome == 'Pedro')
        <p>O nome é Pedro</p>

    @elseif($nome == 'Matheus')
        <p>O nome é {{$nome}} e ele tem {{$idade}} anos, e trabalho como {{$profissao}}</p>
    @else 
        <p>O nome não é Pedro</p>

    @endif

    <p> {{ $nome }} </p>
</body>
