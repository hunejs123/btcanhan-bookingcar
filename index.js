// ĐĂNG NHẬP
const loginContainer = document.getElementById('loginContainer');
const btnDangNhap = document.getElementById('btnDangNhap');
const btnDangNhap1 = document.getElementById('btnDangNhap1');
const btnDangNhap2 = document.getElementById('btnDangNhap2');
const dkContainer = document.getElementById('dkContainer'); // Đúng ID là 'dkContainer'

// Ẩn container đăng kí khi trang được tải
loginContainer.classList.add('hidden');
dkContainer.classList.add('hidden2'); // Ẩn container đăng kí

// Xử lý sự kiện click cho nút Đăng nhập
btnDangNhap.addEventListener('click', function() {
    // Ẩn container đăng kí nếu đang hiển thị
    dkContainer.classList.add('hidden2');
    
    // Hiển thị container đăng nhập
    loginContainer.classList.remove('hidden');
    loginContainer.classList.add('overlay1');
});
btnDangNhap1.addEventListener('click', function() {
    // Ẩn container đăng kí nếu đang hiển thị
    dkContainer.classList.add('hidden2');
    
    // Hiển thị container đăng nhập
    loginContainer.classList.remove('hidden');
    loginContainer.classList.add('overlay1');
});
btnDangNhap2.addEventListener('click', function() {
    // Ẩn container đăng kí nếu đang hiển thị
    dkContainer.classList.add('hidden2');
    
    // Hiển thị container đăng nhập
    loginContainer.classList.remove('hidden');
    loginContainer.classList.add('overlay1');
});

// ĐĂNG KÍ
const btnDangKy = document.getElementById('btnDangKy');
const btnDangKyNhanh = document.getElementById('btnDangKyNhanh');
const btnDangKyChua = document.getElementById('btnDangKyChua');

// Xử lý sự kiện click cho nút Đăng ký
btnDangKy.addEventListener('click', function() {
    // Ẩn container đăng nhập nếu đang hiển thị
    loginContainer.classList.add('hidden');
    
    // Hiển thị container đăng kí
    dkContainer.classList.remove('hidden2');
    dkContainer.classList.add('overlay2');
});
btnDangKyNhanh.addEventListener('click', function() {
    // Ẩn container đăng nhập nếu đang hiển thị
    loginContainer.classList.add('hidden');
    
    // Hiển thị container đăng kí
    dkContainer.classList.remove('hidden2');
    dkContainer.classList.add('overlay2');
});
btnDangKyChua.addEventListener('click', function() {
    // Ẩn container đăng nhập nếu đang hiển thị
    loginContainer.classList.add('hidden');
    
    // Hiển thị container đăng kí
    dkContainer.classList.remove('hidden2');
    dkContainer.classList.add('overlay2');
});
