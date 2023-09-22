<x-layout>
    <div class="container-fluid p-5 text-center tet-white marginTopNav">
        <div class="row justify-content-center">
            <h1 class="display-1 text-capitalize">
               Categoria {{$category->name}}
            </h1>
        </div>
    </div>
    <div class="container-fluid text-center">
        <div class="row justify-content-around">
            @foreach ($articles as $article)
            <div class="col-12 col-md-3 my-4">
                <div class="cardCategory">
                    <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="...">
                    <div class="my-5 cardCategory-details">
                        <h4 class="card-title">{{$article->title}}</h4>
                        <p class="card-text">{{$article->subtitle}}</p>
                    </div>
                    <br>
                    <br>
                    <br>
                    <hr>
                    <div class="card-footer text-muted d-flex justify-content-between aling-items-center">
                        redatto il {{$article->created_at->format('d/m/y')}} da {{$article->user->name}} 
                        <a href="{{route('article.show', compact('article'))}}" class="btn btn-secondary text-white">Leggi</a>
                    </div>
                </div> 
            </div> 
            @endforeach 
        </div>
    </div>
    
</x-layout>