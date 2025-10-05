@if ($user->level != 'user')
                    <div class="position-relative">
                        <form action="{{ route('icons.index') }}" method="GET">
                            @csrf

                            <input class="form-control rounded-5 px-5 search-control d-lg-block d-none" type="text" placeholder="Pesquisar" aria-label="Recipient's username" aria-describedby="basic-addon2" name="search" value="">
                            <span class="material-icons-outlined position-absolute d-lg-block d-none ms-3 translate-middle-y start-0 top-50">search</span>
                            <span class="material-icons-outlined position-absolute me-3 translate-middle-y end-0 top-50 search-close">close</span>
                        </form>
                    </div>
@endif
