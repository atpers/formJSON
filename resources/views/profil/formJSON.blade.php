@extends('layouts.app')
@section('meta_title','Mein Profil')
{{--additional CSS Files or Links--}}
@section('additionalStyles')
    <style>
    </style>
@endsection
@section('content')
    <div class="container">
        <!--project form successfully messages -->
        @if (session('success'))
        <div class="alert alert-primary">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
    </div>
    {{-- background-color:rgba(74, 74, 78, 0.733) !important; --}}
    <div class="container-md mt-5" style="align-content:center">
        <div class="card o-hidden border-5 jumbotron jumbotron-fluid shadow-lg p-30" style="align-content:center;background-color:rgba(64, 64, 105, 0.774) !important; border-color:rgba(231, 88, 5, 0.733) !important;">
            <div class="row mt-3">
                <div class="col-12">
                    <div class="text-center" style="font-family: 'Orbitron', sans-serif;">
                        <h1 class="h2 profilMy text-gray-900" style="color: rgb(243, 123, 67); font-size:50px; text-align:left; padding-left:50px">{{ __('72 Solutions') }}</h1>
                    </div>
                </div>
            </div>

            <hr class="ml-3 mr-3" style="border-top:2px solid rgba(255, 255, 255)">

            <div class="card-body p-50" >



                <!-- Nested Row within Card Body -->
                {{-- <div class="row"> --}}
                    {{-- <div class="col-lg-5 d-none d-lg-block bg-login">
                        <div class="p-5" style="max-width: 100%; height: auto;"> --}}
                            {{-- @if($user->avatar == "avatar-grey.jpg")
                                <img class="img-fluid shadow" src="/storage/users/avatar-grey.jpg"
                                     style="padding: 20% 15% 20% 15%;width: 400px;height: 400px;">
                            @else
                                <img class="img-fluid shadow" src="/storage{{Auth::user()->avatar}}"
                                     style="padding: 20% 15% 20% 15%;">
                            @endif --}}
                        {{-- </div>
                    </div> --}}
                    {{-- <div class="col-lg-7"> --}}
                        <div class="mx-auto"style="width: 800px;">
                            <form class="user" method="POST" action="{{ route('store-profile') }}"
                                  enctype="multipart/form-data">
                                @csrf
                                {{-- {{ csrf_token() }} --}}

                                <div class="form-group row">
                                    <label for="anrede" class="col-md-4 col-form-label text-md-right" style="color: rgb(255, 255, 255)">Anrede</label>
                                    <div class="col-md-6">
                                        <select class="form-control @error('anrede') is-invalid @enderror" value="{{old('anrede')}}" id="anrede" name="anrede" autofocus>
                                            <option value="">Bitte Wählen Sie eine Anrede</option>
                                            <option value="nothing">Keine Angabe</option>
                                            <option value="Frau">Frau</option>
                                            <option value="Herr">Herr</option>
                                            <option value="Test">Test</option>
                                            <option value="Test2">Test2</option>
                                        </select>
                                        @error('anrede')
                                        <div class="alert alert-danger mb-0 mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>



{{-- Testing Start--}}
                                {{-- <div class="form-group row">
                                    <label for="anrede" class="col-md-4 col-form-label text-md-right" style="color: rgb(255, 255, 255)">Anrede</label>
                                    <div class="col-md-6">
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                              Anrede
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                              <option class="dropdown-item" value="#">Action</option>
                                              <option class="dropdown-item" value="#">Another action</option>
                                              <option class="dropdown-item" value="#">Something else here</option>
                                            </div>
                                          </div>
                                    </div>
                                    <div class="col-md-2"></div>
                                </div> --}}

