<x-layout>  
    
    
    <div class="container-fluid p-5 text-center  marginTopNav">
        <div class="row h-100 justify-content-center  align-items-center">
            <h1 class="display-1 pt-5">
                <div class="titolowelcome pt-5" id="demotext" >Gli ultimi articoli inseriti</div>
            </h1>  
        </div>
    </div> 
    
    @if(session('message'))
    <div class="alert alert-success display-5 text-center text-dark lead">
        {{session('message')}}
    </div>     
    @endif
    <div class="container text-center">
        <div class="row">
            @foreach ($articles as $article)
            <div class="col-12 col-md-4 my-5">
                <div class="card">
                    <div class="imgIndex">
                        <img src="{{Storage::url($article->image)}}" class="cardImg" alt="...">
                    </div>
                    <div class="card-details my-4">
                        <h4 class="card-title">{{$article->title}}</h4>
                        <p class="card-title">{{$article->subtitle}}</p>
                    </div>
                    @if ($article->category)
                    <a href="{{route('article.byCategory', ['category' => $article->category->id])}}" class="small text-muted fst-italic text-capitalize">Categoria: <strong>{{$article->category->name}}</strong></a>
                    @else
                    <p class="small text-muted fst-italic">Non associato a categoria</p>
                    @endif
                    <br>
                    <div class="d-flex justify-content-center fs-5 text mt-2 mb-3">
                        {{-- <a href="{{route('article.byCategory', ['category' => $article->category->id])}}" class="small text-muted fst-italic text-capitalize">{{$article->category->name}}</a> --}}
                        {{-- @dd($article->user->id) --}}
                        <a href="{{route('article.byUser', ['user' => $article->user->id])}}" class="small text-muted fst-italic">Creato da: <strong>{{$article->user->name}}</strong></a>
                    </div>
                    <br>
                    <span class="text-muted small fst-italic">Tempo di lettura: {{$article->readDuration()}} min</span>
                    <hr>
                    <p class="small fw-bold fst-italic text-capitalize">
                        @foreach ($article->tags as $tag)
                        #{{$tag->name}}
                        @endforeach
                    </p>  
                    <div class="card-footer text-muted text-center">
                        <u class="ciao1 fst-italic">redatto il {{$article->created_at->format('d/m/y H:i')}}</u>
                        <a href="{{route('article.show', compact('article'))}}"></a>
                    </div>  
                    <button class="card-button">
                        <a href="{{route('article.show', compact('article'))}}" class="text-white">Dettaglio</a>
                    </button>
                </div>
            </div>
            @endforeach       
        </div>
    </div>
    
    
    
    
</x-layout>