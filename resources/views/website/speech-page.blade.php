@extends( 'layouts.page' )

@section( 'page' )
<section>
 <header>
  <h2>{{ $article->title }}</h2>

  <p>{{ $article->owner->name }} - {{ $article->updated_at->diffForHumans() }}</p>
 </header>

 <div>
  {{ Illuminate\Mail\Markdown::parse( $article->body ) }}
 </div>
</section>

@endsection
