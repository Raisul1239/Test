<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Categories</a> <a href="#" class="current">Add Categories</a> </div>
        <h1>Categories</h1>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                        <h5>Add Categories</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <form class="form-horizontal" method="post" action="{{url('add-category')}}" name="add_category" id="add_category" novalidate="novalidate">
                            {{csrf_field()}}
                            <div class="control-group">
                                <label class="control-label">Product Name</label>
                                <div class="controls">
                                    <input type="text" name="category_name" id="category_name">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Qty</label>
                                <div class="controls">
                                    <textarea name="description" id="description"></textarea>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Price</label>
                                <div class="controls">
                                    <textarea name="description" id="description"></textarea>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Description</label>
                                <div class="controls">
                                    <textarea name="description" id="description"></textarea>
                                </div>
                            </div>


                            <div class="control-group">
                                <label class="control-label">URL (Start with http://)</label>
                                <div class="controls">
                                    <input type="text" name="url" id="url">
                                </div>
                            </div>
                            <div class="form-actions">
                                <input type="submit" value="Add Category" class="btn btn-success">
                                {{ csrf_field() }}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>