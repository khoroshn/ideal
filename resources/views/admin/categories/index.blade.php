
    <style type="text/css" id="treeview6-style">
        .treeview .list-group-item{cursor:pointer}
        .treeview span.indent{margin-left:10px;margin-right:10px}
        .treeview span.icon{width:12px;margin-right:5px}
        .treeview .node-disabled{color:silver;cursor:not-allowed}
        .node-treeview6{color:#428bca;}
        .node-treeview6:not(.node-disabled):hover{background-color:#F5F5F5;}
    </style>


    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div id="treeview-selectable" class="treeview">
                    <ul class="list-group">
                        @include('admin.categories.rectree', ['categories' => $categories])
                    </ul>
                </div>
            </div>

        </div>


    </div>
<script>
    var defaultData = [
        @include('admin.categories.recdata', ['categories' => $categories])
    ];
</script>


    <script src="{{asset('js/bootstrap-treeview.js')}}"></script>
    <script src="{{asset('js/tree.js')}}"></script>