{{-- Testing End --}}

                                <div class="form-group row">
                                    <label for="title" class="col-md-4 col-form-label text-md-right" style="color: rgb(255, 255, 255)">Title</label>
                                    <div class="col-md-6">
                                        {{-- <select class="form-control btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" type="button" id="title" autofocus> --}}
                                        <select class="form-control @error('title') is-invalid @enderror" value="{{old('title')}}" value="{{old('title')}}" id="title" name="title" autofocus>
                                            <option value="">Bitte Wählen Sie ein Title</option>
                                            <option value="nothing">Keine Angabe</option>
                                            <option value="Dr.">Dr.</option>
                                            <option value="Dipl. Ing.">Dipl. Ing.</option>
                                            <option value="Mag.">Mag.</option>
                                        </select>
                                        @error('title')
                                        <div class="alert alert-danger mb-0 mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>

                                <div class="form-group row">
                                    <label for="vorname" class="col-md-4 col-form-label text-md-right" style="color: rgba(255, 255, 255)">Vorname</label>
                                    <div class="col-md-6">
                                        <input type="text" id="vorname" name="vorname"
                                            class="form-control @error('vorname') is-invalid @enderror"
                                            value="{{old('vorname')}}" autofocus>
                                        @error('vorname')
                                        <div class="alert alert-danger mb-0 mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>

                                <div class="form-group row">
                                    <label for="nachname" class="col-md-4 col-form-label text-md-right" style="color: rgba(255, 255, 255)">Nachname</label>
                                    <div class="col-md-6">
                                        <input type="text" id="nachname" name="nachname"
                                            class="form-control @error('nachname') is-invalid @enderror"
                                            value="{{old('nachname')}}" autofocus>
                                        @error('nachname')
                                        <div class="alert alert-danger mb-0 mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>

                                <div class="form-group row">
                                    <label for="suffix" class="col-md-4 col-form-label text-md-right" style="color: rgb(255, 255, 255)">Suffix</label>
                                    <div class="col-md-6">
                                        <select class="form-control @error('suffix') is-invalid @enderror" value="{{old('suffix')}}" id="suffix" name="suffix" autofocus>
                                            <option value="">Bitte Wählen Sie eine Suffix</option>
                                            <option value="nothing">Keine Angabe</option>
                                            <option value="B.Sc.">B.Sc.</option>
                                            <option value="B.A.">B.A.</option>
                                            <option value="M.Sc.">M.Sc.</option>
                                            <option value="M.A.">M.A.</option>
                                        </select>
                                        @error('suffix')
                                        <div class="alert alert-danger mb-0 mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>


                                {{--Section for Address @if($user->subscription_id != null) --}}
                                {{-- <section>
                                    <div class="form-group row">
                                        <label for="street" class="col-md-4 col-form-label text-md-right" style="color: rgba(255, 255, 255)">Straße</label>
                                        <div class="col-md-6">
                                            <input id="street" type="text"
                                                   class="form-control form-control-user @error('street') is-invalid @enderror"
                                                   name="street"
                                                   value="{{old('street')}}" placeholder="" required
                                                   autocomplete="street" autofocus>
                                            @error('street')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-2"></div>
                                    </div>

                                        <div class="form-group row">
                                            <label for="zipCode" class="col-md-4 col-form-label text-md-right" style="color: rgba(255, 255, 255)">PLZ</label>
                                            <div class="col-md-6">
                                                <input id="zipCode" type="text"
                                                       class="form-control form-control-user @error('zipCode') is-invalid @enderror"
                                                       name="zipCode"
                                                       value="{{old('zipCode')}}" placeholder="" required
                                                       autocomplete="zipCode" autofocus>

                                                @error('zipCode')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-2"></div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="city" class="col-md-4 col-form-label text-md-right" style="color: rgba(255, 255, 255)">Ort</label>
                                            <div class="col-md-6">
                                                <input id="city" type="text"
                                                       class="form-control form-control-user @error('city') is-invalid @enderror"
                                                       name="city"
                                                       value="{{old('city')}}" placeholder="" required
                                                       autocomplete="city" autofocus>
                                                @error('city')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-2"></div>
                                        </div>
                                </section> --}}
                                {{-- @endif --}}



                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right" style="color: rgba(255, 255, 255)">E-Mail
                                        Adresse</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email" name="email"
                                               class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" autofocus>
                                        @error('email')
                                        <div class="alert alert-danger mb-0 mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>

                                {{-- Use this link for Datepicker: --}}
                                {{-- https://www.javatpoint.com/change-bootstrap-datepicker-with-specific-date-format --}}







                                <div class="form-group row">
                                    <label for="mydate" class="col-md-4 col-form-label text-md-right" style="color: rgba(255, 255, 255)">Datum</label>
                                    <div class="col-md-3">
                                        <input class="form-control date @error('date') is-invalid @enderror"
                                        {{-- onchange="handler(event);" --}}
                                        value="{{old('date')}}" type="text" id="date" name="date" autofocus>
                                        @error('date')
                                        <div class="alert alert-danger mb-0 mt-1">{{ $message }}</div>
                                        @enderror



                                        {{-- 2nd Type of Date-Picker --}}
                                        {{-- <input type="date" id="mydate"
                                            name="mydate"
                                            placeholder="Datum"
                                            value="{{old('mydate')}}"
                                            {{-- value="{{$projectdata->starting_date ?? ''}}" --}}
                                            {{-- class="form-control border-input date @error('mydate') is-invalid @enderror" autofocus> --}}
                                            {{-- @error('mydate') --}}
                                                {{-- <div class="alert alert-danger mb-0 mt-1">{{ $message }}</div> --}}
                                            {{-- @enderror  --}}
                                    </div>

                                    <label for="age" class="col-md-1 col-form-label text-md-right" style="color: rgba(255, 255, 255)">Alter</label>
                                    <div class="col-md-2">
                                        <input type="text" id="age" name="age"
                                               class="form-control @error('age') is-invalid @enderror" value="{{old('age')}}" autofocus>
                                        @error('age')
                                        <div class="alert alert-danger mb-0 mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-2"></div>
                                </div>


                                {{--Needed <div class="form-group row">
                                    <label for="currentPassword" class="col-md-4 col-form-label text-md-right" style="color: rgba(255, 255, 255)">Aktuelles
                                        Passwort</label>
                                    <div class="col-md-6">
                                        <input type="password" id="currentPassword" name="currentPassword"
                                               class="form-control @error('currentPassword') is-invalid @enderror"> --}}


                                        {{--                                        @error('currentPassword')--}}
                                        {{--                                        <div class="alert alert-danger mb-0 mt-1">{{ $message }}</div>--}}
                                        {{--                                        @enderror--}}


                                    {{--Needed </div>
                                    <div class="col-md-2"></div>
                                </div> --}}

                                {{--Needed <div class="form-group row">
                                    <label for="newPassword" class="col-md-4 col-form-label text-md-right" style="color: rgba(255, 255, 255)">Neues
                                        Passwort</label>
                                    <div class="col-md-6">
                                        <input type="password" id="newPassword" name="newPassword"
                                               class="form-control @error('newPassword') is-invalid @enderror"
                                               data-toggle="tooltip" data-placement="right"
                                               title="Leer lassen, wenn keine Änderung!"> --}}


                                        {{--                                        <small>Leer lassen, wenn keine Änderung</small>--}}
                                        {{--                                        @error('newPassword')--}}
                                        {{--                                        <div class="alert alert-danger mb-0 mt-1">{{ $message }}</div>--}}
                                        {{--                                        @enderror--}}


                                    {{--Needed </div>
                                    <div class="col-md-2"></div>
                                </div> --}}

                                {{-- <div class="form-group row">
                                    <label for="newConfirmPassword" class="col-md-4 col-form-label text-md-right" style="color: rgba(255, 255, 255)">
                                        Passwort bestätigen</label>
                                    <div class="col-md-6">
                                        <input type="password" id="newConfirmPassword" name="newConfirmPassword"
                                               class="form-control @error('newConfirmPassword') is-invalid @enderror"
                                               data-toggle="tooltip" data-placement="right"
                                               title="Leer lassen, wenn keine Änderung!"> --}}
                                        {{--                                        @error('newConfirmPassword')--}}
                                        {{--                                        <div class="alert alert-danger mb-0 mt-1">{{ $message }}</div>--}}
                                        {{--                                        @enderror--}}
                                    {{-- </div>
                                    <div class="col-md-2"></div>
                                </div> --}}

                                {{--Needed <div class="form-group row">
                                    <label for="avatar" class="col-md-4 col-form-label text-md-right" style="color: rgba(255, 255, 255)">
                                        Profilbild
                                    </label>
                                    <div class="col-md-6"> --}}

                                        {{--                                        <input type="password" id="avatar" name="newConfirmPassword"--}}
                                        {{--                                               class="form-control @error('newConfirmPassword') is-invalid @enderror">--}}
                                        {{--                                        --}}


                                        {{--Needed <input type="file" name="avatar" id="avatar"
                                               class="form-control @error('avatar') is-invalid @enderror"> --}}


                                        {{--                                        @error('avatar')--}}
                                        {{--                                        <div class="alert alert-danger mb-0 mt-1">{{ $message }}</div>--}}
                                        {{--                                        @enderror--}}

                                    {{--Needed </div>
                                    <div class="col-md-2"></div>
                                </div> --}}

                                <div class="form-group row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-6 mb-2">
                                        <button type="submit" class="btn btn-primary btn-shadown btn-user btn-block">
                                            {{ __('Speichern') }}
                                        </button>
                                    </div>
                                    <div class="col-md-2"></div>
                                    {{-- <div class="col-md-4 mb-2">
                                        <a class="btn btn-secondary btn-user btn-block"
                                           href="{{route('user.destroy',['id' => $user->id])}}"
                                           onclick="@if(stripos($user->avatar, 'default') === false) return confirm('Möchten Sie wirklich Ihr Profilbild löschen?') @endif">
                                            Bild löschen</a>
                                    </div> --}}
                                    {{-- <div class="col-md-4 mb-2">
                                        <a href="/" class="btn btn-secondary btn-user btn-block">
                                            Zurück
                                        </a>
                                    </div> --}}
                                </div>
                            </form>
                        </div>
                    {{-- </div> <!-- col-lg-8--> --}}
                {{-- </div> --}}
            </div>
        </div>
    </div> <!-- container -->

















    <!-- Starting Your Current Profile -->
    {{-- <div class="container mt-5">
        <div class="card o-hidden border-0 jumbotron jumbotron-fluid shadow-lg p-1" data-aos="fade-up">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900">{{ __('Meine Mitgliedschaft') }}</h1>
                        </div>
                    </div>
                </div>
                <hr style="border-top:2px solid #125977">
                <div class="row mt-3">
                    <div class="col-12">
                        <h6 class="display-6">Name</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="lead">{{ $user->name }}</p>
                    </div>
                </div>

                @if($user->subscription_id != null)
                    <div class="row">
                        <div class="col-6">
                            <h6 class="display-6">Meine Anschrift</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p class="lead">{{ $user->street }} , {{ $user->zip_code }} , {{ $user->city }}</p>
                        </div>
                    </div>
                @endif
                <div class="row">
                    <div class="col-6">
                        <h6 class="display-6">E-Mail-Adresse</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="lead">{{ $user->email }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h6 class="display-6">Meine Mitgliedschaft</h6>
                    </div>
                </div>
                @if($user->subscription_id != null)
                <div class="row">
                    <div class="col-6">
                        <p class="lead">Premium</p>
                    </div>
                </div>
                @elseif($user->role_id == 4)
                    <div class="row">
                        <div class="col-6">
                            <p class="lead">Sponsored</p>
                        </div>
                    </div>
                @elseif($user->role_id == 1)
                    <div class="row">
                        <div class="col-6">
                            <p class="lead">Admin</p>
                        </div>
                    </div>
                @else
                <div class="row">
                    <div class="col-6">
                        <p class="lead">Free</p>
                    </div>
                </div>
                @endif
                <div class="row mt-3">
                    <div class="col-12 ml-2">
                        @if($user->role_id != 4 && $user->role_id != 1)
                            @if($user->subscription_id != null)
                                <p class="legal">{{ setting('site.premium_cancel_legal_text') }}</p>
                                <a href="{{route('subscription.destroy', $user->subscription_id)}}" class="btn btn-secondary w-100 ml-1"
                                   onclick="@if($user->subscription_id != null) return confirm('Wollen Sie wirklich Ihre Mitgliedschaft kündigen?') @endif">
                                    Premium-Mitgliedschaft kündigen
                                </a>
                            @else
                                <a href="/bt-checkout" class="btn btn-secondary w-100 ml-1">
                                    Upgrade zu Premium-Mitgliedschaft
                                </a>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- End Your Current Profile -->

@endsection
{{--additional Javascript Files or Links--}}
@section('additionalScripts')

<script type="text/javascript">
    function formatDate(date) {//to convert a date to this format 'YYYY-MM-DD'
        var d = new Date(date),
            month = '' + (d.getMonth() + 1),
            day = '' + d.getDate(),
            year = d.getFullYear();
        if (month.length < 2) {
            month = '0' + month;
        }
        if (day.length < 2) {
            day = '0' + day;
        }
        return [year, month, day].join('-');
    }


    $('.date').datepicker({
       format: 'dd-mm-yyyy'
     });

</script>


@endsection
