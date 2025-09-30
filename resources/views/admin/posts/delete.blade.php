                <div class="modal fade" id="deletePost{{ $post->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle-2">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle-2">Excluir {{ $post->title }}</h5>
                                <button class="btn btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form method="post" action="{{ route('post.destroy',$post->id) }}">
                                @csrf

                                @method('delete')

                                <div class="modal-body">
                                    <h2 class="text-lg text-justify">Tem certeza de que deseja excluir a postagem?</h2>
                                    <p class="mt-1 text-justify">Uma vez que essa postagem for excluída não terá como voltá-la. Por favor, digite sua senha para confirmar que deseja excluir permanentemente a postagem.</p>
                                    <div class="my-3">
                                        <label for="password" value="{{ __('Password') }}" class="sr-only"></label>
                                        <input type="password" id="password" name="password" class="form-control" required placeholder="{{ __('Password') }}"/>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary mx-2" data-bs-dismiss="modal">{{ __('Cancel') }}</button>
                                    <button type="submit" class="btn btn-danger mx-2">Excluir Postagem</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
