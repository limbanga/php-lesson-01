### **Bài 1: Cú pháp cơ bản và cách viết PHP**  

Bây giờ bạn đã cài đặt xong PHP, mình sẽ hướng dẫn bạn viết những dòng PHP đầu tiên.

---

### **1. Cách viết mã PHP**
PHP được nhúng trong HTML và đặt trong cặp thẻ `<?php ... ?>`. Ví dụ:

```php
<?php
    echo "Chào mừng bạn đến với PHP!";
?>
```
Lưu file này dưới dạng **index.php** và đặt vào thư mục `C:\xampp\htdocs\`.  
Mở trình duyệt và nhập:
```
http://localhost/index.php
```
Nếu hiện dòng **"Chào mừng bạn đến với PHP!"**, bạn đã chạy thành công.

---

### **2. Biến và kiểu dữ liệu trong PHP**
#### **Khai báo biến**
Biến trong PHP bắt đầu bằng `$`, ví dụ:

```php
<?php
    $ten = "Nam";
    $tuoi = 25;
    echo "Xin chào, tôi tên là $ten và tôi $tuoi tuổi.";
?>
```

🔹 **Quy tắc đặt tên biến**:
- Bắt đầu bằng ký tự `$` và một chữ cái hoặc `_`, không được bắt đầu bằng số.
- Phân biệt chữ hoa, chữ thường (`$ten` và `$Ten` là khác nhau).

#### **Các kiểu dữ liệu**
PHP có các kiểu dữ liệu cơ bản:
- **Chuỗi (String)**: `"Hello"`  
- **Số nguyên (Integer)**: `123`  
- **Số thực (Float)**: `3.14`  
- **Boolean**: `true` hoặc `false`  
- **Mảng (Array)**: `["Táo", "Cam", "Xoài"]`  
- **Đối tượng (Object)**  
- **NULL**  

Ví dụ:

```php
<?php
    $chuoi = "Hello";
    $so = 123;
    $soThuc = 3.14;
    $dungSai = true;
    $mang = array("Táo", "Cam", "Xoài");

    echo "Kiểu chuỗi: $chuoi <br>";
    echo "Kiểu số: $so <br>";
    echo "Kiểu số thực: $soThuc <br>";
    echo "Kiểu boolean: $dungSai <br>";
    echo "Mảng phần tử đầu tiên: $mang[0]";
?>
```

---

### **3. Toán tử trong PHP**
PHP hỗ trợ nhiều loại toán tử:

#### **Toán tử số học**
| Toán tử | Ý nghĩa  | Ví dụ (`$a = 10`, `$b = 5`) |
|---------|---------|------------------|
| `+`     | Cộng    | `$a + $b = 15`   |
| `-`     | Trừ     | `$a - $b = 5`    |
| `*`     | Nhân    | `$a * $b = 50`   |
| `/`     | Chia    | `$a / $b = 2`    |
| `%`     | Chia lấy dư | `$a % $b = 0` |

Ví dụ:

```php
<?php
    $a = 10;
    $b = 5;
    echo "Tổng: " . ($a + $b);
?>
```

#### **Toán tử so sánh**
| Toán tử | Ý nghĩa | Ví dụ (`$a = 10`, `$b = 5`) |
|---------|---------|------------------|
| `==`   | Bằng    | `$a == $b` → false |
| `!=`   | Khác    | `$a != $b` → true  |
| `>`    | Lớn hơn | `$a > $b` → true  |
| `<`    | Nhỏ hơn | `$a < $b` → false |

---

### **Bài tập thực hành**
1️⃣ Tạo file **bien.php** trong `htdocs`, viết code hiển thị tên, tuổi của bạn.  
2️⃣ Viết chương trình tính tổng, hiệu, tích, thương của hai số.  
3️⃣ Dùng toán tử so sánh kiểm tra hai số có bằng nhau không.

Bạn làm thử rồi gửi mình xem nhé! 🚀