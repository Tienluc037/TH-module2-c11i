<form action="" method="post">
    <input type="text" name="productCode" placeholder="Nhập mã sản phẩm" value="<?php echo $product->productCode ?>">
    <input type="text" name="name" placeholder="Nhập tên sản phẩm" value="<?php echo $product->name ?>">
    <!--    <input type="text" name="type" placeholder="Loại sản phẩm">-->
    <select name="type" id="">
        <option value="Điện Tử">Điện Tử</option>
        <option value="Đồ ăn vặt">Đồ ăn vặt</option>
        <option value="Đồ gia dụng">Đồ gia dụng</option>
        <option value="Đồ chơi">Đồ chơi</option>
    </select>
    <input type="text" name="price" placeholder="Nhập giá sản phẩm" value="<?php echo $product->price ?>">
    <input type="text" name="quantity" placeholder="Nhập số lượng sản phẩm" value="<?php echo $product->quantity ?>">
    <input type="date" name="dateCreated" placeholder="Ngày tạo" value="<?php echo $product->dateCreated ?>">
    <input type="text" name="description" placeholder="Mô tả sản phẩm" value="<?php echo $product->description?>">
    <button>Update</button>
</form>