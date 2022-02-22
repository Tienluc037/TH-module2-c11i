<!---->
<!--<table border="3px">-->
<!--    <thead>-->
<!--    <tr>-->
<!--        <th>ID</th>-->
<!--        <th>Product Code</th>-->
<!--        <th>Name</th>-->
<!--        <th>Type</th>-->
<!--        <th>Price</th>-->
<!--        <th>Quantity</th>-->
<!--        <th>Date Create</th>-->
<!--        <th>Description</th>-->
<!--        <th colspan="2">Action</th>-->
<!--    </tr>-->
<!--    </thead>-->
<!--    <tbody>-->
<!--    --><?php //if(isset($products)): ?>
<!--    --><?php //foreach ($products as $product): ?>
<!--    <tr>-->
<!--        <td> --><?php //echo $product->id?><!--</td>-->
<!--        <td> --><?php //echo $product->productCode?><!--</td>-->
<!--        <td> --><?php //echo $product->name?><!--</td>-->
<!--        <td> --><?php //echo $product->type?><!--</td>-->
<!--        <td> --><?php //echo $product->price?><!--</td>-->
<!--        <td> --><?php //echo $product->quantity?><!--</td>-->
<!--        <td> --><?php //echo $product->dateCreated?><!--</td>-->
<!--        <td> --><?php //echo $product->description?><!--</td>-->
<!--        <td><a onclick="return confirm('Bạn có muốn xóa?')" href="index.php?page=product-delete&id=--><?php //echo $product->id?><!--">Delete</a></td>-->
<!--        <td><a href="index.php?page=product-update&id=--><?php //echo $product->id?><!--">Update</a></td>-->
<!---->
<!--    </tr>-->
<!---->
<!--    --><?php //endforeach; ?>
<!--    --><?php //else: ?>
<!--    <tr>-->
<!--        <td colspan="8">Không có dữ liệu</td>-->
<!--    </tr>-->
<!--    --><?php //endif; ?>
<!--    </tbody>-->
<!--</table>-->


<a href="index.php?page=product-create">Create</a>
<div class="container">
<table class="table table-hover" >
    <thead>
    <tr>
        <th>ID</th>
        <th>Product Code</th>
        <th>Name</th>
        <th>Type</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Date Create</th>
        <th>Description</th>
        <th colspan="2">Action</th>
    </tr>
    </thead>
    <tbody>
    <tbody>
    <?php if(isset($products)): ?>
        <?php foreach ($products as $product): ?>
            <tr>
                <td> <?php echo $product->id?></td>
                <td> <?php echo $product->productCode?></td>
                <td> <?php echo $product->name?></td>
                <td> <?php echo $product->type?></td>
                <td> <?php echo $product->price?></td>
                <td> <?php echo $product->quantity?></td>
                <td> <?php echo $product->dateCreated?></td>
                <td> <?php echo $product->description?></td>
                <td><a onclick="return confirm('Bạn có muốn xóa?')" href="index.php?page=product-delete&id=<?php echo $product->id?>">Delete</a></td>
                <td><a href="index.php?page=product-update&id=<?php echo $product->id?>">Update</a></td>

            </tr>

        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="8">Không có dữ liệu</td>
        </tr>
    <?php endif; ?>
    </tbody>
    </tbody>
</table>
</div>