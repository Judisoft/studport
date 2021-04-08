<div class="card card-body">
 {!! Form::model($blog, ['action' => 'UserBlogController@edit', 'method' => 'put', 'class' => 'bf', 'files'=> true]) !!}
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                <div class="row">
                                                    <div class="col-sm-8">
                                                        <div class="form-group {{ $errors->first('title', 'has-error') }} ">
                                                            {!! Form::text('title', null, ['class' => 'form-control input-lg','placeholder'=>
                                                            'Enter Course/Subject/Topic', 'style'=>'font-size: 14px;']) !!}
                                                            <small class="text-danger">{{ $errors->first('title', ':message') }}</small>
                                                        </div>
                                                        <div class="form-group {{ $errors->first('blog_category_id', 'has-error') }}">
                                                            {!! Form::select('blog_category_id',$blogcategory ,null, ['class' => 'form-control
                                                            select2', 'id'=>'blog_category' ,'placeholder'=>'Select Category', 'style'=>'font-size: 14px;']) !!}
                                                            <small class="text-danger">{{ $errors->first('blog_category_id', 'Question category required') }}</small>
                                                        </div>
                                                        <div class='box-body pad form-group {{ $errors->first('content', 'has-error') }}'>
                                                            {!! Form::textarea('content', NULL,
                                                            ['placeholder'=>'Enter the content of your question here','rows'=>'5','class'=>'textarea
                                                            form-control','style'=>'style="width: 100%; height: 200px !important; font-size: 14px !important;
                                                            line-height: 1.5; border: 1px solid #dddddd; padding: 10px;"']) !!}
                                                            <small class="text-danger">{{ $errors->first('content', ':message') }}</small>
                                                        </div>
                                                    </div>
                                                    <!-- /.col-sm-4 -->
                                                    <div class="col-sm-4">
                                                        <div class="form-group" style="font-size: 14px;">
                                                            {!! Form::text('tags', null, ['class' => 'form-control input-lg input-group input-group-append',
                                                            'data-role'=>"tagsinput", 'placeholder'=>'Tags/Keywords', 'style'=>'font-size: 14px;']) !!}
                                                            <br>
                                                            <p  class="alert-info p-2 mt-3"><small>To enter multiple tags/keywords,
                                                            press the return/enter button and type the next and so on.</small></p>
                                                        </div>
                                                        <label></label>
                                                        <div class="form-group {{ $errors->first('image', 'has-error') }}">
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <div class="fileinput-new thumbnail" style="max-width: 200px; max-height: 200px;">
                                                            </div>
                                                            <div class="fileinput-preview fileinput-exists thumbnail"
                                                                style="max-width: 200px; max-height: 150px;"></div>
                                                            <div>
                                                                <span class="btn  btn-secondary btn-file">
                                                                    <span class="fileinput-new">Select image</span>
                                                                    <span class="fileinput-exists">Change</span>
                                                                    <input type="file" name="image" id="pic" accept="image/*" />
                                                                </span>
                                                                <span class="btn btn-danger fileinput-exists"
                                                                    data-dismiss="fileinput">Remove</span>
                                                            </div>
                                                            <span class="help-block">{{ $errors->first('image', ':message') }}</span>

                                                        </div>
                                                    </div>
                                                    </div>
                                                    <!-- /.col-sm-4 -->
                                                </div>
                                                <div class="form-group">
                                                        <button type="submit" class="btn btn-secondary theme-button"><span class="fa fa-check-circle"></span>&nbsp;@lang('Post')</button>
                                                        <button type="reset" class="btn btn-secondary theme-button"><span class="fa fa-times"></span>&nbsp;@lang('blog/form.cancel')</span></button>
                                                </div>
                                                {!! Form::close() !!}
                                            </div>
                                            </div>
                                            <div class="card-body alert alert-info mt-3">
                                            <h6 class="mt-0"><span class="fa fa-info-circle fa-2x px-2"></span>Tips on how to Post a good question</h6>
                                            <hr>
                                            <ul class="list-group list-group-flush mt-3">
                                                <li class="list-group-item-info">Be concise</li>
                                                <li class="list-group-item-info">Add a reference if it exists</li>
                                                <li class="list-group-item-info"></li>
                                            </ul>
                                            </div>
                                        </div>
