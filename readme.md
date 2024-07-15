# Free Upload Image

- [Giới Thiệu](#giới-thiệu)
- [Tính Năng](#tính-năng)
- [Yêu Cầu](#yêu-cầu)
- [Cài Đặt](#cài-đặt)
- [Sử Dụng](#sử-dụng)
- [Cách Lấy Imgur API](#cách-lấy-imgur-api)
- [Người Sáng Tạo](#người-sáng-tạo)

## Giới Thiệu

**Free Upload Image** là một website cho phép người dùng upload ảnh lên Imgur miễn phí. Dự án này nhằm cung cấp một giao diện đơn giản và thân thiện cho việc upload và chia sẻ ảnh.

## Tính Năng

- Upload ảnh với nhiều định dạng bao gồm JPG, PNG và GIF.
- Chuyển đổi các định dạng không được hỗ trợ sang JPEG trước khi upload.
- Chuyển đổi giữa giao diện sáng và tối để cải thiện trải nghiệm người dùng.
- Thiết kế đáp ứng tương thích với mọi kích thước thiết bị.

## Yêu Cầu

Trước khi bắt đầu, hãy đảm bảo rằng bạn đã đáp ứng các yêu cầu sau:

- PHP 7.0 trở lên
- Composer
- Máy chủ web (ví dụ: Apache, Nginx)
- Imgur API Client ID

## Cài Đặt

1. **Clone repository**
    ```bash
    git clone https://github.com/vngctcreative/webphp_free_upload_image.git
    cd free_upload_image
    ```
    
2. **Thiết lập môi trường**
    - Thêm Imgur API Client ID của bạn vào file `lib_uploadimage.php`
    - Mẫu: $client_id = "abc123456";

3. **Up Source lên host của bạn**
    - Đảm bảo máy chủ web của bạn được cấu hình để phục vụ thư mục dự án.

## Sử Dụng

1. **Mở trình duyệt web** và điều hướng đến URL nơi dự án được lưu trữ (ví dụ: `http://localhost/webphp_free_upload_image`).
2. **Chọn một file ảnh** để upload.
3. **Nhấn vào "Upload Ảnh"** để upload ảnh lên Imgur.
4. **Sao chép liên kết ảnh** được cung cấp sau khi upload thành công để chia sẻ nó.

## Cách Lấy Imgur API

Để upload ảnh lên Imgur, bạn cần có Imgur API Client ID. Thực hiện các bước sau để lấy Client ID:

1. Truy cập [Trang Đăng Ký API của Imgur](https://api.imgur.com/oauth2/addclient).
2. Đăng nhập vào tài khoản Imgur của bạn.
3. Điền vào biểu mẫu để tạo một ứng dụng mới.
4. Sao chép `Client ID` được cung cấp và dán nó vào file `lib_uploadimage.php`.

## Preview Website - Link Image Up Từ Chính Website Code Lên
![Preview Website](https://i.imgur.com/O0gtLz2.png)

### Người Sáng Tạo

**Free Upload Image** Coded By [Creative](https://vngctcreative.github.io/).
