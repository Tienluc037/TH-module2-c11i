<div class="container mt-5" style="background-color: rgba(150,179,232,0.72)">
    <h2>Update Products</h2><br>
    <form action="" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Product Code</label>
            <input type="text" name="productCode" placeholder="Nhập mã sản phẩm"
                   value="<?php echo $product->productCode ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Name Product</label>
            <input type="text" name="name" placeholder="Nhập tên sản phẩm" value="<?php echo $product->name ?>">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Price</label>
            <input type="text" name="price" placeholder="Nhập giá sản phẩm" value="<?php echo $product->price ?>">
        </div>
        <div class="form-group">

            <label for="exampleInputPassword1">Quantity</label>
            <input type="text" name="quantity" placeholder="Nhập số lượng sản phẩm"
                   value="<?php echo $product->quantity ?>">
        </div>
        <div class="form-group">

            <label for="exampleInputPassword1">Date Create</label>
            <input type="date" name="dateCreated" placeholder="Ngày tạo" value="<?php echo $product->dateCreated ?>">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea class="form-control" name="description" rows="3"
                      placeholder="Mô tả sản phẩm"><?php echo $product->description ?></textarea>
        </div>
        <div>

            <label for="exampleFormControlTextarea1">Type</label>
            <select name="type" id="">
                <option value="Điện Tử">Điện Tử</option>
                <option value="Đồ ăn vặt">Đồ ăn vặt</option>
                <option value="Đồ gia dụng">Đồ gia dụng</option>
                <option value="Đồ chơi">Đồ chơi</option>
            </select>
        </div>
        <br>
        <button type="submit" class="btn btn-success">Update</button>
        <button class="btn btn-outline-primary"><a href="index.php?page=product-list">Back</a></button>
    </form>
</div>