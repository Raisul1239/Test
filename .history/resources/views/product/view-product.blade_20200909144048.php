<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">View Categories</a> </div>
        <h1>Categories</h1>
    </div>
    @if(Session::has('flash_message_error'))
    <div class="alert alert-error alert-block">
        <button type-"button" class="close" data-dismiss="alert">x</button>
        <strong>{!!session('flash_message_error')!!}</strong>
    </div>
    @endif

    @if(Session::has('flash_message_success'))
    <div class="alert alert-error alert-block">
        <button type-"button" class="close" data-dismiss="alert">x</button>
        <strong>{!!session('flash_message_success')!!}</strong>
    </div>
    @endif
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span12">

                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                        <h5>View Categories</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-bordered data-table">
                            <thead>
                                <tr>
                                    <th>Product ID</th>
                                    <th>Product qty</th>
                                    <th>Product price</th>
                                    <th>Product Orderdate</th>
                                    <th>Product ID</th>

                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                <tr class="gradeX">
                                    <td>{{$category->id}}</td>
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->url}}</td>


                                    <script>
                                        $(document).ready(function() {
                                                    $("#delCat").click(function() {
                                                            if (confirm('Are you sure you want to delete this category?')) {
                                                                return true;
                                                            }
                                                            return false;
                                                        }
                                                    });
                                    </script>
                                    <td class="center"><a href="{{url('edit-category/'.$category->id)}}" class="btn btn-primary btn-mini">Edit</a> <a onclick="return confirm('Are you sure you want to delete this item')" href="{{url('delete-category/'.$category->id)}}" class="btn btn-danger btn-mini">Delete</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>