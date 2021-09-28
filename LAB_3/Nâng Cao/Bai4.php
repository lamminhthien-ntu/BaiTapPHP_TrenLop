<form method="get" action="login.php">
  <fieldset>
    <legend>Thông tin đăng nhập</legend>
    <label>Họ tên</label>
    <input type="text" name="hoten" value=""><br><br>
    <label>Địa chỉ</label>
    <input type="text" name="diachi" value=""><br><br>
    <label>Số điện thoại</label>
    <input type="text" name="sdt" value=""><br><br>
    <label>Giới tính</label>
    <input type="radio" name="sex" value="Nam" checked>
    <label>Nam</label>
    <input type="radio" name="sex" value="Nữ">
    <label>Nữ</label>
    <label>Quốc tịch</label>
    <select name="quoctich"><br><br>
      <option value="Việt Nam">Việt Nam</option>
      <option value="Trung Quốc">Trung Quốc</option>
      <option value="Mỹ">Mỹ</option>
    </select>
    <label>Các môn đã học</label>
    <input type="checkbox" value="php"  name="monhoc[]"> PHP</input>
    <input type="checkbox" value="mysql" name="monhoc[]"> MySQL</input>
    <input type="checkbox" value="c#" name="monhoc[]"> C#</input>
    <input type="checkbox" value="xml" name="monhoc[]"> XML</input>
    <input type="checkbox" value="python" name="monhoc[]"> Python</input><br><br>
    <textarea name="ghichu" rows="5" cols="20"></textarea><br><br>
    <input type="submit" value="Gửi">
    <input type="reset" name="Hủy">
    
  </fieldset>
</form>