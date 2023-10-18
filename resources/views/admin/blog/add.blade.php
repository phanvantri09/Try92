@extends('layout.index')
@section('css')
@endsection
@section('content')
    <div class="whole-wrap">
        <div class="container box_1170">
            <div class="section-top-border">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <h3 class="mb-30">{{ $title ?? null }}</h3>
                        <form action="{{ route('blog.addPost') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            {{-- $table->string('name')->unique();
            $table->string('img')->nullable();
            $table->text('content_pre')->nullable();
            $table->longText('content')->nullable(); --}}
                            <div class="mt-10">
                                <input type="file" name="img" value="{{ old('img') }}" placeholder="image"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'image'" required
                                    class="single-input">
                            </div>
                            <div class="mt-10">
                                <input type="text" name="name" value="{{ old('name') }}" placeholder="First Name"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" required
                                    class="single-input">
                            </div>
                            <textarea name="editor1"></textarea>
                            <div class="mt-10">
                                <input type="email" name="EMAIL" placeholder="Email address"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required
                                    class="single-input">
                            </div>
                            <div class="input-group-icon mt-10">
                                <div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
                                <input type="text" name="address" placeholder="Address" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Address'" required class="single-input">
                            </div>
                            <div class="input-group-icon mt-10">
                                <div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
                                <div class="form-select" id="default-select">
                                    <select>
                                        <option value=" 1">City</option>
                                        <option value="1">Dhaka</option>
                                        <option value="1">Dilli</option>
                                        <option value="1">Newyork</option>
                                        <option value="1">Islamabad</option>
                                    </select>
                                </div>
                            </div>
                            <div class="input-group-icon mt-10">
                                <div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                                <div class="form-select" id="default-select"">
                                    <select>
                                        <option value=" 1">Country</option>
                                        <option value="1">Bangladesh</option>
                                        <option value="1">India</option>
                                        <option value="1">England</option>
                                        <option value="1">Srilanka</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mt-10">
                                <textarea class="single-textarea" placeholder="Message" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Message'" required></textarea>
                            </div>
                            <!-- For Gradient Border Use -->
                            <!-- <div class="mt-10">
                                                      <div class="primary-input">
                                                       <input id="primary-input" type="text" name="first_name" placeholder="Primary color" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Primary color'">
                                                       <label for="primary-input"></label>
                                                      </div>
                                                     </div> -->
                            <div class="mt-10">
                                <input type="text" name="first_name" placeholder="Primary color"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Primary color'" required
                                    class="single-input-primary">
                            </div>
                            <div class="mt-10">
                                <input type="text" name="first_name" placeholder="Accent color"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Accent color'" required
                                    class="single-input-accent">
                            </div>
                            <div class="mt-10">
                                <input type="text" name="first_name" placeholder="Secondary color"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Secondary color'" required
                                    class="single-input-secondary">
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-sm-30">
                        <div class="single-element-widget">
                            <h3 class="mb-30">Switches</h3>
                            <div class="switch-wrap d-flex justify-content-between">
                                <p>01. Sample Switch</p>
                                <div class="primary-switch">
                                    <input type="checkbox" id="default-switch">
                                    <label for="default-switch"></label>
                                </div>
                            </div>
                            <div class="switch-wrap d-flex justify-content-between">
                                <p>02. Primary Color Switch</p>
                                <div class="primary-switch">
                                    <input type="checkbox" id="primary-switch" checked>
                                    <label for="primary-switch"></label>
                                </div>
                            </div>
                            <div class="switch-wrap d-flex justify-content-between">
                                <p>03. Confirm Color Switch</p>
                                <div class="confirm-switch">
                                    <input type="checkbox" id="confirm-switch" checked>
                                    <label for="confirm-switch"></label>
                                </div>
                            </div>
                        </div>
                        <div class="single-element-widget mt-30">
                            <h3 class="mb-30">Selectboxes</h3>
                            <div class="default-select" id="default-select"">
                                <select>
                                    <option value=" 1">English</option>
                                    <option value="1">Spanish</option>
                                    <option value="1">Arabic</option>
                                    <option value="1">Portuguise</option>
                                    <option value="1">Bengali</option>
                                </select>
                            </div>
                        </div>
                        <div class="single-element-widget mt-30">
                            <h3 class="mb-30">Checkboxes</h3>
                            <div class="switch-wrap d-flex justify-content-between">
                                <p>01. Sample Checkbox</p>
                                <div class="primary-checkbox">
                                    <input type="checkbox" id="default-checkbox">
                                    <label for="default-checkbox"></label>
                                </div>
                            </div>
                            <div class="switch-wrap d-flex justify-content-between">
                                <p>02. Primary Color Checkbox</p>
                                <div class="primary-checkbox">
                                    <input type="checkbox" id="primary-checkbox" checked>
                                    <label for="primary-checkbox"></label>
                                </div>
                            </div>
                            <div class="switch-wrap d-flex justify-content-between">
                                <p>03. Confirm Color Checkbox</p>
                                <div class="confirm-checkbox">
                                    <input type="checkbox" id="confirm-checkbox">
                                    <label for="confirm-checkbox"></label>
                                </div>
                            </div>
                            <div class="switch-wrap d-flex justify-content-between">
                                <p>04. Disabled Checkbox</p>
                                <div class="disabled-checkbox">
                                    <input type="checkbox" id="disabled-checkbox" disabled>
                                    <label for="disabled-checkbox"></label>
                                </div>
                            </div>
                            <div class="switch-wrap d-flex justify-content-between">
                                <p>05. Disabled Checkbox active</p>
                                <div class="disabled-checkbox">
                                    <input type="checkbox" id="disabled-checkbox-active" checked disabled>
                                    <label for="disabled-checkbox-active"></label>
                                </div>
                            </div>
                        </div>
                        <div class="single-element-widget mt-30">
                            <h3 class="mb-30">Radios</h3>
                            <div class="switch-wrap d-flex justify-content-between">
                                <p>01. Sample radio</p>
                                <div class="primary-radio">
                                    <input type="checkbox" id="default-radio">
                                    <label for="default-radio"></label>
                                </div>
                            </div>
                            <div class="switch-wrap d-flex justify-content-between">
                                <p>02. Primary Color radio</p>
                                <div class="primary-radio">
                                    <input type="checkbox" id="primary-radio" checked>
                                    <label for="primary-radio"></label>
                                </div>
                            </div>
                            <div class="switch-wrap d-flex justify-content-between">
                                <p>03. Confirm Color radio</p>
                                <div class="confirm-radio">
                                    <input type="checkbox" id="confirm-radio" checked>
                                    <label for="confirm-radio"></label>
                                </div>
                            </div>
                            <div class="switch-wrap d-flex justify-content-between">
                                <p>04. Disabled radio</p>
                                <div class="disabled-radio">
                                    <input type="checkbox" id="disabled-radio" disabled>
                                    <label for="disabled-radio"></label>
                                </div>
                            </div>
                            <div class="switch-wrap d-flex justify-content-between">
                                <p>05. Disabled radio active</p>
                                <div class="disabled-radio">
                                    <input type="checkbox" id="disabled-radio-active" checked disabled>
                                    <label for="disabled-radio-active"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
@endsection
