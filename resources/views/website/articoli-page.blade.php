@extends( 'layouts.page' )

@section( 'page' )
<section>
 <header>
  <h2>{{ __( 'Articoli' ) }}</h2>

  <p>{{ _( 'Alcune delle mie discussioni preferite da sviluppatore web' ) }}</p>
 </header>

 <div>
  @forelse( $articles as $article )
   <div>
    <p>
     <a href="{{ route( 'website.articolo', $article ) }}">{{ $article->title }}</a>
     <span>{{ $article->updated_at->diffForHumans() }}</span>
    </p>
   </div>

  @empty
   <p>{{ __( 'Nessun articolo' ) }}</p>

  @endforelse
 </div>
</section>

@endsection
