@extends( 'layouts.page' )

@section( 'page' )
<section>
 <header>
  <h2>{{ __( 'Articles' ) }}</h2>

  <a href="{{ route( 'articles.create' ) }}">{{ __( 'New article' ) }}</a>
 </header>

 <div>
  @forelse( $articles as $article )
   @include( 'articles.tile' )

  @empty
   <p>{{ __( 'No article' ) }}</p>

  @endforelse
 </div>
</section>

@endsection
