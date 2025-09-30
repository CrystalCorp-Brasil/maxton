                            <div class="row pr-2">
                                <div class="col">
@forelse ($posts as $post)
                                    <div>
                                        <p class="font-secondary text-body-tertiary mb-0">{{ $post->created_at->format('d/m/Y H:i:s') }}</p>
                                        <h3 class="font-secondary">{{ $post->title }} - postado por: <span class="text-info text-capitalize">{{ $post->user->username }}</span></h3>
                                        <img class="d-block w-100 mb-4 rounded" src="{{ $post->image }}" alt="{{ $post->slug }}"/>
                                        <p class="mt-4 text-justify">{!! Str::limit($post->subject,200,'...') !!}&nbsp;
                                            <a href="{{ route('editorial.show',$post->slug) }}"><span class="d-inline-block ms-1">&xrarr;</span>&nbsp;continue lendo</a>
                                        </p>
                                        <span class="text-green  mt-3 mr-2">Visualizações: </span><span class="font-secondary ps-1">{{ $post->visits }}</span>
                                    </div>
                                    <hr class="text-white">
@empty
                                    <div class="mb-3 mb-xl-4 mt-3 mt-xl-4"><h3 class="font-secondary">Ainda não temos Editoriais publicados!</h3></div>
@endforelse
                                </div>
                            </div>
