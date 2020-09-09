<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Categories</a> <a href="#" class="current">Add Categories</a> </div>
        <h1>Product</h1>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                        <h5>Add Product</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <form class="form-horizontal" method="post" action="{{url('add-product')}}" name="add_product" id="add_product" novalidate="novalidate">
                            {{csrf_field()}}
                            <div class="control-group">
                                <label class="control-label">Product Name</label>
                                <div class="controls">
                                    <input type="text" name="product_name" id="product_name">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Qty</label>
                                <div class="controls">
                                    <textarea name="product_qty" id="product_qty"></textarea>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Price</label>
                                <div class="controls">
                                    <textarea name="product_price" id="product_price"></textarea>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">orderdate</label>
                                <div class="controls">
                                    <input type="date" id="orderdate" name="birthday">
                                </div>
                            </div>



                            <div class="form-actions">
                                <input type="submit" value="Add Product" class="btn btn-success">
                                {{ csrf_field() }}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>