                                            <form 
                                                action="{{ route("users.store") }}"
                                                enctype="multipart/form-data" 
                                                method="post">
                                               
                                                @csrf
                                                <div class="row gx-1 gy-1">
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="name">
                                                                <strong>name</strong>
                                                            </label>
                                                            <input 
                                                                class="form-control form-control-sm rounded-0
                                                                {{ $errors->has('name') ? 'is-invalid' : '' }}" 
                                                                type="text" id="title" 
                                                                name="name" 
                                                                placeholder="title"> 
                                                               
                                                                @if($errors->has('name'))
                                                                <span class="text-danger">
                                                                    {{ $errors->first('name') }}
                                                                </span>
                                                                @endif

                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- name Field -->
                                            

                                                <div class="row gx-1 gy-1">
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="email">
                                                                <strong>email</strong>
                                                            </label>
                                                            <input 
                                                                class="form-control form-control-sm rounded-0
                                                                {{ $errors->has('email') ? 'is-invalid' : '' }}" 
                                                                type="email" id="email" 
                                                                name="email" 
                                                                placeholder="email"> 
                                                               
                                                                @if($errors->has('email'))
                                                                <span class="text-danger">
                                                                    {{ $errors->first('email') }}
                                                                </span>
                                                                @endif

                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- email Field -->

                                                <div class="row gx-1 gy-1">
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="password">
                                                                <strong>password</strong>
                                                            </label>
                                                            <input 
                                                                class="form-control form-control-sm rounded-0
                                                                {{ $errors->has('password') ? 'is-invalid' : '' }}" 
                                                                type="password" id="password" 
                                                                name="password" 
                                                                placeholder="password"> 
                                                               
                                                                @if($errors->has('password'))
                                                                <span class="text-danger">
                                                                    {{ $errors->first('password') }}
                                                                </span>
                                                                @endif

                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- password Field -->

                                            
 
 
 

                                                <div class="mb-3">
                                                    <button 
                                                        class="btn btn-primary btn-sm rounded-0 border-0" 
                                                        type="submit">
                                                        <i class="fas fa-plus"></i>
                                                        &nbsp;Create
                                                    </button>
                                                </div>
                                            </form>