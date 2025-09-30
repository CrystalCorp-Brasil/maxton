                    <div class="modal fade" id="deleteUser" style="display: none;" aria-modal="true" role="dialog">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-header border-bottom-0 py-2">
                                    <h5 class="modal-title">{{ __('Delete Account') }}</h5>
                                    <a href="javascript:void()" class="primaery-menu-close" data-bs-dismiss="modal"><i class="material-icons-outlined">close</i></a>
                                </div>
                                <form method="post" action="{{ route('profile.destroy') }}">
                                    @csrf

                                    @method('delete')

                                    <div class="modal-body">
                                        <h2 class="text-lg text-justify">{{ __('Are you sure you want to delete your account?') }}</h2>
                                        <p class="mt-1 text-justify">{{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}</p>
                                        <div class="col-12">
                                            <label for="inputChoosePassword" class="form-label">Senha</label>
                                            <div class="input-group" id="show_hide_password">
                                                <span class="input-group-text fad fa-key" style="padding-top: 10px"></span>
                                                <input type="password" class="form-control" id="inputChoosePassword" name="password" placeholder="Digite a senha">
                                                <a href="javascript:;" class="input-group-text bg-transparent"><i class="bi bi-eye-slash-fill"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer border-top-0">
                                        <button type="button" class="btn btn-grd-deep-blue" data-bs-dismiss="modal">{{ __('Cancel') }}</button>
                                        <button type="submit" class="btn btn-grd-danger">{{ __('Delete Account') }}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
