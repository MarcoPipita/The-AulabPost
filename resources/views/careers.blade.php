<x-layout>
    <div class="container text-center tet-white marginTopNav">
        <div class="row justify-content-center">
            <h1 class="display-1 mt-5">
                <div class="bentornato" id="demotext">Lavora con noi</div>
            </h1>
        </div>
    </div>
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <h2>Lavora come amministratore</h2>
                <p>diventa il nostro responsabile di amministrazione con un team molto giovane e unito!</p>
                <h2>Lavora come revisore</h2>
                <p>diventa il nostro responsabile di revisione con un team molto giovane e unito!</p>
                <h2>Lavora come redattore</h2>
                <p>diventa il nostro responsabile di redazione con un team molto giovane e unito!</p>
            </div>
            <div class="col-12 col-md-6">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form class="cardcandidati card  p-5" action="{{route('careers.submit')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="role" class="form-label">Per quale ruolo ti stai candidando?</label>
                        <select name="role" id="role" class="form-control">
                            <option value="">Scegli qui</option>
                            <option value="admin">Amministratore</option>
                            <option value="revisor">Revisore</option>
                            <option value="writer">Redattore</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" id="email" value="{{old('email') ?? Auth::user()->email}}">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Parlaci di te! Elenca qualche tua peculiarità: <span class="fst-italic fw-bold">"perchè il tuo profilo potrebbe interessarci?</span></label>
                        <textarea name="message" id="message" cols="30" rows="10" class="form-control">{{old('message')}}</textarea>
                    </div>
                  <div class="mt-2">
                       <button type="submit" class="btn btn-secondary text-white sfondo">Invia la candidatura</button>
                  </div>
              </form>
          </div>
       </div>
   </div>
</x-layout>