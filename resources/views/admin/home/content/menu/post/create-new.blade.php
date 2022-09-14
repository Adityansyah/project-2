@extends('admin.home.apps.dashboard')
@section('title', 'Create New Post')
@section('content')
    <div class="col-12 mt-5">
        <div class="card">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <label for="">Title</label>
                    <input type="text" class="form-control" name="title" id="title">
                </li>
                <li class="list-group-item">
                    <div class="mb-2">
                        <h4 class="header-title mt-2">Content</h4>
                        <p class="text-muted font-14">Snow is a clean, flat toolbar theme.</p>

                        <div class="tab-content">
                            <div class="tab-pane show active" id="hint-emoji-preview">
                                <div id="snow-editor" style="height: 300px;" class="ql-container ql-snow">
                                    <div class="ql-editor" data-gramm="false" contenteditable="true">
                                        <h3><br></h3>
                                    </div>
                                    <div class="ql-clipboard" contenteditable="true" tabindex="-1"></div>
                                    <div class="ql-tooltip ql-hidden"><a class="ql-preview" rel="noopener noreferrer"
                                            target="_blank" href="about:blank"></a><input type="text"
                                            data-formula="e=mc^2" data-link="https://quilljs.com" data-video="Embed URL"><a
                                            class="ql-action"></a><a class="ql-remove"></a>
                                    </div>
                                </div><!-- end Snow-editor-->
                            </div> <!-- end preview-->


                        </div> <!-- end tab-content-->

                    </div>
                </li>
                <li class="list-group-item">
                    <button class="btn btn-primary">save</button>
                </li>

            </ul> <!-- end list-->
        </div> <!-- end card-->
    </div>
@endsection
