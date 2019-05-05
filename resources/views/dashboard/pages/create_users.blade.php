@extends('dashboard.pages.home')

@section('css-home')
<link rel="stylesheet" href="{{ asset('js/plugins/select2/select2-bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('js/plugins/select2/select2.min.css') }}">
@endsection

@section('main')
<h2 class="content-heading">New User</h2>


<div class="block">
    <div class="block-header block-header-default">
        <h3 class="block-title"></h3>
        <div class="block-options">
            <button type="button" class="btn-block-option">
                <i class="si si-wrench"></i>
            </button>
        </div>
    </div>
    <div class="block-content">
        <div class="row justify-content-center py-20">
            <div class="col-xl-6">
                <!-- jQuery Validation (.js-validation-material class is initialized in js/pages/be_forms_validation.js) -->
                <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
            <form class="js-validation-material" action="{{route('users.store')}}" method="post" novalidate="novalidate">

                @csrf
                    <div class="form-group">
                        <div class="form-material">
                            <input type="text" class="form-control" id="val-username2" name="val-username2" placeholder="Enter a username..">
                            <label for="val-username2">Username</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-material">
                            <input type="text" class="form-control" id="val-email2" name="val-email2" placeholder="Your valid email..">
                            <label for="val-email2">Email</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-material">
                            <input type="password" class="form-control" id="val-password2" name="val-password2" placeholder="Choose a safe one..">
                            <label for="val-password2">Password</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-material">
                            <input type="password" class="form-control" id="val-confirm-password2" name="val-confirm-password2" placeholder="..and confirm it!">
                            <label for="val-confirm-password2">Confirm Password</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-material">
                            <select class="form-control" id="val-skill2" name="val-skill2" aria-describedby="val-skill2-error" aria-invalid="true">
                                <option value="">Please select</option>
                                <option value="html">HTML</option>
                                <option value="css">CSS</option>
                                <option value="javascript">JavaScript</option>
                                <option value="angular">Angular</option>
                                <option value="angular">React</option>
                                <option value="vuejs">Vue.js</option>
                                <option value="ruby">Ruby</option>
                                <option value="php">PHP</option>
                                <option value="asp">ASP.NET</option>
                                <option value="python">Python</option>
                                <option value="mysql">MySQL</option>
                            </select>
                            <label for="val-skill2">Nivel</label>
                        </div>

                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-alt-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection


@section('sc')


<script src="{{ asset('js/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('js/plugins/select2/select2.full.min.js') }}"></script>
<script src="{{ asset('js/pages/be_forms_validation.js') }}"></script>
<script src="{{ asset('js/plugins/jquery-validation/additional-methods.min.js') }}"></script>
@endsection