<article>
 <header>
  <h3>{{ $article->title }}</h3>

  <publish-button endpoint="{{ route( 'articles.publish', $article ) }}"{{ $article->isPublished() ? ' published' : '' }}></publish-button>
 </header>
</article>
