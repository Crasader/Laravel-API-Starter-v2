<!-- Category Modal -->
<div class="modal fade" id="modal-new-collection">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{route('admin.collection.store')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="collection-modal-title">{{trans('label.new_collection')}}</h4>
                </div>
                <div class="modal-body">

                    <!-- Category: Form Input -->
                    <input type="hidden" name="category_id" value="{{$category->id}}">
                {{--<div class="form-group">
                    <label for="parent">{{trans('label.category')}}:</label>
                    <select name="category_id" id="category-id" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>--}}

                <!-- Title: Form Input -->
                    <div class="form-group">
                        <label for="name">{{__('label.title')}}:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                            <img src="{{asset('images/en.png')}}" alt="english">
                        </span>
                            <input type="text" name="title" id="title" placeholder="Title in english"
                                   class="form-control" value="{{ old('title') }}">
                        </div>
                        <!-- Translation -->
                        <div class="input-group">
                            <span class="input-group-addon">
                            <img src="{{asset('images/fr.png')}}" alt="french">
                        </span>
                            <input type="text" name="fr_title" id="fr_title" placeholder="Title in french"
                                   class="form-control" value="{{ old('title') }}">
                        </div>
                    </div>

                    <!-- Description: Form Input -->
                    <div class="form-group">
                        <label for="description">{{__('label.description')}}:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                            <img src="{{asset('images/en.png')}}" alt="french">
                        </span>
                            <input type="text" name="description" id="description" placeholder="Description in english"
                                   class="form-control" value="{{ old('description') }}">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                            <img src="{{asset('images/fr.png')}}" alt="french">
                        </span>
                            <input type="text" name="fr_description" id="fr_description" placeholder="Description in french"
                                   class="form-control" value="{{ old('description') }}">
                        </div>
                    </div>

                    <!-- Points Value: Form Input -->
                    <div class="form-group">
                        <label for="points">Points Value:</label>
                        <input type="number" name="points" id="points" placeholder="Points required to unlock the collection" class="form-control" value="{{ old('points') }}">
                    </div>

                    <!-- Time Period: Form Input -->
                    <div class="form-group">
                        <label for="time-period">{{trans('label.time_period')}}:</label>
                        <input type="text" name="time_period" id="time-period" placeholder="Time period of the collection"
                               class="form-control" value="{{ old('time-period') }}">
                    </div>

                    <!-- Image URL: Form Input -->
                    <div class="form-group">
                        <label for="media_id">{{trans('label.cover_image')}}</label>
                        <div class="input-group">
                            <input type="file" name="file" class="form-control" aria-describedby="basic-addon2">
                            <span class="input-group-addon" id="basic-addon2">Browse</span>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left"
                            data-dismiss="modal">{{trans('button.close')}}</button>
                    <button type="submit" class="btn btn-primary">{{trans('button.save_changes')}}</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- Edit Collection Modal -->
<div class="modal fade" id="modal-edit-collection">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{route('admin.collection.update')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="collection-modal-title">{{trans('label.update_collection')}}</h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" id="edit-id">

                    <!-- Category: Form Input -->
                    <input type="hidden" name="category_id" value="{{$category->id}}">
                {{--<div class="form-group">
                    <label for="parent">{{trans('label.category')}}:</label>
                    <select name="category_id" id="edit-category-id" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>--}}

                <!-- Title: Form Input -->
                    <div class="form-group">
                        <label for="edit-title">{{trans('label.title')}}:</label>
                        <input type="text" name="title" id="edit-title"
                               class="form-control" value="{{ old('title') }}">
                    </div>

                    <!-- Description: Form Input -->
                    <div class="form-group">
                        <label for="edit-description">{{trans('label.description')}}:</label>
                        <input type="text" name="description" id="edit-description"
                               class="form-control" value="{{ old('description') }}">
                    </div>

                    <!-- Time Period: Form Input -->
                    <div class="form-group">
                        <label for="edit-time-period">{{trans('label.time_period')}}:</label>
                        <input type="text" name="time_period" id="edit-time-period"
                               class="form-control" value="{{ old('time-period') }}">
                    </div>

                    <!-- Image URL: Form Input -->
                    <div class="form-group">
                        <label for="media_id">{{trans('label.cover_image')}}</label>
                        <div class="input-group">
                            <input type="file" name="file" class="form-control" aria-describedby="basic-addon2">
                            <span class="input-group-addon" id="basic-addon2">Browse</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <img src="" id="cover-image" alt="">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left"
                            data-dismiss="modal">{{trans('button.close')}}</button>
                    <button type="submit" class="btn btn-primary">{{trans('button.save_changes')}}</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
