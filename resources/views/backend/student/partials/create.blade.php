@extends('backend.layouts.app')
@section('content')
<x-backend.ui.breadcrumbs :list="['Dashboard', 'Students', 'Student Add']" ></x-backend.ui.breadcrumbs>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Student Add</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="live-preview">
                    <div class="row gy-4">
                        <div class="col-xxl-3 col-md-6">
                           <x-backend.forms.input name="name" type="text" label="Student name" ></x-backend.forms.input>
                        </div>
                        <!--end col-->
                        <div class="col-xxl-3 col-md-6">
                            <div>
                                <label for="labelInput" class="form-label">Input with Label</label>
                                <input type="password" class="form-control" id="labelInput">
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-xxl-3 col-md-6">
                            <div>
                                <label for="placeholderInput" class="form-label">Input with Placeholder</label>
                                <input type="password" class="form-control" id="placeholderInput" placeholder="Placeholder">
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-xxl-3 col-md-6">
                            <div>
                                <label for="valueInput" class="form-label">Input with Value</label>
                                <input type="text" class="form-control" id="valueInput" value="Input value">
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-xxl-3 col-md-6">
                            <div>
                                <label for="readonlyPlaintext" class="form-label">Readonly Plain Text Input</label>
                                <input type="text" class="form-control-plaintext" id="readonlyPlaintext" value="Readonly input" readonly>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-xxl-3 col-md-6">
                            <div>
                                <label for="readonlyInput" class="form-label">Readonly Input</label>
                                <input type="text" class="form-control" id="readonlyInput" value="Readonly input" readonly>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-xxl-3 col-md-6">
                            <div>
                                <label for="disabledInput" class="form-label">Disabled Input</label>
                                <input type="text" class="form-control" id="disabledInput" value="Disabled input" disabled>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-xxl-3 col-md-6">
                            <div>
                                <label for="iconInput" class="form-label">Input with Icon</label>
                                <div class="form-icon">
                                    <input type="email" class="form-control form-control-icon" id="iconInput" placeholder="example@gmail.com">
                                    <i class="ri-mail-unread-line"></i>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-xxl-3 col-md-6">
                            <div>
                                <label for="iconrightInput" class="form-label">Input with Icon Right</label>
                                <div class="form-icon right">
                                    <input type="email" class="form-control form-control-icon" id="iconrightInput" placeholder="example@gmail.com">
                                    <i class="ri-mail-unread-line"></i>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-xxl-3 col-md-6">
                            <div>
                                <label for="exampleInputdate" class="form-label">Input Date</label>
                                <input type="date" class="form-control" id="exampleInputdate">
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-xxl-3 col-md-6">
                            <div>
                                <label for="exampleInputtime" class="form-label">Input Time</label>
                                <input type="time" class="form-control" id="exampleInputtime">
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-xxl-3 col-md-6">
                            <div>
                                <label for="exampleInputpassword" class="form-label">Input Password</label>
                                <input type="password" class="form-control" id="exampleInputpassword" value="44512465">
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-xxl-3 col-md-6">
                            <div>
                                <label for="exampleFormControlTextarea5" class="form-label">Example Textarea</label>
                                <textarea class="form-control" id="exampleFormControlTextarea5" rows="3"></textarea>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-xxl-3 col-md-6">
                            <div>
                                <label for="formtextInput" class="form-label">Form Text</label>
                                <input type="password" class="form-control" id="formtextInput">
                                <div id="passwordHelpBlock" class="form-text">
                                    Must be 8-20 characters long.
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-xxl-3 col-md-6">
                            <div>
                                <label for="colorPicker" class="form-label">Color Picker</label>
                                <input type="color" class="form-control form-control-color w-100" id="colorPicker" value="#364574">
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-xxl-3 col-md-6">
                            <div>
                                <label for="borderInput" class="form-label">Input Border Style</label>
                                <input type="text" class="form-control border-dashed" id="borderInput" placeholder="Enter your name">
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-xxl-3 col-md-6">
                            <label for="exampleDataList" class="form-label">Datalist example</label>
                            <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Search your country...">
                            <datalist id="datalistOptions">
                                <option value="Switzerland">
                                <option value="New York">
                                <option value="France">
                                <option value="Spain">
                                <option value="Chicago">
                                <option value="Bulgaria">
                                <option value="Hong Kong">
                            </datalist>
                        </div>
                        <!--end col-->
                        <div class="col-xxl-3 col-md-6">
                            <div>
                                <label for="exampleInputrounded" class="form-label">Rounded Input</label>
                                <input type="text" class="form-control rounded-pill" id="exampleInputrounded" placeholder="Enter your name">
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-xxl-3 col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="firstnamefloatingInput" placeholder="Enter your firstname">
                                <label for="firstnamefloatingInput">Floating Input</label>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <div class="d-none code-view">
                    <pre class="language-markup" style="height: 450px;"><code>&lt;!-- Basic Input --&gt;
