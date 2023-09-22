<x-layout>
    <div class="container-fluid p-5 container text-center tet-white marginTopNav">
        <div class="row justify-content-center">
            <h1 class="display-1 bentornato" id="demotext">Modifica un articolo</h1>
        </div>
    </div>
    
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form class="card cardcandidati p-5 shadow" action="{{route('article.update', compact('article'))}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" class="form-control" id="title" value="{{$article->title}}" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="subtitle" class="form-label">Sottotitolo</label>
                        <input type="text" class="form-control" id="subtitle" value="{{$article->subtitle}}" name="subtitle">
                    </div>
                    <div class="mb-3">
                        <label for="tags" class="form-label">Tags</label>
                        <input name="tags" type="text" class="form-control" id="tags" value="{{$article->tags->implode('name',',')}}">
                        <span class="small fst-italic">Dividi ogni Tag con una virgola</span>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Immagine</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Categoria</label>
                        <select name="category" id="category" class="form-control text-capitalize">
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}" @if($article->category && $category->id == $article->category->id) selected @endif>{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="body" class="form-label">Corpo del testo:</label>
                        <textarea name="body" id="body" cols="30" rows="8" class="form-control">{{$article->body}}</textarea>
                    </div>
                    <div class="mt-2 d-flex">
                        <button type="submit" class="btn btn-outline-secondary text-white"> Modifica un articolo</button>
                        <br>
                        <br>
                        <a href="{{route('welcome')}}" class="btn btn-outline-secondary text-white">Torna alla Homepage</a>
                    </div>
                </form>
            </div>
        </div>
    </div> 
 </x-layout>