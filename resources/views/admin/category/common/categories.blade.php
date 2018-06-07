<table class="table table-responsive table-striped">
    <tbody>
    <tr style="background: #cccccc;color: #000;font-weight: bold;">
        <td style="width: 10px;">Order</td>
        <td style="width: 10px;">Name</td>
        <td style="width: 10px;">Slug</td>
        <td style="width: 20px;">Description</td>
        <td style="width: 5px;">isPublic</td>
        <td style="width: 20px;">Action</td>
    </tr>
    @foreach($categories as $category)
        <tr>
            <td>{{$category['seq']}}</td>
            <td>{{$category['name']}}</td>
            <td>{{$category['slug']}}</td>
            <td>{{$category['description']}}</td>
            <td>{{($category['is_public'] == 1) ? 'YES' : 'NO'}}</td>
            <td>
                <a class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                <a href="{{route('admin.category.move.up', $category['id'])}}" class="btn btn-primary"><i
                        class="fa fa-arrow-up" title="MOVE UP"></i>
                </a>
                <a href="{{route('admin.category.move.down', $category['id'])}}" class="btn btn-primary"><i
                        class="fa fa-arrow-down" title="MOVE DOWN"></i>
                </a>
                <a href="#" class="btn btn-danger delete" data-id="{{$category['id']}}">
                    <i class="fa fa-remove"></i></a>
            </td>
        </tr>
        @if(!empty($category['child']))
            <tr>
                <td colspan="6">
                    <table class="table">
                        <tr style="background: #cccccc;color: #000;font-weight: bold;">
                            <td style="width: 10px;">Order</td>
                            <td style="width: 10px;">Name</td>
                            <td style="width: 10px;">Slug</td>
                            <td style="width: 20px;">Description</td>
                            <td style="width: 5px;">isPublic</td>
                            <td style="width: 20px;">Action</td>
                        </tr>
                        @foreach($category['child'] as $category)
                            <tr>
                                <td>{{$category['seq']}}</td>
                                <td>{{$category['name']}}</td>
                                <td>{{$category['slug']}}</td>
                                <td>{{$category['description']}}</td>
                                <td>{{($category['is_public'] == 1) ? 'YES' : 'NO'}}</td>
                                <td>
                                    <a class="btn btn-primary"><i class="fa fa-pencil"></i>
                                    </a>
                                    <a href="{{route('admin.category.move.up', $category['id'])}}"
                                       class="btn btn-primary"><i
                                            class="fa fa-arrow-up" title="MOVE UP"></i>
                                    </a>
                                    <a href="{{route('admin.category.move.down', $category['id'])}}"
                                       class="btn btn-primary"><i
                                            class="fa fa-arrow-down" title="MOVE DOWN"></i>
                                    </a>
                                    <a href="#" data-id="{{$category['id']}}"
                                       class="btn btn-danger delete"><i class="fa fa-remove"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </td>
        @endif
    @endforeach
    </tbody>
</table>
@include('admin.common.delete')
@section('adminlte_js')
    <script>
        $(function () {
            // Open modal for deleting a record
            $('.wrapper').on('click', '.delete', function (e) {
                e.preventDefault();
                var id = $(this).data('id');
                $('#deleteId').val(id);
                $('#deleteForm').attr('action', "{{route('admin.category.destroy')}}");
                $('#deleteModal').modal('show');
            });

        });
    </script>

@endsection