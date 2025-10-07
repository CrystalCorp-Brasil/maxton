                <div class="modal fade" id="createCat">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header border-bottom-0 py-2 bg-grd-info">
                                <h5 class="modal-title">Adicionar Categoria</h5>
                                <a href="javascript:void()" class="primaery-menu-close" data-bs-dismiss="modal"><i class="material-icons-outlined">close</i></a>
                            </div>
                            <div class="modal-body">
                                <div class="form-body">
                                    <form method="post" action="{{ route('category.store') }}" class="row g-3">
                                        @csrf

                                        <div class="col-md-12">
                                            <label for="input1" class="form-label">Categoria</label>
                                            <input type="text" class="form-control" id="category" name="category" placeholder="Categoria" maxlength="20">
                                            <p class="mt-3">Limite de caracteres <span class="text-danger">20</span>. Disponível: <span class="text-info" id="counterTitle">0</span></p>
                                        </div>
                                        <div class="modal-footer border-top-0">
                                            <button type="button" class="btn btn-grd-deep-blue" data-bs-dismiss="modal">{{ __('Cancel') }}</button>
                                            <button type="submit" class="btn btn-grd-success text-dark">Cadastrar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
