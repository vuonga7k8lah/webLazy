## GIAO DIỆN CỦA ỨNG DỤNG
### Đăng nhập / Đăng kí
- Đăng nhập
- Đăng kí
 <p align="center">
 <img src="imageReview/dangnhap.PNG" height = "480" width="270"><img src="imageReview/dangki.PNG" height = "480" 
width="270">
 </p>

### Giao diện màn hình chính
   <p align="center">
<img src="imageReview/giaodien.PNG" height = "480" width="270">
 </p>

### Danh sách các sản phẩm có ở app
 <p align="center">
<img src="imageReview/ListProduct.PNG" height = "520" width="300">
 </p>

### Xem danh sách từng sản phẩm
  <p align="center">
 <img src="imageReview/EveryProductGiay.PNG" height = "480" width="270"><img src="imageReview/EveryProductNon.PNG" height = "480" width="270">
 </p>

### Thông tin từng sản phẩm
  <p align="center">
 <img src="imageReview/infoGiay.PNG" height = "480" width="270"> <img src="imageReview/infiQuan.PNG" height = "480" width="270">
 </p>

### Danh sách các sản phẩm của khách hàng đặt mua
  <p align="center">
 <img src="imageReview/ListBuy.PNG" height = "520" width="300">
 </p>

### Màn hình xác nhận thông tin khách hàng mua hàng
   <p align="center">
 <img src="imageReview/customer.PNG" height = "520" width="300">
 </p>

### Danh sách khách hàng đặt mua và chi tiết đơn hàng
 <p align="center">
 <img src="imageReview/donhang.PNG" height = "279" width="1273">
   <img src="imageReview/chitietdonhang.PNG" height = "282" width="1228">
 </p>

### Mô tả thông tin khách hàng khi đặt hàng

- Id trong bảng 'donhang' sẽ được tự động tạo khi khách hàng nhấn button xác nhận để thanh toán đơn hàng
- Thông tin của khách hàng sẽ được hệ thống tự động cập nhật lên Server
- Thông tin chi tiết các sản phẩm mà khách hàng mua cũng được hệ thống cập nhật lên bảng 'chitietdonmuahang' thông qua khóa của bảng là 'madonhang'.
- 'Id' là khóa chính trong bảng 'donhang', 'madonhang' là khóa ngoại trong bảng 'chitietdonmuahang'
- Thông qua 'Id' và 'madonhang' chủ cửa hàng sẽ biết được khách hàng nào đặt sản phẩm nào và đưa đến đúng địa chỉ mà khách hàng đã đặt.
 
