                            <div class="row pl-2">
                                <div class="col-12">
                                    <h4>Mais visitados</h4>
@forelse ($visits as $visit)
                                    <div class="mt-4">
                                        <a href="{{ route('editorial.show',$visit->slug) }}" class="d-inline-block">
                                            <img class="rounded w-100 fit-cover" src="{{ asset($visit->image) }}" alt="{{ $visit->slug }}"/>
                                            <h5 class="mt-3">{{ $visit->title }}</h5>
                                        </a>
                                        <p><small>Categoria: {{ $visit->category }} - {{ $visit->visits }} visitas</small></p>
                                    </div>
@empty
                                    <div class="mt-4">
                                        <a class="mt-4 d-inline-block" href="blog-single.html">
                                            <img class="rounded w-100 fit-cover" src="../assets/img/blog-3.jpg" alt=""/>
                                            <h5 class="mt-3">Não temos nenhuma publicação no momento.</h5>
                                        </a>
                                    </div>
@endforelse
                                    <div class="mt-5">
                                        <h4>Categorias</h4>
                                        <ul class="bullet-inside ps-0 font-secondary">
@foreach ($cats as $cat)
                                            <li><a class="text-body-secondary" href="#!">{{ $cat->category }}</a></li>
@endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
