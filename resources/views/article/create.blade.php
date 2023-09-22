<x-layout>
    <div class="container text-center tet-white marginTopNav">
        <div class="row justify-content-center">
            <h1 class="display-1 mt-4">
                <div class="bentornato" id="demotext">Inserisci il tuo articolo</div>
            </h1>
        </div>
    </div>
    <div class="container ">
        <div class="row mt-5">
            <div class="col-12 col-md-6">
                <h1><div class="creaArticolo" id="demotext">Compila tutti i campi</div></h1>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form class="card cardcandidati p-4 shadow" action="{{route('article.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" class="form-control" id="title" value="{{old('title')}}" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="subtitle" class="form-label">Sottotitolo</label>
                        <input type="text" class="form-control" id="subtitle" value="{{old('subtitle')}}" name="subtitle">
                    </div>
                    <div class="mb-3">
                        <label for="tags" class="form-label">Tags</label>
                        <input type="text" class="form-control" id="tags" value="{{old('tags')}}" name="tags">
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
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="body" class="form-label">Corpo del testo:</label>
                        <textarea name="body" id="body" cols="30" rows="8" class="form-control">{{old('body')}}</textarea>
                    </div class="mt-3">
                    <button type="submit" class="btn  btn-secondary sfondo">Inserisci il tuo articolo</button>
                </form>
            </div> 
            <div class="col-12 col-md-6 align-items-center d-flex">
                <img class="articolo" src="/logo/libri.png" alt="">
            </div>
        </div>
    </div> 
    
</x-layout>