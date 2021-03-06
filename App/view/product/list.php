<div class="container mt-5">
    <h2 style="text-align: center">Product Management (^_^)</h2><br>
    <table class="table table table-hover mt-3 " border="3px">
        <a class="btn btn-primary" href="index.php?page=product-create">Create</a>
        <thead class="thead-light">
        <tr>
            <th>ID</th>
            <th>Product Code</th>
            <th>Name</th>
            <th>Type</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Date Create</th>
            <th>Description</th>
            <th colspan="2" style="text-align: center">Action</th>
        </tr>
        </thead>
        <tbody>
        <tbody>
        <?php if (isset($products)): ?>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td> <?php echo $product->id ?></td>
                    <td> <?php echo $product->productCode ?></td>
                    <td> <?php echo $product->name ?></td>
                    <td> <?php echo $product->type ?></td>
                    <td> <?php echo $product->price ?></td>
                    <td> <?php echo $product->quantity ?></td>
                    <td> <?php echo $product->dateCreated ?></td>
                    <td> <?php echo $product->description ?></td>
                    <td><a style="color: red" onclick="return confirm('Bạn có muốn xóa?')"
                           href="index.php?page=product-delete&id=<?php echo $product->id ?>">Delete</a></td>
                    <td><a style="color: #2765d2" href="index.php?page=product-update&id=<?php echo $product->id ?>">Update</a>
                    </td>

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
    </table>
</div>