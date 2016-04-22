@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Product List
                    <button type="button" class="btn btn-default pull-right" aria-label="Right Align" data-toggle="modal" data-target="#addModal">
                        <span class="glyphicon glyphicon-plus pull-right" aria-hidden="true"></span>
                    </button>
                </div>

                <div class="panel-body">
                    <div class="list-group">
                <?php
                    foreach($items as $item)
                    {

                ?>
                {{--list item--}}
                        <li class="list-group-item"> <span class="badge"><?php echo $item["aisle"] ?></span>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-info">Edit</button>
                                <button type="button" class="btn btn-danger">Delete</button>
                            </div>

                            <?php echo $item["name"] ?>

                        </li>

                    <?php } ?>
                    </div>
                </div>



            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="addModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add a Product</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="product_name">Product Name</label>
                    <input type="text" class="form-control" id="product_name" rows="6">
                </div>
                <div class="form-group">
                    <label for="aisle">Aisle</label>
                    <input type="text" class="form-control" id="aisle" rows="6">
                </div>
            </div>
            <div class="modal-footer">
                <div class="btn btn-group">
                    <button type="button" class="btn btn-default btn-success" data data-dismiss="modal">Add</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
