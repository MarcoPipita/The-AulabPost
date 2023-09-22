<x-layout>
    {{-- titolo --}}
    <div class="container text-center my-5">
        <div class="row pt-5 mt-5">
            <div class="col-12 pt-5 mt-5">
                <h1 class=" titoloarticolo display-1">{{$article->title}}</h1>
            </div>
        </div> 
    </div>
    {{-- sottotitolo --}}
    <div class="container text-center">
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <h2 class="titoloarticolo">{{$article->subtitle}}</h2>
                </div>
            </div>
        </div> 
    </div>
    
    
    <div class="container-fluid my-5">
        <div class="imgdetail row ">
            <div class="col-6 h-100 d-flex justify-content-center align-items-center">
                {{-- immagine --}}
                <div>
                    <img src="{{Storage::url($article->image)}}"class="imgdetail" alt="...">
                </div>
            </div>  
            
            
            {{-- testo articolo --}}
            <div class="col-6 h-100">
                <div class="h-50 justify-content-center">
                    <p class="testocard">{{$article->body}}</p>
                </div>
                <div class="h-50">
                    <p class="small text-center fst-italic text-capitalize">
                        @foreach ($article->tags as $tag)
                        #{{$tag->name}}
                        @endforeach
                    </p>
                    <hr>
        
                    <div class="text-muted fw-light text-center fst-italic fw-bold mt-5">
                        redatto il {{$article->created_at->format('d/m/y')}} da {{$article->user->name}} 
                        <div class="text-center mt-5">
                            <a href="{{route('welcome')}}" class="btn btn-dark text-white my-5">Home</a>
                        </div>
                    </div>
                </div>
              
                
            </div>
        </div>
    </div>
        
        
        
        
        
        
        <div class="text-center mt-5">
            @if(Auth::user() && Auth::user()->is_revisor)
            <a href="{{route('revisor.acceptArticle', compact('article'))}}" class="btn btn-dark text-white my-5">Accetta articolo</a>
            <a href="{{route('revisor.rejectArticle', compact('article'))}}" class="btn btn-dark text-white my-5">Rifiuta articolo</a>
            @endif
        </div>
        
        
        
    </x-layout>