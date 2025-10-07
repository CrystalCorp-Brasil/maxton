@if ($user->level != 'user')
                    <div class="position-relative">
                        <form action="{{ route('icons.index') }}" method="GET">
                            @csrf

                            <input class="form-control rounded-5 px-5 search-control d-lg-block d-none" type="text" placeholder="Pesquisar" aria-label="Recipient's username" aria-describedby="basic-addon2" name="search" value="">
                            <span class="material-icons-outlined position-absolute d-lg-block d-none ms-3 translate-middle-y start-0 top-50">search</span>
                            <span class="position-absolute translate-middle-y end-0 top-50"><button type="submit" class="btn btn-primary px-4 rounded-5 d-flex gap-2"><i class="material-icons-outlined">search</i>Pesquisar</button></span>
                        </form>
                    </div>
@endif
