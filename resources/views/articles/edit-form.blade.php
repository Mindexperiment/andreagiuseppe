<form method="POST" action="{{ route( 'articles.update', $article ) }}">
 @csrf
 @method('PATCH')

 <fieldset>
  <legend>{{ __( 'Article details' ) }}</legend>

  <div>
   <label for="title">{{ __( 'Title' ) }}</label>
   <input type="text" name="title" id="title" value="{{ $article->title }}" required />

   @if ( $errors->has( 'title' ) )
    <p>{{ $errors->first( 'title' ) }}</p>
   @endif

   <p><small>{{ __( 'Edit article title.' ) }}</small></p>
  </div>

  <div>
   <label for="body">{{ __( 'Body' ) }}</label>
   <textarea name="body" id="body" required>{{ $article->body }}</textarea>

   @if ( $errors->has( 'body' ) )
    <p>{{ $errors->first( 'body' ) }}</p>
   @endif

   <p><small><span></span> <a href="https://guides.github.com/features/mastering-markdown/" target="_blank">Style with Markdown</a></small></p>
  </div>
 </fieldset>

 <button type="submit">{{ __( 'Edit' ) }}</button>
</form>
