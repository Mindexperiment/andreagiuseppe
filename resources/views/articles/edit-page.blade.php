@extends( 'layouts.page' )

@section( 'page' )
<section>
 <header>
  <h2>{{ __( 'Edit article' ) }}</h2>

  <p>{{ $article->title }}</p>
 </header>

 @include( 'articles.edit-form' )

</section>

@endsection
