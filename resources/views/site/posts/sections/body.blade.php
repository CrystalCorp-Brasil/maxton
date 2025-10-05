                            <div class="row pr-2">
                                <div class="col">
                                    <div>
                                        <p class="font-secondary text-body-tertiary mb-0">{{ $post->created_at->format('d/m/Y H:i:s') }}</p>
                                        <h3 class="font-secondary">{{ $post->title }} - postado por: <span class="text-info text-capitalize">{{ $post->user->username }}</span></h3>
                                        <img class="d-block w-100 mb-4 rounded" src="{{ asset($post->image) }}" alt="{{ $post->slug }}"/>
                                        <div class="mt-4 text-justify">{!! $post->content !!}</div>
                                        <span class="text-green  mt-3 mr-2">Visualizações: </span><span class="font-secondary ps-1">{{ $post->visits }}</span>
                                    </div>
                                    <hr class="text-white">
                                    <button class="btn btn-a-link-1 text-bold ml-2" onclick="history.back()"><span class="d-inline-block ms-1">&xlarr;</span>&nbsp; Voltar</button>
                                </div>
                            </div>
