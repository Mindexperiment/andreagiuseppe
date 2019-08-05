<form method="POST" action="{{ route( 'articles.destroy', $article ) }}">
 @csrf
 @method('DELETE')

 <button type="submit">{{ __( 'Delete' ) }}</button>
</form>
