@extends( 'layouts.layout' )

@section( 'body' )
 @include( 'layouts.header' )

 <p>Ciao, sono Andrea (<a href="https://twitter.com/andrea_gius" target="_blank">@andrea_giu</a>). Sono uno sviluppatore Full-Stack e Consulente per la pianificazione di Web App moderne, innovative e scalabili.</p>

 <p>Sto sviluppando <a href="https://kaleskop.com" target="_blank">Kaleskop</a> un'applicazione, a livello Europeo, che ti permette di pubblicizzare i tuoi prodotti e servizi in modi che non hai mai visto prima.</p>

 <p>Condivido tutto quello che conosco sullo sviluppo di applicazioni straordinarie nella sezione <a href="{{ route( 'articles.speeches' ) }}">Articoli</a>.</p>

 @include( 'layouts.footer' )

@endsection
