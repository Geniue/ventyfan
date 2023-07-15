
@extends("layouts.index")

@section('content')
<main class="main-content" id="MainContent">
        

    <div class="page-width page-content">
    
      
    
    
      <div class="grid">
        <div class="grid__item">
          <header class="section-header">
            <h1 class="section-header__title">
              Search
            </h1>
          </header>
    
          
    
    <form action="/search" method="get" class="input-group search-bar search-bar--page" role="search">
      
        <input type="hidden" name="type" value="product">
      
      <input type="search" name="q" value="he" placeholder="Search our store" class="input-group-field" aria-label="Search our store">
      <span class="input-group-btn">
        <button type="submit" class="btn">
          <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-search" viewBox="0 0 64 64"><defs><style>.cls-1{fill:none;stroke:#000;stroke-miterlimit:10;stroke-width:2px}</style></defs><path class="cls-1" d="M47.16 28.58A18.58 18.58 0 1 1 28.58 10a18.58 18.58 0 0 1 18.58 18.58zM54 54L41.94 42"></path></svg>
          <span class="icon__fallback-text">Search</span>
        </button>
      </span>
    </form>
    
    
          
    
            <hr class="hr--medium">
    
            <div data-section-id="" data-section-type="collection-template">
              <h2>
                0 results
              </h2>
              
                Your search for "Hello" did not yield any results.
              
    
              <div class="grid grid--uniform">
                
    
                
              </div>
            </div>
    
            
    
          
    
        </div>
      </div>
    </div>
    
    
    
          </main>
@endsection