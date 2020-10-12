<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <title>Facebook</title>

    <style type="text/css">
        .btn-success{
          font-size: 28px;
          margin-left: 70px;
          width:300px; 
        }
     </style>

</head>
<body>

<div class="container">
  <div class="col-sm-6">
    <h2>Đăng Ký</h2>
  <h6>Nhanh chóng và dễ dàng</h6>
  <hr>
  </div>

  <div class="col-sm-6">
    <form method="POST" action="login.php">
        <div class="form-row">
          <div class="col">
            <input type="text" class="form-control is-invalid" placeholder="Họ">
          </div>
          <div class="col">
            <input type="text" class="form-control" placeholder="Tên">
          </div>
        </div>
        <br>

        <div class="form-group">
          <input type="text" class="form-control" id="email" name="email" placeholder="Số di động hoặc email">
        </div>

        <div class="form-group">
          <input type="text" class="form-control" id="password" name="password" placeholder="Mật khẩu mới">
        </div>

    <div class="form-group">
      <div>
        <label>Ngày Sinh</label>
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-question-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033a.237.237 0 0 1-.24-.247C5.35 4.091 6.737 3.5 8.005 3.5c1.396 0 2.672.73 2.672 2.24 0 1.08-.635 1.594-1.244 2.057-.737.559-1.01.768-1.01 1.486v.105a.25.25 0 0 1-.25.25h-.81a.25.25 0 0 1-.25-.246l-.004-.217c-.038-.927.495-1.498 1.168-1.987.59-.444.965-.736.965-1.371 0-.825-.628-1.168-1.314-1.168-.803 0-1.253.478-1.342 1.134-.018.137-.128.25-.266.25h-.825zm2.325 6.443c-.584 0-1.009-.394-1.009-.927 0-.552.425-.94 1.01-.94.609 0 1.028.388 1.028.94 0 .533-.42.927-1.029.927z"/>
</svg>
      </div>

      <div class="form-inline col-sm-18">
        <select class="form-control col-sm-4" name="ngaySinh">
          <option value="0" selected="1">Ngày</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
          <option value="21">21</option>
          <option value="22">22</option>
          <option value="23">23</option>
          <option value="24">24</option>
          <option value="25">25</option>
          <option value="26">26</option>
          <option value="27">27</option>
          <option value="28">28</option>
          <option value="29">29</option>
          <option value="30">30</option>
          <option value="31">31</option>
        </select>
        <select class="form-control col-sm-4" name="ThángSinh">
          <option value="0" selected="1">Tháng</option>
          <option value="1">Tháng 1</option>
          <option value="2">Tháng 2</option>
          <option value="3">Tháng 3</option>
          <option value="4">Tháng 4</option>
          <option value="5">Tháng 5</option>
          <option value="6">Tháng 6</option>
          <option value="7">Tháng 7</option>
          <option value="8">Tháng 8</option>
          <option value="9">Tháng 9</option>
          <option value="10">Tháng 10</option>
          <option value="11">Tháng 11</option>
          <option value="12">Tháng 12</option>
        </select>
        <select class="form-control col-sm-4" name="namSinh">
          <option value="0" selected="1">Năm</option>
          <option value="2020">2020</option>
          <option value="2019">2019</option>
          <option value="2018">2018</option>
          <option value="2017">2017</option>
          <option value="2016">2016</option>
          <option value="2015">2015</option>
          <option value="2014">2014</option>
          <option value="2013">2013</option>
          <option value="2012">2012</option>
          <option value="2011">2011</option>
          <option value="2010">2010</option>
          <option value="2009">2009</option>
          <option value="2008">2008</option>
          <option value="2007">2007</option>
          <option value="2006">2006</option>
          <option value="2005">2005</option>
          <option value="2004">2004</option>
          <option value="2003">2003</option>
          <option value="2002">2002</option>
          <option value="2001">2001</option>
          <option value="2000">2000</option>
          <option value="1999">1999</option>
          <option value="1998">1998</option>
          <option value="1997">1997</option>
          <option value="1996">1996</option>
          <option value="1995">1995</option>
          <option value="1994">1994</option>
          <option value="1993">1993</option>
          <option value="1992">1992</option>
          <option value="1991">1991</option>
          <option value="1990">1990</option>
        </select>
      </div>
      <div class="form-group">
        <br>
        <label>Giới Tính</label>
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-question-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033a.237.237 0 0 1-.24-.247C5.35 4.091 6.737 3.5 8.005 3.5c1.396 0 2.672.73 2.672 2.24 0 1.08-.635 1.594-1.244 2.057-.737.559-1.01.768-1.01 1.486v.105a.25.25 0 0 1-.25.25h-.81a.25.25 0 0 1-.25-.246l-.004-.217c-.038-.927.495-1.498 1.168-1.987.59-.444.965-.736.965-1.371 0-.825-.628-1.168-1.314-1.168-.803 0-1.253.478-1.342 1.134-.018.137-.128.25-.266.25h-.825zm2.325 6.443c-.584 0-1.009-.394-1.009-.927 0-.552.425-.94 1.01-.94.609 0 1.028.388 1.028.94 0 .533-.42.927-1.029.927z"/>
</svg>
      </div>
      <div class="form-inline">
        <div class="custom-control custom-radio custom-control-inline border rounded col-sm-3">
            <label class="form-check-label" for="nu">Nữ</label>
            <input class="form-check-input" name="gioiTinh" type="radio" id="nu" value="nu">
        </div>
        <div class="custom-control custom-radio custom-control-inline border rounded col-sm-3">
          <label class="form-check-label" for="nu">Nam</label>
          <input class="form-check-input" name="gioiTinh" type="radio" id="nam" value="nam">
        </div>
        <div class="custom-control custom-radio custom-control-inline border rounded col-sm-4">
          <label class="form-check-label" for="nu">Tùy Chỉnh</label>
          <input class="form-check-input" name="gioiTinh" type="radio" id="gioiTinh" value="khong ro">
        </div>
      </div>
      <br>
      Bằng cách nhấp vào Đăng ký, bạn đồng ý với <a href="#">Điều khoản</a>, <a href="#">Chính sách dữ liệu</a> và <a href="#">Chính sách cookie</a> của chúng tôi. Bạn có thể nhận được thông báo của chúng tôi qua SMS và hủy nhận bất kỳ lúc nào.
      <div class="form-group col-sm-4">
        <br><br><br>
      <button type="submit" class="btn btn-success"><b>Đăng ký</button>
      </div>
    </div>
    </div>

  </form>
</div>
</body>
</html>