&lt;div&gt;
&lt;label for=&quot;basiInput&quot; class=&quot;form-label&quot;&gt;Basic Input&lt;/label&gt;
&lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;basiInput&quot;&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Input with Label --&gt;
&lt;div&gt;
&lt;label for=&quot;labelInput&quot; class=&quot;form-label&quot;&gt;Input with Label&lt;/label&gt;
&lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;labelInput&quot;&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Input with Placeholder --&gt;
&lt;div&gt;
&lt;label for=&quot;placeholderInput&quot; class=&quot;form-label&quot;&gt;Input with Placeholder&lt;/label&gt;
&lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;placeholderInput&quot; placeholder=&quot;Placeholder&quot;&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Input with Value --&gt;
&lt;div&gt;
&lt;label for=&quot;valueInput&quot; class=&quot;form-label&quot;&gt;Input with Value&lt;/label&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;valueInput&quot; value=&quot;Input value&quot;&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Readonly Plain Text Input --&gt;
&lt;div&gt;
&lt;label for=&quot;readonlyPlaintext&quot; class=&quot;form-label&quot;&gt;Readonly Plain Text Input&lt;/label&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control-plaintext&quot; id=&quot;readonlyPlaintext&quot; value=&quot;Readonly input&quot; readonly&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Readonly Input --&gt;
&lt;div&gt;
&lt;label for=&quot;readonlyInput&quot; class=&quot;form-label&quot;&gt;Readonly Input&lt;/label&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;readonlyInput&quot; value=&quot;Readonly input&quot; readonly&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Disabled Input --&gt;
&lt;div&gt;
&lt;label for=&quot;disabledInput&quot; class=&quot;form-label&quot;&gt;Disabled Input&lt;/label&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;disabledInput&quot; value=&quot;Disabled input&quot; disabled&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Input with Icon --&gt;
&lt;div&gt;
&lt;label for=&quot;iconInput&quot; class=&quot;form-label&quot;&gt;Input with Icon&lt;/label&gt;
&lt;div class=&quot;form-icon&quot;&gt;
&lt;input type=&quot;email&quot; class=&quot;form-control form-control-icon&quot; id=&quot;iconInput&quot; placeholder=&quot;example@gmail.com&quot;&gt;
&lt;i class=&quot;ri-mail-unread-line&quot;&gt;&lt;/i&gt;
&lt;/div&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Input with Icon Right --&gt;
&lt;div&gt;
&lt;label for=&quot;iconrightInput&quot; class=&quot;form-label&quot;&gt;Input with Icon Right&lt;/label&gt;
&lt;div class=&quot;form-icon right&quot;&gt;
&lt;input type=&quot;email&quot; class=&quot;form-control form-control-icon&quot; id=&quot;iconrightInput&quot; placeholder=&quot;example@gmail.com&quot;&gt;
&lt;i class=&quot;ri-mail-unread-line&quot;&gt;&lt;/i&gt;
&lt;/div&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Input Date --&gt;
&lt;div&gt;
&lt;label for=&quot;exampleInputdate&quot; class=&quot;form-label&quot;&gt;Input Date&lt;/label&gt;
&lt;input type=&quot;date&quot; class=&quot;form-control&quot; id=&quot;exampleInputdate&quot;&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Input Time --&gt;
&lt;div&gt;
&lt;label for=&quot;exampleInputtime&quot; class=&quot;form-label&quot;&gt;Input Time&lt;/label&gt;
&lt;input type=&quot;time&quot; class=&quot;form-control&quot; id=&quot;exampleInputtime&quot; value=&quot;08:56 AM&quot;&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Input Password --&gt;
&lt;div&gt;
&lt;label for=&quot;exampleInputpassword&quot; class=&quot;form-label&quot;&gt;Input Password&lt;/label&gt;
&lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;exampleInputpassword&quot; value=&quot;44512465&quot;&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Example Textarea --&gt;
&lt;div&gt;
&lt;label for=&quot;exampleFormControlTextarea5&quot; class=&quot;form-label&quot;&gt;Example Textarea&lt;/label&gt;
&lt;textarea class=&quot;form-control&quot; id=&quot;exampleFormControlTextarea5&quot; rows=&quot;3&quot;&gt;&lt;/textarea&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Form Text --&gt;
&lt;div&gt;
&lt;label for=&quot;formtextInput&quot; class=&quot;form-label&quot;&gt;Form Text&lt;/label&gt;
&lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;formtextInput&quot;&gt;
&lt;div id=&quot;passwordHelpBlock&quot; class=&quot;form-text&quot;&gt;
Must be 8-20 characters long.
&lt;/div&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Color Picker --&gt;
&lt;div&gt;
&lt;label for=&quot;colorPicker&quot; class=&quot;form-label&quot;&gt;Color Picker&lt;/label&gt;
&lt;input type=&quot;color&quot; class=&quot;form-control form-control-color w-100&quot; id=&quot;colorPicker&quot; value=&quot;#364574&quot;&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Input Border Style --&gt;
&lt;div&gt;
&lt;label for=&quot;borderInput&quot; class=&quot;form-label&quot;&gt;Input Border Style&lt;/label&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control border-dashed&quot; id=&quot;borderInput&quot; placeholder=&quot;Enter your name&quot;&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Datalist example --&gt;
&lt;label for=&quot;exampleDataList&quot; class=&quot;form-label&quot;&gt;Datalist example&lt;/label&gt;
&lt;input class=&quot;form-control&quot; list=&quot;datalistOptions&quot; id=&quot;exampleDataList&quot; placeholder=&quot;Search your country...&quot;&gt;
&lt;datalist id=&quot;datalistOptions&quot;&gt;
&lt;option value=&quot;Switzerland&quot;&gt;
&lt;option value=&quot;New York&quot;&gt;
&lt;option value=&quot;France&quot;&gt;
&lt;option value=&quot;Spain&quot;&gt;
&lt;option value=&quot;Chicago&quot;&gt;
&lt;option value=&quot;Bulgaria&quot;&gt;
&lt;option value=&quot;Hong Kong&quot;&gt;
&lt;/datalist&gt;</code>

<code>&lt;!-- Rounded Input --&gt;
&lt;div&gt;
&lt;label for=&quot;exampleInputrounded&quot; class=&quot;form-label&quot;&gt;Rounded Input&lt;/label&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control rounded-pill&quot; id=&quot;exampleInputrounded&quot; placeholder=&quot;Enter your name&quot;&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Floating Input --&gt;
&lt;div class=&quot;form-floating&quot;&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;firstnamefloatingInput&quot; placeholder=&quot;Enter your firstname&quot;&gt;
&lt;label for=&quot;firstnamefloatingInput&quot;&gt;Floating Input&lt;/label&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>
        </div>
    </div>
    <!--end col-->
</div>
@endsection