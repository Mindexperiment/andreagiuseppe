@extends( 'layouts.page' )

@section( 'page' )
<section>
 <header>
  <h2>{{ __( 'New article' ) }}</h2>
 </header>

 @include( 'articles.create-form' )

</section>

@endsection
